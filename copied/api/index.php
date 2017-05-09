 <?php
        session_start();
        require 'vendor/autoload.php';
        $app = new Slim\App(); 
        $app->post('/', function ($request, $response, $args) 
        {
            $data = $request->getParsedBody();
            $login=$data['email']; 
            $pass=$data['password'];
            try
            {
                $db=new PDO("mysql:host=localhost;dbname=codeml", "root","");
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $query = sprintf("SELECT * FROM users WHERE email=%s AND password=%s;", $db->quote($login), $db->quote($pass));
                $user=$db->prepare($query); 
                $user->execute();
                $result = $user->fetchAll(PDO::FETCH_ASSOC);
                $message = count($result);
                if(!$message){
                    $message = "Login or password is wrong. Try again";}
                else
                {
                    foreach ($result as $key) {
                        $user_type = $key['user_type'];
                        $u_name = $key['user_name'];
                        $u_id = $key["id"];
                        if ($user_type==1) {
                            $_SESSION["admin"]=$user_type;
                            $_SESSION["user"] = NULL;
                            $_SESSION["user_name"] = $u_name;
                            $_SESSION["user_id"] = $u_id;
                        }
                        elseif ($user_type==0) {
                            $_SESSION["admin"]= NULL;   
                            $_SESSION["user"] = 1;
                            $_SESSION["user_name"] = $u_name;   
                            $_SESSION["user_id"] = $u_id;
                        }
                    }
                }
            }
            catch(PDOException $ex)
            {
            print $ex->getMessage();
            } 
        $ans=array("message"=>$message);
        $ans["status"] = 'received';
        return $response->withJson($ans);
    });
$app->run();
?>
