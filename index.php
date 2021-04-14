<?php
  $query="select * from source_code";
  $sel=mysqli_query($conn,$query);
  while($row=mysqli_fetch_array($sel))
  {
  	$id=$row['code_id'];
            
            $title=$row['title'];
            $img=$row['img'];
            $link_file=$row['link_file'];
              
  ?>

  //////HTMl Code


  <?php } ?>