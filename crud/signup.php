<?php
include("query.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-4.6.2-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container p-5 mt-5">
        <form action="" method="post">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" value="<?php echo $userName?>" name="uName" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <small id="helpId" class="text-danger"><?php echo $userNameErr?></small>
            </div>

            <div class="form-group">
              <label for="">Email</label>
              <input type="text" name="uEmail" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <!-- <small id="helpId" class="text-muted"></small> -->
            </div>

            <div class="form-group">
              <label for="">Password</label>
              <input type="text" name="uPassword" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <!-- <small id="helpId" class="text-muted"></small> -->
            </div>

            <div class="form-group">
              <label for="">Confirm Password</label>
              <input type="text" name="uConfirmPassword" id="" class="form-control" placeholder="" aria-describedby="helpId">
              <!-- <small id="helpId" class="text-muted"></small> -->
            </div>

            <button name="registerUser" class="btn btn-info">Register</button>
        </form>
    </div>
    
</body>
</html>