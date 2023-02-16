<!DOCTYPE html>
<html>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border:;
    }

    body {
        font-size: 16px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    #logo-img {
        height: 100px;
        width: auto;
        position: relative;
        margin-left: 200px;
    }

    #search {
        width: 30%;
        position: absolute;
        margin-left: 400px;
        margin-top: -70px;
    }

    .user {
        position: absolute;
        margin-left: 1100px;
        margin-top: -70px;
        display: flex;
        gap: 10px;
    }

    .tk {
        display: flex;
        gap: 10px;
    }

    .gh {
        display: flex;
        gap: 10px;
    }

    #taikhoan {
        background-color: grey;
        border: 2px solid grey;
        border-radius: 50%;
        height: 50%;
    }

    #gio {
        background-color: grey;
        border: 2px solid grey;
        border-radius: 50%;
        height: 50%;
    }

    .img-pro {
        width: 200px;
        height: 250px;
    }

    /* Card */
    #card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        font-family: arial;
    }

    #card:hover {
        box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    }
    .title {
        text-align: center;
        color : red;
        background-color: orange;
        font-weight: bold;
    }

    /* Product */
    .name {
        font-weight: bold;
    }
    .price {
        color : red ;
    }
    .danhgia {
        color : LightGray;   
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

<body>
    <?php
    $product = array(
        'NỔI BẬT NHẤT' => array(
            'P01' => array(
                'id' => '01',
                'img' => 'https://cdn.tgdd.vn/Products/Images/42/213031/iphone-12-tim-1-600x600.jpg',
                'name' => 'Iphone 12',
                'price' => '200$',
                'countdg' => '900'
            ),
            'P02' => array(
                'id' => '02',
                'img' => 'https://cdn.tgdd.vn/Products/Images/42/153856/iphone-11-trang-200x200.jpg',
                'name' => 'Iphone 11',
                'price' => '2100$',
                'countdg' => '300'
            ),
            'P03' => array(
                'id' => '03',
                'img' => 'https://cdn.tgdd.vn/Products/Images/42/92962/iphone-6-32gb-gold-hh-600x600-600x600-600x600.jpg',
                'name' => 'Iphone 6',
                'price' => '10$',
                'countdg' => '1200'
            ),
            'P04' => array(
                'id' => '04',
                'img' => 'https://cdn.tgdd.vn/Products/Images/42/247508/iphone-14-pro-tim-thumb-600x600.jpg',
                'name' => 'Iphone 14',
                'price' => '4000$',
                'countdg' => '600'
            )
        ),
        'SẢN PHẨM MỚI' => array(
            'Phone1' => array(
                'id' => '01A',
                'img' => 'https://cdn.tgdd.vn/Products/Images/42/262650/samsung-galaxy-a23-cam-thumb-600x600.jpg',
                'name' => 'Nokia 210',
                'price' => '14000$',
                'countdg' => '6000'
            ),
            'Phone2' => array(
                'id' => '02A',
                'img' => 'https://www.xtmobile.vn/vnt_upload/product/06_2021/thumbs/(600x600)_crop_iphone-12-pro-max-256GB-cu-xtmobile.jpg',
                'name' => 'Nokia 6310',
                'price' => '20000$',
                'countdg' => '100'
            ),
            'Phone3' => array(
                'id' => '03A',
                'img' => 'https://www.xtmobile.vn/vnt_upload/product/06_2021/thumbs/(600x600)_crop_iphone-12-pro-max-256GB-cu-xtmobile.jpg',
                'name' => 'Nokia Made in China',
                'price' => '2$',
                'countdg' => '1600'
            ),
            'Phone4' => array(
                'id' => '04A',
                'img' => 'https://cdn.didongviet.vn/pub/media/catalog/product//s/a/samsung-galaxy-s22-128gb-didongviet_1.jpg',
                'name' => 'SamSung A22F',
                'price' => '400$',
                'countdg' => '6100'
            )
        )
    )
        ?>
    <section>
        <h1><img src="https://img.freepik.com/free-vector/gradient-mobile-store-logo-design_23-2149699853.jpg?w=2000"
                alt="" id="logo-img"></h1>
        <div class="input-group mb-3" id="search">
            <input type="text" class="form-control" placeholder="Tìm kiếm..." aria-label="Recipient's username"
                aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button"><i
                        class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
        <div class="user">
            <span class="tk">
                <i class="fa-solid fa-user" id="taikhoan"></i>
                <p>Tài khoản</p>
            </span>
            <span class="gh">
                <i class="fa-solid fa-cart-shopping" id="gio"></i>
                <p>Giỏ hàng</p>
            </span>
        </div>

    </section>
    <section>
        <div class="container">
            <?php
            foreach ($product as $k => $v) { ?>
                <h4 class="title mb-5 mt-5">
                    <?php echo $k; ?>
                </h1>
                <div class="row">
                    <?php foreach ($v as $k1 => $v1) { ?>
                        <div class="col-lg-3" id="card">
                            <img src="<?php echo $v1['img'] ?>" alt="" class="img-pro">
                            <br> <br>
                            <p class="name">
                                <?php echo $v1['name'] ?>
                            </p>
                            <p class="price">
                                <?php echo $v1['price'] ?>
                            </p>
                            <div>
                                <?php
                                for ($i = 0; $i <= 4; $i++) {
                                    print('<i class="fa-solid fa-star"></i>');
                                }
                                ?>
                            </div class="danhgia">
                            <p>
                                <?php echo $v1['countdg'] ?> đánh giá
                            </p>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </section>
</body>
</html>