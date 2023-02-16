<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
</head>
<body>
    <?php 
        $schools = array(
            'Student' => array (
                'SV01' => array (
                    'name' => 'Le Van Nam',
                    'birth' => '10/1/1995',
                    'gender' => 'Nam'
                ),
                'SV02' => array(
                    'name' => 'Hoang Thi Lan',
                    'birth' => '04/03/1999',
                    'gender' => 'Nữ'
                ),
                'SV03' => array(
                    'name' => 'Trinh Van Quoc',
                    'birth' => '23/05/2003',
                    'gender' => 'Nữ'
                ),
                'SV04' => array(
                    'name' => 'Lam Thi Gia Han',
                    'birth' => '02/08/2003',
                    'gender' => 'Nữ'
                )

            ),
            'Teacher' => array (
                'SV01' => array (
                    'name' => 'Le Hoai Thuong',
                    'birth' => '10/11/1998',
                    'gender' => 'Nu'
                ),
                'SV02' => array(
                    'name' => 'Hoang Ngoc Hung',
                    'birth' => '20/03/1997',
                    'gender' => 'Nam'
                ),
                'SV03' => array(
                    'name' => 'Tran Thi Dieu Linh',
                    'birth' => '05/04/1989',
                    'gender' => 'Nu'
                ),
                'SV04' => array(
                    'name' => 'Nguyen Van Lam',
                    'birth' => '02/12/1995',
                    'gender' => 'Nam'
                ),

            )   
                );
    ?>
     <div id= "content">
    <?php
    foreach($schools as $k => $v){
    ?>
    <h1 class ="list_title"><?php echo $k; ?></h1>
    <ul class ="list_chools">
    <?php foreach($v as $k1 => $v1){
      ?>
      <li>
      <p><span>MaSV:</span><?php echo $k1;?></p>
      <p><span>Tên:</span><?php echo $v1['name']?></p>
      <p><span>Ngày sinh:</span><?php echo $v1['birth']?></p>
      <p><span>Giới tính:</span><?php echo $v1['gender']?></p>
      </li>
      <?php
      }
      ?>
    </ul>
    <?php
  }
  ?>
  </div>
</body>