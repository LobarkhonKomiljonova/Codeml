<!--<?php

// $link = mysqli_connect("localhost", "root", "", "codeml");
 
// Check connection
// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }
 
// // Attempt select query execution
// $sql = "SELECT id, first_name,last,email FROM user_info";
// if($result = mysqli_query($link, $sql)){
//     if(mysqli_num_rows($result) > 0){
//         echo "<table>";
//             echo "<tr>";
//                 echo "<th>id</th>";
//                 echo "<th>first_name</th>";
//                 echo "<th>last_name</th>";
//                 echo "<th>email</th>";
//             echo "</tr>";
//         while($row = mysqli_fetch_array($result)){
//                 $id = $row['id'];
//                 $first_name = $row['first_name'];
//                 $last_name = $row['last'];
//                 $email = $row['email'];
//                 $myJSON = '{ "id":"$id", "first":$first_name, "last":"$last_name" }';
//             print_r($myJSON);
//         }
//         echo "</table>";
//         Free result set
//         mysqli_free_result($result);
//     } else{
//         echo "No records matching your query were found.";
//     }
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }
 
// mysqli_close($link);
?>-->

<?php
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_GET["x"], false);

$conn = new mysqli("myServer", "myUser", "myPassword", "Northwind");
$result = $conn->query("SELECT name FROM ".$obj->$table." LIMIT ".$obj->$limit);
$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo "myFunc(".json_encode($outp).")";
?>