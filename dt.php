<!DOCTYPE html>
<html lang="en">
<body>
<?php
$cd=$_POST["dai"];
$cr=$_POST["rong"];
$dt=$cd*$cr;
?>
<form method="post">
        Chiều Dài : <input type="text" name="dai" value="<?php echo $_POST["dai"]?>"> <br>
        Chiều Rộng : <input type="text" name="rong" value="<?php echo $_POST["rong"]?>"> <br>
        Diện tích : <input type="text" name="dt" id="dt" value="<?php echo $dt;?>">
        <input type="submit" name="submit" value="Tính">
</form>
</body>
</html>