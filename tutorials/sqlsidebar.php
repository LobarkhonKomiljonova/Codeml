<?php
$db = new database(); 
?>
     <div class="col-sm-3">
  <aside>
        <ul class="color">
        <h3 class="widget_title">Tutorial</h3>
        <?php 
        $query="SELECT id,lesson_title FROM msql"; 
        $lesson=$db->select($query);
        while($row=$lesson->fetch_array()):?> 
       <h4> <li><a href="sqllesson.php?id5=<?php echo $row['id'];?>"><?php echo $row['lesson_title'];?></a></li></h4>
        <?php endwhile;?>
        </ul>
</aside>
</div>
 
