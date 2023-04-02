<?php
	include('../controller/CodeTongKet.php');

?>
<html lang="vi">
<head>

	<meta charset="utf-8">
	<title>AdameatEva</title>
	<link rel="stylesheet" href="../asset/TongKet.css">
	<link rel="stylesheet" href="../asset/HeaderFooter.css">
	
</head>

<body>
	<center>
	<div class='BangTk'>
		
			
			<center>
				<form class='choose' method='post'>
					<input type='submit' name='end' class='butFinish' value='Kết thúc'>
					<input type='submit' name='restart' class='butFinish' value='Thử lại'>				
				</form>
			</center>
			<?php
				if(isset($_POST['restart']))
				{
					restart();
				}
				if(isset($_POST['end']))
				{
					endLession();
				}
			?>
	</div>
	</center>
</body>
</html>