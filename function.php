
<!DOCTYPE html>
<html>
<head>
    <title>Trang tính tiền</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>


<?php
function tinhngay($daycheckIn,$daycheckOut){
    $diff = strtotime($daycheckOut)-strtotime($daycheckIn);
    return abs(round($diff/86400));
}
function tinhtatol(){
    $money =(int)$_POST["money"];
    $priceRoom =(int)($_POST["typeRoom"]);
    $datediff =(int)tinhngay($_POST["checkIn"],$_POST["checkOut"]);
    $MoneyServices=(int)($_POST["gl"] + $_POST["th"] +$_POST["as"]);
    $tatol=(int)($MoneyServices +$priceRoom+$money);
    return $tatol*$datediff;
}
if(isset($_POST["submit"])){
    $daycheckOut  =$_POST["checkOut"];
    $daycheckIn =($_POST["checkIn"]);
    $datediff =tinhngay($daycheckIn,$daycheckOut);
    $money =(int)$_POST["money"];
    $tatol = tinhtatol();
    $MoneyServices=$_POST["gl"] + $_POST["th"] +$_POST["as"];
}
?> 
<center>
    <form method="POST" name="frm" class="form-control">
        <h1 class="title">TÍNH TIỀN</h1>
        <table>
            <tr id="ss">
                <th>Loại phòng:</th>
                <th><select name="typeRoom" id="a">
                <option type="number" value="10">A</option>
                <option type="number" value="20">B</option>
                </select></th>
            </tr>
            <tr>
                <th>Check in:</th>
                <th><input type="date" name="checkIn" id="checkIn">
            <br></th>
            </tr>
            <tr>
                <th>Check out:</th>
                <th> <input type="date" name="checkOut" id="checkOut"></th>
            </tr>
            <tr>
                <th> Tiền ăn:</th>
                <th><input type="number" name="money" id="money" placeholder="enter your money"></th>
            </tr>
            <tr>
                <th></th> <br>
                <th id="dv">
                <label for="dv">Services</label>
                </th>
            </tr>
            <tr>
                <th></th>
                <th><input type="checkbox" id="gl" value="30" name="gl">
                <label for="gl">Giặt là</label>
                </th>
            </tr>
            <br>
            <tr>
                <th></th>
                <th><input type="checkbox" id="as" value="50" name="as">
                <label for="as">Ăn sáng</label>
                </th>
            </tr>   
            <tr>
                <th></th>
                <th><input type="checkbox" id="th" value="10" name="th">
                <label for="th">Tắm hơi</label></th>
            </tr>
           
        </table>
         <button type="submit" name="submit" class="submit">OK</button>
         <button type="submit" name="cancel" class="submit">cancel</button>
    </form>
</center>
    <h1>BILL</h1>
    <div class="container">
        <div class="titlebill">
            <div>TypeRoom: </div>
            <div>rental Hours: </div>
            <div>money for meals: </div> 
            <div>money for services:</div>
            <div>tatol:</div>
        </div>
        <div class="result">
            <div> <?php echo $_POST["typeRoom"]; ?> </div>
            <div><?php echo $datediff*24 ."h";?></div> 
            <div> <?php echo $money; ?> </div>
            <div> <?php echo $MoneyServices; ?> </div>
            <div><?php echo $tatol;?> </div>
        </div>

    </div>


</body>
</html>