<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kiểm Tra Chòm Sao</title>
	<link rel="stylesheet" href="1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
	<?php 
		$day = "";
		$mon = "";
		$img = "";
		$tencung = "";
	    if(isset($_POST["ngaysinh"]) && isset($_POST["thangsinh"]))
	    {
	    	$day = $_POST["ngaysinh"];
	    	$mon = $_POST["thangsinh"];
	    	if(is_numeric($day) && is_numeric($mon))
		    {
		    	if($mon > 0 && $mon < 13 && $day > 0 && $day < 32)
		    	{
		    		if($mon == 1)
		    		{
		    			if($day <= 19)
		    			{
		    				$img = "maket";
		    				$tencung = "Ma Kết";
		    			}
		    			else
		    			{
		    				$img = "baobinh";
		    				$tencung = "Bảo Bình";
		    			}
		    		}
		    		else if ($mon == 2)
		    		{
		    			if($day <= 29)
		    			{
		    				if($day <= 18)
			    			{
			    				$img = "baobinh";
			    				$tencung = "Bảo Bình";
			    			}
			    			else
			    			{
			    				$img = "songngu";
			    				$tencung = "Song Ngư";
			    			}
		    			}
		    			else
		    			{
		    				$tencung = "Tháng " . $mon . " làm gì có " . $day . " ngày!!";
		    			}
		    			
		    		}
		    		else if ($mon == 3)
		    		{
		    			if($day <= 20)
		    			{
		    				$img = "songngu";
		    				$tencung = "Song Ngư";
		    			}
		    			else
		    			{
		    				$img = "bachduong";
		    				$tencung = "Bạch Dương";
		    			}
		    		}
		    		else if ($mon == 4)
		    		{
		    			if($day < 31)
		    			{
		    				if($day <= 19)
			    			{
			    				$img = "bachduong";
			    				$tencung = "Bạch Dương";
			    			}
			    			else
			    			{
			    				$img = "kimnguu";
			    				$tencung = "Kim Ngưu";
			    			}
		    			}
		    			else
		    			{
		    				$tencung = "Tháng " . $mon . " làm gì có " . $day . " ngày!!";
		    			}
		    		}
		    		else if ($mon == 5)
		    		{
		    			if($day <= 20)
		    			{
		    				$img = "kimnguu";
		    				$tencung = "Kim Ngưu";
		    			}
		    			else
		    			{
		    				$img = "songtu";
		    				$tencung = "Song Tử";
		    			}
		    		}
		    		else if ($mon == 6)
		    		{
		    			if($day < 31)
		    			{
		    				if($day <= 21)
			    			{
			    				$img = "songtu";
			    				$tencung = "Song Tử";
			    			}
			    			else
			    			{
			    				$img = "cugiai";
			    				$tencung = "Cự Giải";
			    			}
		    			}
		    			else
		    			{
		    				$tencung = "Tháng " . $mon . " làm gì có " . $day . " ngày!!";
		    			}
		    		}
		    		else if ($mon == 7)
		    		{
		    			if($day <= 22)
		    			{
		    				$img = "cugiai";
		    				$tencung = "Cự Giải";
		    			}
		    			else
		    			{
		    				$img = "sutu";
		    				$tencung = "Sư Tử";
		    			}
		    		}
		    		else if ($mon == 8)
		    		{
		    			if($day <= 22)
		    			{
		    				$img = "sutu";
		    				$tencung = "Sư Tử";
		    			}
		    			else
		    			{
		    				$img = "xunu";
		    				$tencung = "Xử Nữ";
		    			}
		    		}
		    		else if ($mon == 9)
		    		{
		    			if($day < 31)
		    			{
		    				if($day <= 22)
			    			{
			    				$img = "xunu";
			    				$tencung = "Xử Nữ";
			    			}
			    			else
			    			{
			    				$img = "thienbinh";
			    				$tencung = "Thiên Bình";
			    			}
		    			}
		    			else
		    			{
		    				$tencung = "Tháng " . $mon . " làm gì có " . $day . " ngày!!";
		    			}
		    		}
		    		else if ($mon == 10)
		    		{
		    			if($day <= 22)
		    			{
		    				$img = "thienbinh";
		    				$tencung = "Thiên Bình";
		    			}
		    			else
		    			{
		    				$img = "thienyet";
		    				$tencung = "Thiên Yết";
		    			}
		    		}
		    		else if ($mon == 11)
		    		{
		    			if($day < 31)
		    			{
		    				if($day <= 22)
			    			{
			    				$img = "thienyet";
			    				$tencung = "Thiên Yết";
			    			}
			    			else
			    			{
			    				$img = "nhanma";
			    				$tencung = "Nhân Mã";
			    			}
		    			}
		    			else
		    			{
		    				$tencung = "Tháng " . $mon . " làm gì có " . $day . " ngày!!";
		    			}
		    		}
		    		else if ($mon == 12)
		    		{
		    			if($day <= 21)
		    			{
		    				$img = "nhanma";
		    				$tencung = "Nhân Mã";
		    			}
		    			else
		    			{
		    				$img = "maket";
		    				$tencung = "Ma Kết";
		    			}
		    		}
		    	}
		    	else
		    	{
		    		$tencung = "Ngày tháng như vậy sao tính được";
		    	}
		    }
		    else
		    {
		    	$tencung = "Bạn Nhập Sai Dữ Liệu Rồi";
		    }
	    }
    ?>
	<div class="container">
		<form action="#" method="POST" role="form">
			<legend>Bạn Thuộc Chòm Sao Nào?</legend>
		
			<div class="form-group">
				<label for="">Nhập Vào Ngày Sinh: </label>
				<input type="number" class="form-control" name="ngaysinh" id="" placeholder=""
				value="<?php echo $day; ?>">
			</div>
			<div class="form-group">
				<label for="">Nhập Vào Tháng Sinh: </label>
				<input type="number" class="form-control" name="thangsinh" id="" placeholder="" value="<?php echo $mon; ?>">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<div class="ketqua">
				<img src="image/<?php echo $img; ?>.jpg" alt="<?php echo $img; ?>">
				<p class="tencung"><?php echo $tencung; ?></p>
			</div>
		</form>
	</div>
	<script type="text/javascript" src="1.js"></script>
</body>
</html>