<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">

    <title>Index 4</title>
    <link rel="icon" href="media/icon/Mazutis.jpg" />
    <link rel="STYLESHEET" type="text/css" href="formatai.css">
</head>
<body>
<h1>10 Paskaita</h1>
<script src="https://use.fontawesome.com/da7d68fc96.js"></script>
</body>

</html>
<?php
include 'funkcijos/Funkcijos.php';
include 'funkcijos/TekstoFunkcijos.php';

//rombas(4);
//KurtiRomba(4);
session_start();
$conn=mysqli_connect("localhost","root","klaojikas","9paskaita");
if(!$conn)
{
    die("connection failed: " . mysqli_connect_error());
}
if($_SERVER['REQUEST_METHOD']=="POST"){
    if (empty($_POST['vardas']) || empty($_POST['pavarde'])|| strlen($_POST['vardas'])<2) {
        $error = "Reikia užpildyti visus laukus";
    }
    else{
        $success="Duomenys įvesti sėkmingai!";
        if(isset($_POST['submit']))
        {
            $sql="INSERT INTO asmeninis (vardas, pavarde, gimimodata, telnr, pastas)
VALUES ('".$_POST["vardas"]."','".$_POST["pavarde"]."','".$_POST["gimimodata"]."','".$_POST["telnr"]."','".$_POST["pastas"]."')";
            $result=mysqli_query($conn,$sql);
        }
    }
}
?>
<html>
<head>
    <title>Form</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
          crossorigin="anonymous">
</head>
<body>
<div class="container">
    <H1>Asmeniniai duomenys</H1>
    <div class="row">
        <div class="col-4">
            <?php if(isset($error)) {
                echo '<div class="alert alert-danger">' . $error . '</div>';
            }
            elseif(isset($success)){
                echo'<div class="alert alert-success">'.$success.'</div>';
            }
            ?>

            <form method="POST" action="index4.php">
                <div class="form-group">
                    <label for="vardas">Vardas *</label>
                    <input name="vardas" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pavarde">Pavardė *</label>
                    <input name="pavarde" type="text" class="form-control" id="pavarde">
                </div>
                <div class="form-group">
                    <label for="gimimodata">Gimimo data</label>
                    <input name="gimimodata" type="date" class="form-control" id="gimimodata">
                </div>
                <div class="form-group">
                    <label for="telnr">Telefono numeris</label>
                    <input name="telnr" type="text" class="form-control" id="gimimodata">
                </div>
                <div class="form-group">
                    <label for="pastas">Elektroninio pašto adresas</label>
                    <input name="pastas" type="email" class="form-control" id="email">
                </div>

                <button name="submit" type="submit" class="btn btn-primary">ENTER</button>
            </form>
        </div>
</html>

