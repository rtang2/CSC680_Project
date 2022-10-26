<?php
require 'dbInfo.php';

?>


<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Videos</title>
    <link href="styles1.css" rel="stylesheet"/>
    </head>
    </head>
    <body>

        <?php
         $query_v="SELECT * FROM videos";
            
         $result_v = $connection->query($query_v);
         
         //$query_c="SELECT * FROM comment_videos";
            
         //$result2 = $connection->query($query_c);
        
        ?>

        
        <?php while($videos = $result_v->fetch_assoc()) { ?>
        <?php $query_c="SELECT * FROM comments_videos Where vid=".$videos['video_id'];
                $result_c=$connection->query($query_c);
        ?>
        <h1 style="text-decoration:underline"><?=$videos['video_title']?><h1>
        <iframe width="420" height="315"
        src="<?=$videos['video_link']?>">
        </iframe>
                <form method="post">
                    <button type="submit" name="edit" value="<?=$videos['video_id']?>">Edit</button><button type="submit" name="delete" value="<?=$videos['video_id']?>">Delete</button><button type="submit" name="comment" value="<?=$videos['video_id']?>">Comment</button>
                </form>
        <p class="desc"><?=$videos['video_desc']?></p>
        <?php 
        $num=0;
        while($comments = $result_c->fetch_assoc())
        {
            $num++;
            echo "<p class='com'>Comment (".$num."): ".$comments['comment_body']."</p>";
            
        }
        ?>
        <hr>
        <?php } ?>
        
     <?php print_r($_POST)?>
    
    </body>
</html>


