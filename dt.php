<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
        form {
                border: 2px solid black;
                margin : 5px ;
                padding : 15px;
                width: 450px;
                height: 450px;
                
        }
        form input {
                text-align: center;
        }
        p {
                background-color: red;
                text-align: center;
        }
</style>
<body>
        <?php
        $cd = $_POST["dai"];
        $cr = $_POST["rong"];
        $dt = $cd * $cr;
        ?>
        <form method="post">
                <p> <b>TÍNH DIỆN TÍCH</b></p>
                Chiều Dài : <input type="text" name="dai" class="form-control" value="<?php echo $_POST["dai"] ?>"> <br> <br>
                Chiều Rộng : <input type="text" name="rong" class="form-control" value="<?php echo $_POST["rong"] ?>"> <br> <br>
                Diện tích : <input type="text" name="dt" id="dt" class="form-control" value="<?php echo $dt; ?>"> <br> <br>
                <input type="submit" name="submit" value="Tính" class="btn btn-success">
        </form>
</body>
</html>
