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
            <li class="active"><a href="read.php">Read</a></li>
            
        </ul>
        
    </div><!-- /.navbar-collapse -->
</nav>

    <div class="row">

        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

        </div>


        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Insert State</h3>
                </div>
                <div class="panel-body">

                    <form action="" method="POST" role="form">
                        <legend>Form title</legend>

                        <div class="form-group">
                            <label for="">State Id</label>
                            <input type="text" class="form-control" id="" placeholder="Enter State Id" name="stid">
                        </div>

                        <div class="form-group">
                            <label for="">State Name</label>
                            <input type="text" class="form-control" id="" placeholder="Enter State Name" name="stname">
                        </div>

                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <?php
                    if(isset($_POST['submit'])){
                        $stname=$_POST['stname'];
                        $stid=$_POST['stid'];
                        $insert="INSERT INTO `tbl_state`( `stname`,`stid`) VALUES ('$stname','$stid')";
                        $result=mysqli_query($conn,$insert);
                        if($result){
                            echo "Successfull!";
                        }
                            else{
                                echo "Fail!";
                            }
                        }
                    ?>

                </div>
            </div>

        </div>


    </div>


</body>

</html>