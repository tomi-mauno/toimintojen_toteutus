<?php
header("Content-Type: text/html; charset=UTF-8 ");
?>
<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://kit.fontawesome.com/3226a380a5.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro&display=swap" rel="stylesheet"> 
    </head>
    <body>

    <nav id="small-nav">
        
   <ul>

        <li id="expand" onclick="expand()"><i class="fas fa-arrows-alt-v"></i></li>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>

   </ul>

<div id="settings">
    
   <?php

        if(!isset($_COOKIE['käyttäjä'])) {
            
            echo"<div class='account'><a href='https://public.bc.fi/s1800844/nettisivu/login.php'> <i class='far fa-user-circle'></i><br>Sign in</div></a>";

        }elseif (isset($_COOKIE['käyttäjä'])) {

            echo"<div class='account'><a href='https://public.bc.fi/s1800844/nettisivu/account.php'> <i class='far fa-user-circle'></i> ". $_COOKIE['käyttäjä'] ."</div></a>";

        }

    ?>

</div>

    </nav>

    <div id="big-nav">
    <div id="shrink" onclick="shrink()"><i class="fas fa-minus-circle"></i></div>

<div class="link_container">

    <div class="links">
        <ul>
        <h1><i class="fas fa-code"></i><br>Otsikko</h1>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        </ul>
        </div>

        <div class="links">
        <ul>
        <h1><i class="fas fa-code"></i><br>Otsikko</h1>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        </ul>
        </div>

        <div class="links">
        <ul>
        <h1><i class="fas fa-code"></i><br>Otsikko</h1>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        </ul>
        </div>

        <div class="links">
        <ul>
        <h1><i class="fas fa-code"></i><br>Otsikko</h1>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        </ul>
        </div>

        <div class="links">
        <ul>
        <h1><i class="fas fa-code"></i><br>Otsikko</h1>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        </ul>
        </div>

    </div>

<div class="link_container">

    <div class="links">
        <ul>
        <h1><i class="fas fa-code"></i><br>Otsikko</h1>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        </ul>
        </div>

        <div class="links">
        <ul>
        <h1><i class="fas fa-code"></i><br>Otsikko</h1>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        </ul>
        </div>

        <div class="links">
        <ul>
        <h1><i class="fas fa-code"></i><br>Otsikko</h1>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        </ul>
        </div>

        <div class="links">
        <ul>
        <h1><i class="fas fa-code"></i><br>Otsikko</h1>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        </ul>
        </div>

        <div class="links">
        <ul>
        <h1><i class="fas fa-code"></i><br>Otsikko</h1>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        <li>Link</li>
        </ul>
        </div>

    </div>
</div>

<div id="lander">

<div id="overlay" style="background-image: url('images/earth.jpg'); background-size: cover; background-position: center;"></div>
<div class="indentation"></div>

    <h1>Lorem ipsum</h1>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>

    <container>

        <div class="button"><a href="#">Link</a></div>
        <div class="button"><a href="#">Link</a></div>
        <div class="button"><a href="#">Link</a></div>
        <div class="button"><a href="#">Link</a></div>

    </container>
    <form form method="post" id="search">

        <input type="text" placeholder="search something..." size="35">
        <button type="submit" name="search"><i class='fas fa-search'></i></button>

    </form>

<a href="#down"> <div onclick="scroll()" id="down"><i class="fas fa-sort-down"></i></div></a>
</div>

<?php

    if(isset($_POST['search'])) { 

        oops();
        
    } 

    function oops(){

        echo"<script>alert('Oops! Looks like the search bar is currently under construction, please have patience.')</script>";

    }

?>

<div id="down"></div>
    <div class="terminal">
   
    <h1>Lorem ipsum<span class="box">@</span></h1>
    </div>

<container>

        <div class="text_box">

        <div class="text">
        <h3>Lorem</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
        </div>

        <div class="text">
        <h3>Lorem</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
        </div>
        
        </div>
    
</container>

<div class="terminal">
    <h1>Lorem ipsum<span class="box">@</span></h1>
    </div>

<container>

        <div class="text_box">

        <div class="text">
        <h3>Lorem</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
        </div>

        <div class="text">
        <h3>Lorem</h3>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
        </div>
   
        </div>

</container>

    <footer>

        <div id="somet_container">
          

        <div id="somet">

        <div id="footer_logo">
                <img src="images/hello.png">
        </div>
            
            <i class="fab fa-twitter"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-github"></i>
            <i class="fab fa-youtube"></i>

        </div>

        <container>

            <div id="linkit">

            <i class="fas fa-code"></i>
            <h4>TITLE</h4><br>

                <a href="">LINK</a>
                <a href="">LINK</a>
                <a href="">LINK</a>
                <a href="">LINK</a>

            <i class="fas fa-code"></i>
            <h4>TITLE</h4><br>

                <a href="">LINK</a>
                <a href="">LINK</a>
                <a href="">LINK</a>
                <a href="">LINK</a>

            <i class="fas fa-code"></i>
            <h4>TITLE</h4><br>

                <a href="">LINK</a>
                <a href="">LINK</a>
                <a href="">LINK</a>
                <a href="">LINK</a>

            <i class="fas fa-code"></i>
            <h4>TITLE</h4><br>

                <a href="">LINK</a>
                <a href="">LINK</a>
                <a href="">LINK</a>
                <a href="">LINK</a>
            
                <i class="fas fa-code"></i>
            <h4>TITLE</h4><br>

                <a href="">LINK</a>
                <a href="">LINK</a>
                <a href="">LINK</a>
                <a href="">LINK</a>
            
                <i class="fas fa-code"></i>
            <h4>TITLE</h4><br>

                <a href="">LINK</a>
                <a href="">LINK</a>
                <a href="">LINK</a>
                <a href="">LINK</a>

            </div>
            </div>

        </container>

    </footer>

<script>

        function expand(){

        document.getElementById("small-nav").style.cssText = "display: none !important;"
        document.getElementById("big-nav").style.cssText = "display: block !important;"
        
        }

        function shrink(){
        
        document.getElementById("small-nav").style.cssText = "display: flex !important;"
        document.getElementById("big-nav").style.cssText = "display: none !important;"

        }

</script>     
</body>
</html>