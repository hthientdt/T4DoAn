<?php
	include('../model/code.php');
	include("../model/sql.php");
	$p=new NguoiDung;
	$db=new database();
?>
<html lang="vi">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>AdameatEva</title>
	<link rel="stylesheet" href="../asset/QuanLyTaiKhoanCss.css">
	<link rel="stylesheet" href="../asset/HeaderFooter.css">
</head>

<body>
	<div class="Menu">
		Quản lý tài khoản.
	</div>
	
	<section class="work">
		<div class="left">
			<button  name="qluser" class="butMenuLeft"> Quản lý người dùng</button>
			<a href='QuanLyBaiHoc.php'><button  name="qllesson" class="butMenuLeft"> Quản lý bài học</button></a>
			<a href='QuanLyBaiTap.php'><button  name="qllesson" class="butMenuLeft"> Quản lý bài tập</button></a>
		</div>
		<div class="middle">
			<div class="list">
				<table class="bang">
						<tr>
							<th> ID </th>
							<th> Tên </th>
							<th> Email </th>
							<th> Tài khoản </th>
							<th> Mật khẩu </th>
							<th> </th>
						</tr>	
					<?php					
						$p->loadData('Select * from nguoidung');
					?>
				</table>
			</div >
			<form method="post">
				<button type="submit" name="butthemMoi" class="butThaoTac">+ Thêm người dùng mới</button>
			</form>
				
			
  		</div>
	</section>
	
</body>

</html>