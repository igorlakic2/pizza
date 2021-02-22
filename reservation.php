<?php 
    require "connection.php";

    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];

    if(isset($_POST['date'])){
        $date = $_POST['date'];
    }

    if(isset($date)){

        $sql = "SELECT * FROM reservations WHERE date = '$date'";
        $result = mysqli_query($db, $sql);
        $exists = (mysqli_num_rows($result))?TRUE:FALSE;

        if($exists){
?>
            <div style="text-align: center;">
<?php
                require "part/header.php";
                echo "<h2 style='margin-top: 40px;'>Postoji rezervacija za $date. Izaberite novi datum.</h2>";
?>
                <form action="home.php" method="post">
                    <button style="padding:7px 12px; margin: 50px 0 0 0; outline: none;" >Nazad</button>
                </form>
            </div>
<?php
        }else {

            $sql = "INSERT INTO reservations VALUES(NULL, '$fName', '$lName', '$tel', '$email', '$date')";
            $query = mysqli_query($db, $sql);
            require "part/header.php";
?>
            <div style="text-align: center; margin-top: 40px;">
<?php
                echo "<h1>Zdravo, $fName</h1>";        
                echo "<br>";
                echo "<h2>Uspešna rezervacija za datum: $date</h2>";            
?>
                <form action="home.php" method="post">
                    <button style="padding:7px 12px; margin: 50px 0 0 0; outline: none;" >Nazad</button>
                </form>
            </div>
<?php
        }
    }


?>