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
        <script src="https://kit.fontawesome.com/3226a380a5.js"></script>
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
<container>

    <h1>Kirjaudu sisään</h1>

        <form method="post">
        
            <input placeholder="käyttäjätunnus" name="tunnus" type="text" size="35">
            <br>
            <input placeholder="salasana" name="salasana" type="password" size="35">   
            <br>
            <button name="submit" type="submit">Kirjaudu</button>   
        
        </form>
        <h1>Eikö löydy tunnuksia?</h1>
        <a href="account.php">Luo tunnukset</a>
     
    <?php
   
   if(isset($_POST['submit'])) { 

    kirjautuminen();
    
    } 
    function kirjautuminen(){

    $tunnus = $_POST['tunnus'];
    $salasana = $_POST['salasana'];
    $tunnari = $tunnus."".$salasana;

    $servername = "Opetus1";
    $username = "s1800844";
    $password = "ud3MGem3";
    $database = "s1800844";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT Tunnus, Salasana FROM tunnukset";
    $result = $conn->query($sql);

    $check = array("");

    if ($result = $conn->query($sql)) {
     
        while ($row = $result->fetch_assoc()) {

            $rivi = $row["Tunnus"];
            $rivi2 = $row["Salasana"];

            $rivit = $rivi."".$rivi2;

            array_push($check, $rivit);
        
        }

        if (in_array($tunnari, $check)) {

            setcookie("käyttäjä", $tunnus, time() + (86400 * 30), "/");
            header("Location: https://public.bc.fi/s1800844/nettisivu/"); 
            exit; 

        }else{

            echo "<script> alert('Tunnuksia ei ole löydy') </script>";

        }

        $result->free();
    }

    $conn->close();

}

    ?>
     
        </container>
    </body>
</html>