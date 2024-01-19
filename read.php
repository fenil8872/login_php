<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Crud Operation</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="active"><a href="insert.php">Add</a></li>
            
        </ul>
        
    </div><!-- /.navbar-collapse -->
</nav>

<div class="table-responsive">
    <table class="table table-border">
        <thead>
            <tr>
                <th>Id</th>
                <th>State Id</th>
                <th>State Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
             $getData = "SELECT * FROM `tbl_state`";
             $result = mysqli_query($conn, $getData);
        while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
                
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['stid']; ?></td>
                <td><?php echo $row['stname']; ?></td>
                <td><a href="update.php?updateId=<?php echo $row['id']; ?>">Edit </a> | <a href="delete.php?deleteId=<?php echo $row['id']; ?>">Delete </a></td>
            </tr>
            <?php
        }
            ?>

        </tbody>
    </table>
</div>


</body>
</html>