<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn = mysqli_connect("localhost","root","","Dukundumurimo");
    $sql=" SELECT * FROM `manager`";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($res);

    ?>
    <form action="" method="post">
        <label for="username">username</label>
        <input type="text" name="username" placeholder="enter username"required value="<?php echo $row['username'];?>">
         <label for="password">password</label>
        <input type="password" name="password" placeholder="enter password"required value="<?php echo $row['password'];?>">
        <button type="submit" name="submit">submit</button>
    </form>
    <?php
    if (isset($_POST(update))) {
        $managerid=$_POST['managerid'];
         $username=$_POST['username'];
          $password=$_POST['password'];
          $sql="UPDATE `manager` SET username='$username',";

    }
    ?>
</body>
</html>