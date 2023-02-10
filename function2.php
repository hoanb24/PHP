<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .form-control {
        width: 200px;
    }
</style>
<body>
    <?php
    $klm = $_POST["kilo"];  
    function km($klm)
    {
        $mili = 0.62;
        return $klm * $mili;
    }
    ?>
    <center>
        <form method="post">
            <b>Nhập kilomet : </b><input class="form-control" name="kilo" value="<?php echo $_POST["kilo"]; ?>"
                type="text"> <br> <br>
            <b> Kết quả dặm : </b><input class="form-control" name="kq" value="<?php echo km($klm); ?>" type="text">
            <br> <br>
            <input type="submit" value="OK" class="btn btn-success">
        </form>
    </center>
</body>

</html>