<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php
if(!isset($_GET['id'])){
?>
<div class="container mt-5 text-center">
  <h2 class="mb-5">TechMania Registration</h2> 
<?php
    if(isset($_POST['submit'])){
        $pid = $_POST['pid'];
?>       
  <table class="table">
    <thead>
      <tr>
        <th>PID</th>
        <th>Name</th>
        <th>Email</th>
        <th>College Name</th>
        <th>Events</th>
      </tr>
    </thead>
    <tbody>
        <?php
            $con = mysqli_connect("localhost","root","","final") or die ("connection failed");
            $sql = "SELECT * FROM `kcmt1` WHERE `pid`='{$pid}'";
            $rslt= mysqli_query($con,$sql) or die('query failed');
            if(mysqli_num_rows($rslt)>0){
                while($row = mysqli_fetch_assoc($rslt)){
        ?>
      <tr>
        <td><?php echo $row['pid']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['cn']?></td>
        <td><?php echo $row['en']?></td>
      </tr>
      <?php
                }
            }
      ?>
     
    </tbody>
  </table>
  <?php
    }
  ?>
</div>
<?php
}
?>

<?php
    if(isset($_GET['id'])){
        $id = $GET['id'];
?>

<div class="container mt-5 text-center">
  <h2 class="mb-5">TechMania Registration</h2>        
  <table class="table">
    <thead>
      <tr>
        <th>PID</th>
        <th>Name</th>
        <th>Email</th>
        <th>College Name</th>
        <th>Events</th>
      </tr>
    </thead>
    <tbody>
        <?php
            $con = mysqli_connect("localhost","root","","final") or die ("connection failed");
            $sql = "SELECT * FROM `kcmt1` WHERE `en`='{$en}'";
            $rslt= mysqli_query($con,$sql) or die('query failed');
            if(mysqli_num_rows($rslt)>0){
                while($row = mysqli_fetch_assoc($rslt)){
        ?>
      <tr>
        <td><?php echo $row['pid']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['cn']?></td>
        <td><?php echo $row['en']?></td>
      </tr>
      <?php
                }
            }
      ?>
     
    </tbody>
  </table>
</div>

<?php
    }
?>
</body>
</html>
