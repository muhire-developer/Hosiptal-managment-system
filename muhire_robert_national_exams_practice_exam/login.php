<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="username">username</label>
        <input type="text" name="username" placeholder="enter username"required >
         <label for="password">password</label>
        <input type="password" name="password" placeholder="enter password"required >
        <button type="submit" name="submit">submit</button>
    </form>
</body>
</html>
<?php
$conn = mysqli_connect("localhost","root","","Dukundumurimo");
$managerid=$_GET['managerid'];
if (isset($_POST['managerid'])) {

  $username=$_POST['username'];
   $password=$_POST['password'];
   $sql="SELECT * FROM `manager` WHERE `username`="$username" AND `password`='$password'";
   $res=mysqli_query($conn,$sql);
   $row=mysqli_fetch_assoc($res);
   if ($row) {
    $_SESSION=['managerid']=$_SESSION['managerid'];
     $_SESSION=['username']=$_SESSION['username'];
      $_SESSION=['password']=$_SESSION['password'];
      header("location:page.php");
   }


}else {
    echo"invalid username or passord";
}

?>