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

<div class="container mt-5 text-center">
  <h2 class="mb-5">TechMania Registration</h2> 
  <div class="row">
    <div class="col-md-4 mx-auto"> 
    <form action="table.php" method="POST" class="form-group">
        <input type="text" name="pid" class="form-control" placeholder="Enter Pid" required>
        <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div> 
</body>
</html>
