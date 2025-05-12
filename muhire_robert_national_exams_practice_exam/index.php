<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <div class="nav">
            <li class="active"><a href="index.php" >home</a></li>
            <li><a href="index.php">view</a></li>
            <li><a href="index.php">logout</a></li>
        </div>
        <div class="form">
         <h2>register here!! as manager</h2>    
        <label for="username">username</label>
        <input type="text" name="username" placeholder="enter username"required ><br><br>
         <label for="password">password</label>
        <input type="password" name="password" placeholder="enter password"required ><br><br>
        <button type="submit" name="submit">submit</button><br><br></div>
    </form>
</body>
</html>
<?php
$conn = mysqli_connect("localhost","root","","Dukundumurimo");
if (isset($_POST['submit'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="INSERT INTO `manager`(`username`, `password`) VALUES ('$username','$password');";
    $result=mysqli_query($conn,$sql);
    if (!$result) {
        header("location:index.php");
    }else{
        echo" error during insertting";
    }
}
?>