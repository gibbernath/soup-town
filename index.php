<?php

    if($_POST) {
        $name = $_POST['name'];
        $comment = $_POST['comment'];
        $handle = fopen("comments.php", "a");
        fwrite($handle, "<b><i>" . $name . "</b></i> said:<br />" . $comment .  "<hr /><br />");
        fclose($handle);
    }

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/png" href="/favicon69.png"/>
    <title>YouSoup - Me and The Raccoon Theme Song</title>
    <script>
        function inspiration ( ) {
						alert("You are seeing this ad because everything in your life has somehow led up to this moment. Every decision you’ve ever made has conglomerated into you viewing this ad in SOUP 2, every lie you’ve ever told, every time you’ve ever cried or smiled, every choice - your free will led you to seeing this ad and yet you are SO powerless: we’ve chosen the ad for you! You have no power over the ad so you may as well click on it and see what is on the other side..."); 
					}
    </script>

</head>

<style>
    body {
        background-color: rgb(58, 58, 58);
    }


    .navbar {
        background-color: rgb(221, 221, 221);
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 1350px;
        padding-bottom: 3px;
        overflow: hidden;
    }

    .logo {
        width: 10%;
    }

    .search {
        display: inline-block;
    }

    .ball {
        width: 30px;
        opacity: 50%;
    }

    .stuff {
        width: 40px;
    }

    .bell {
        width: 35px;
    }

    .tooltip {
        width: 40px;
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 120px;
        background-color: black;
        color: #fff;
        text-align: center;
        padding: 5px 0;
        border-radius: 6px;
        position: absolute;
        z-index: 1;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
    }

    .columnright {
  float: right;
  width: 335px;
  padding-left: 40px;
  padding-right: 40px;
  padding-top: 5px;
  padding-bottom: 5px;
  height: 8500px;
}

.columnleft {
  float: left;
  width: 925px;
  padding: 5px;
  height: 8500px; 
}

.videoinfo {
    line-height: 6px;
}

.like {
    width: 30px;
}

.avatar {
    width: 55px;
}

#sub:hover {
    color: blue;
}

.desc {
    line-height:20px;
}

.ad {
    width: 100%;
}

.upnext {
    width: 160px;
}

.commentsection {
    padding-top: 10px;
    padding-left: 150px;
    padding-right:150px;
}

.why {
    margin: 0px;
    font-size: 11px;
    opacity: 60%;
    float: right;
}

.duke {
    width: 95%;
    margin-top: 7px;
}

.duketwo {
    width: 100%;
    margin-top: 7px;
}

</style>

<main>

    <div class="navbar"> 
        <pre class="text">                    <img class="logo" src="yousouplogo.png">              <form class="search" action="submit">                
            <input type="text" placeholder="" size=55>
            <button type="submit"> Search</button>
              </form>                     <a href="draincore.html"><img class="ball" src="moveon.png"></a> <img class="stuff" src="stuff.png"> <img class="bell" src="bell.png">     <a href="#"><img class="tooltip" src="pg.png"></a></pre>

    <div class="columnright" style="background-color: rgb(247, 247, 247);">
        <br>
        <a href="http://badtv.online/" target="_blank"><img class="ad" style="border-style: solid; border-color: black; border-width: 1px;" src="badad1.jpg"></a>
        <p class="why" onclick="inspiration( );"><u>Why am I seeing this ad?</u></p>
        <br>
        <hr>
        <p style="margin-top: 4px; margin-bottom: 10px; font-size: 20px;"><strong>Up Next</strong></p>
        <img class="duke" src="dukeandmagic.png">
        <hr>
        <img class="duke" src="couch.png">
        <img class="duketwo" src="weate.png">

     </div>


    <div class="columnleft" style="background-color: rgb(255, 255, 255);">
        <br>
        <div class="video">
            <video class="video" width="620" height="360" controls style="display:block; margin:0 auto;">
                <source src="meandtheraccoon.mp4" type="video/mp4">
                <source src="movie.ogg" type="video/ogg">
              sorry, ur browser's not cool enough 4 video
              </video>
            </div>
            <div class="videoinfo">
        <pre style="font-family: serif; font-size: 23px;"><strong>                            Me and the Raccoon (season 1 theme song!!)</strong></pre>
        <pre style="font-family: serif; font-size: 15px; color: grey;">                                           54,349,122 views • 11 June 2009</pre>
        <pre style="font-family: serif;">                                                                                                                                 <img class="like" src="like.png">  27.9K<img class="like" src="dislike.png">  12    <a href="#">SHARE</a>  <a href="#">SAVE</a> +</pre>
        <hr style="width: 68%;">
        <pre style="font-family: serif;">                                      <img class="avatar" src="avatar.png"><strong>  NoFace451</strong>   <span style="color:grey">2.2K subscribers</span>                                                                    <span id="sub" style="background-color: red; color: white; font-size: 13px; padding: 10px">SUBSCRIBE</span>
            <br>
            <pre class="desc" style="font-family: serif;">                                                   Hey guys - thought id upload this classic theme song from one of my favourite shows 
                                                   when i was a kid and im sure some of yall's favorite too!
                                                   So heres the theme song from season 1 - best season in my opinion, but leave a 
                                                   comment and let me know what you think… :)
                                                   
                                                   Also, I DO NOT own this content and all credits go to the wonderful creators of this 
                                                   timeless classic!!!
                                                   
                                                   Thought i'd include the wiki description if anyone wants to refresh their memory:
                                                   
                                                   ...

                                                   <span style="color:grey;">Category</span>        <span style="color:blue;"><strong>Film and Entertainment</strong></span></pre>
                                                   <hr style="width: 68%;">

            </div>

        <pre style="font-family:serif; font-size:20px; background-color:lightgrey; padding:20px;">                         <strong>Add a public comment</strong></pre>
        <form action="" method="POST">
            <pre style="font-family: serif; font-size:16px;">                                    Username: <br />                                    <input type="text" name="name"> <br  /></pre>
            
            <pre style="font-family: serif; font-size:16px;">                                    Comment: <br />                                    <textarea rows="5" cols="82" name="comment"></textarea> <br /></pre>
            <pre>                   <input type="submit" value="Post comment"></pre>
    </form>
    
    <pre style="font-family:serif; font-size:20px; background-color:lightgrey; padding:20px;">                         <strong>All comments (2,233)</strong> </pre>
    <div class="commentsection">
    <hr>
    
    <?php 
        include "comments.php";
    ?>
    </div>
        </div>
    </div>
    </div>
</main>
</html>



