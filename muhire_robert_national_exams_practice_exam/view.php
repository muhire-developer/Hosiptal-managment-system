<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn = mysqli_connect("localhost","root","","Dukundumurimo");
    $sql="SELECT * FROM `manager`";
    $res=mysqli_query($conn,$sql);
    
    ?>
    <table border="1" box-spacing="10px">
        <tr> 
            <td>MANAGER ID</td>
             <td>USERNAME</td>
              <td>PASSWORD</td>
               <td colspan="2">ACTIONS</td>
        </tr>
        <tr>
            <?php
            
            while ($row=mysqli_fetch_assoc($res)) {
                ?>
        <tr>
            <td><?php echo $row['managerid'];?></td>
            <td><?php echo $row['username'];?></td>
            <td><?php echo $row['password'];?></td>
            <td><a href="update.php?id=<?php echo $row['id'];?>">update</a></td>
            <td><a href="delete.php?id=<?php echo $row['id'];?>">delete</a></td>
        </tr>
        <?php
            }
            ?>
        </tr>
    </table>
</body>
</html>