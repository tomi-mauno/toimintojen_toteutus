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
        <link rel="stylesheet" href="css/account.css">
    </head>
    <body>

    <container>

    <?php

    if(!isset($_COOKIE['käyttäjä'])){

    echo"<h1>Tunnusten luonti</h1>
        <form method='post'>
            
            <input placeholder='käyttäjätunnus' name='tunnus' type='text' size='35'>
            <br>
            <input placeholder='salasana' name='salasana' type='password' size='35'>      
            <br>
            <button name='submit' type='submit'>Luo tunnukset</button>
        
        </form>";


    }elseif (isset($_COOKIE['käyttäjä'])){

        echo "<form method='post'>
        
        <button name='sign_out' type='submit'>Kirjaudu ulos</button>
        
        </form>";

     }

    ?>

    <?php 
        
        if(isset($_POST['submit'])) { 
                uusi();
                header("Location: https://public.bc.fi/s1800844/nettisivu/login.php"); 
                exit; 
        }
    ?>

    <?php 
        
        if(isset($_POST['sign_out'])) { 
                sign_out();
                header("Location: https://public.bc.fi/s1800844/nettisivu/login.php"); 
                exit; 
        }
    ?>

<?php

        function sign_out(){

            setcookie("käyttäjä", "", time() - 3600);

        }
        
?>

<?php
    function uusi(){

        $servername = "Opetus1";
        $username = "s1800844";
        $password = "ud3MGem3";
        $database = "s1800844";
        
        $tunnus = $_POST['tunnus'];
        $salasana = $_POST['salasana'];

        $kaikki = array("");
        
        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT ID FROM tunnukset";
        $result = $conn->query($sql);

        if ($result = $conn->query($sql)) {
  
            while ($row = $result->fetch_assoc()) {

                $rivi = $row["ID"];
                array_push($kaikki, $rivi);
            
            }
    
            $result->free();
        }

        $lasku = count($kaikki);
        $id = $lasku++;

        $sql = "INSERT INTO tunnukset (ID, Tunnus, Salasana) VALUES ('$id', '$tunnus', '$salasana')";
        $result = $conn->query($sql);

        if ($conn->query($sql) === TRUE) {

            echo "<script>alert('Tunnukset luotu')</script>";

        } else {

            echo "Error: " . $sql . "<br>" . $conn->error;
            
        }
        print($id);
        $conn->close();
    }
?>
</container>
    </body>
</html>