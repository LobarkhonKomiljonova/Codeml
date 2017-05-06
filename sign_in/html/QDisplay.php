<form id="formID"  method="post">
    <div class="scrolBarOfForm" >
      <div class="forMargining" id="forMarginingID add">
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "codeml";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
           die("Connection failed: " . $conn->connect_error);
      }

      $sql = "SELECT user_id, g_question, c_user, keywords, top_val FROM question ";
      $sql .= "ORDER BY top_val DESC";
      $result = $conn->query($sql);

      ?> 
      <center>
        <h1>All answers are provided below</h1><br>
      </center>
      
      <div class ="shr">
      
      <?php
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) { ?>
          <?php
          $q_id = $row['top_val'];
          $new_query = "SELECT question_id FROM d_question WHERE question_id = {$q_id} ";
          $res1 = $conn->query($new_query);
          $count = $res1->num_rows;
          ?>
            <a href = "only_question.php?id=<?= $q_id;?>">
              <div id="dquestion" name="dquestion" class="">
                  <div id="num_answers" name="num_answers"><?= $count;?></div>

                  <div id="q_relation" name="q_relation"><?php  ?>Something</div>
                  <label for="num_answers" class="numans">№ answers</label>
              </div>
            </a>


        <?php  }
      } 
      else 
      {
        echo "0 results";
      }
      $conn->close();
      ?>
      </div>
      </div>
  </div>
</form>