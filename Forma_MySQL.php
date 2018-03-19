<?php
$conn=mysqli_connect("localhost", "root","klaojikas","9paskaita");

if (!$conn){
    die("connection failed:". mysqli_connect_error());

}
if ($_SERVER["REQUEST_METHOD"]=='POST'){
    if(empty($_POST['name']) || empty($_POST['email'])){
        $error= "Bad entry";
    }
    else{
        if (isset($_POST['submit']))
        {
            $sql="INSERT INTO Users(name, email)
VALUES ('".$_POST["name"]."','".$_POST["email"]."')";
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
    <H1> form</H1>
    <div class="row">
        <div class="col-4">
            <?php if(isset($error)) {
                echo '<div class="alert alert-danger">' . $error . '</div>';
            }
            elseif(isset($success)){
                echo'<div class="alert alert-success">'.$success.'</div>';
            }
            ?>

            <form method="POST" action="form.php">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input name="name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email">
                </div>

                <button name="submit" type="submit" class="btn btn-primary">submit</button>
            </form>
        </div>
</html>