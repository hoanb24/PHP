<style>
    .frm {
        height: fit-content;
        width: 500px;
        background: rgb(130, 211, 238);
        border-radius: 10%;
    }

    .show {
        text-align: left;
        width: 500px;
        height: fit-content;
        background: rgb(198, 192, 255);
        border-radius: 10%;
    }

    p {
        text-align: center;
    }

    a {
        text-decoration: none;
        color: rgb(19, 77, 96);
    }

    p button {
        text-align: center;
        margin-bottom: 30px;
    }

    h4 {
        padding-top: 30px;
        text-align: center;
        color: rgb(25, 121, 89);
    }
</style>
<?php
if (isset($_POST["submit"])) {
    if (!empty($_POST["name"])) {
        $mang = $_POST["name"] . "-" . $_POST["email"] . "-" . $_POST["username"] . "-" . $_POST["password"];
        setcookie("taikhoan", $mang, time() + 1000);
    }
    echo "<script> alert('You have submit!!')</script>";
}
?>

<html>
<link rel="stylesheet" href="style.css">

<body>
    <center>
        <form method="post" class="frm">
            <h1 class="title">LOGIN INFORMATION</h1>
            <label for="name">Name: </label>
            <input type="text" name="name" id="name">
            <br> <br>
            <label for="email">Email: </label>
            <input type="text" name="email" id="email">
            <br> <br>
            <lable for="loginname">User name:</label>
                <input type="text" name="username" id="loginname">
                <br> <br>
                <label for="password">Password: </label>
                <input type="password" name="password" id="password">
                <br> <br>
                <input type="submit" name="submit" id="submit" value="Login">
        </form>
        <div class="show">
            <h4>Thông tin khách hàng</h4>
            <p> <?php echo $_COOKIE["taikhoan"]; ?></p>
            <br>
            <p><button><a href="read.php">Click</a></button></p>
        </div>
    </center>
</body>

</html>