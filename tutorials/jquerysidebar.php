<?php
$db = new database(); 
?>
     <div class="col-sm-3">
  <aside>
        <ul class="color">
        <h3 class="widget_title">Tutorial</h3>
        <?php 
        $query="SELECT id,lesson_title FROM jquery"; 
        $lesson=$db->select($query);
        while($row=$lesson->fetch_array()):?> 
       <h4> <li><a href="jquerylesson.php?id8=<?php echo $row['id'];?>"><?php echo $row['lesson_title'];?></a></li></h4>
        <?php endwhile;?>
        </ul>
</aside>
</div>
 
