<?php
  include_once('config.php');
  error_reporting(1);

  include('wp-load.php');  
  global $post;
  $postIds = $_POST['proj_id'];
  $query = new WP_Query('post_type=projects&p='.$postIds);
  while($query->have_posts()):$query->the_post();
 ?>
 
 <ul>
    <li class="border_none">
        <a href="#">
            <div class="list_work">
               <div class="image">
                   <img src="img/icon2-small.png" alt="small_icon"/>
               </div>
               <p class="appeal"><?php the_title();?></p>
            </div>
        </a>
    </li>
 </ul>
        <div class="container">
            <p class="date"><?php the_time('F j, Y'); ?></p>
            <?php the_content();?>
        </div>
 <?php endwhile; ?>