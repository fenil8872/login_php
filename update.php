<?php
include('connection.php');
$id = $_GET['updateId']; // This gets the id parameter from the URL
echo $id;
$getData="SELECT * FROM `tbl_state`";
$result = mysqli_query($conn, $getData);
$row = mysqli_fetch_assoc($result);
$stid=$row['stid'];
$stname=$row['stname'];

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
                            <input type="text" class="form-control" id="" placeholder="Enter State Id" name="stid" value="<?php echo $stid ?>">
                        </div>

                        <div class="form-group">
                            <label for="">State Name</label>
                            <input type="text" class="form-control" id="" placeholder="Enter State Name" name="stname" value="<?php echo $stname ?>">
                        </div>

                        <button type="submit" name="update" class="btn btn-primary">Submit</button>
                    </form>
                    <?php
                    if(isset($_POST['update'])){
                        $id = $_GET["updateId"];
                        $stname=$_POST['stname'];
                        $stid=$_POST['stid'];
                        $update = "UPDATE `tbl_state` SET `stname`='$stname', `stid`='$stid' WHERE id='$id'";
                        $result=mysqli_query($conn,$update);
                        if($result){
                            echo "Successfull!";
                            header('location:index.php');
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