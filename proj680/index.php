<?php
require 'dbInfo.php';

?>



<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Videos Sharing</title>
    <link href="styles.css" rel="stylesheet"/>
    </head>
    <body>
        
    <section class="s1">    
        <h1>**Free Fun Video Sharing**</h1>
        <p>Please share links of videos that you feel will help the community!  Thank you.</p>
        </section>
    <section class="s2">
    <form method="post">
      <fieldset>
        <label for="first-name">Enter Your First Name: <input id="first-name" name="fname" type="text" required /></label>
        <label for="last-name">Enter Your Last Name: <input id="last-name" name="lname" type="text" required /></label>
        <label for="email">Enter Your Email: <input id="email" name="email" type="email" required /></label>
      </fieldset>
      <fieldset>
        <label for="title-video">Share a title for your video: <input id="title-video" type="text" name="vidtitle" required/></label><!-- comment -->
        <label for="desc-video">Share a description for your video: <input id="desc-video" type="text" name="viddesc" required/></label>
        <label for="link-video">Share a link of a funny video: <input id="link-video" type="text" name="vidlink" required/></label>
      <input type="submit" value="Submit" />
    </form>
    </section>
        <section class='s3'>
            <a href='videos.php'><button>View Shared Videos</button></a><!-- comment -->
        </section>   
        
    </body>
</html>

<?php
        if(isset($_POST['vidlink'])) {
        
           //$query="DELETE FROM posts WHERE post_id='".$_POST['Delete']."'";
            $query="INSERT INTO `videos` (`video_title`, `video_desc`, `video_link`, `fname`, `lname`, `email`) "
                    . "VALUES ('".$_POST['vidtitle']."', '".$_POST['viddesc']."','".$_POST['vidlink']."','".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."')";
            $connection->query($query);
            echo "<script>alert('Your video upload is sucessful! =)');</script>";
            //header("Location: index.php");
        }
?>
