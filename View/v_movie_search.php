<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!DOCTYPE html>
<?php $this->load->view($this->hack_aday."v_hack_a_day",true);?>
<script>
	$(document).ready(function(){
		$(document).on("mouseover","#img_test",function(){
			$('#test').slideToggle();
		});
		 $(document).on("mouseout","#img_test",function(){
        $('#test').slideToggle();
		});
		
	});
/*	function openNav() {
		document.getElementById("test").style.width = "200px";	
	}
	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}
*/
	
</script>
<html>
<head>
<style>
.square {
  width: 250px;
  height: 300px;
  background-color: #555;
}
.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 10%;
}
.font{
	font-size: 16px;
	
}


</style>
</head>
<body>



<div class="form-group col-md-12">
	
		<div class="col-md-4" style="margin-left: 200px;margin-top: 100px;">
			<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/halloween.jpg" style="width: 305px;height: 400px;" id="img_test">
		</div>
		<div class="col-md-4" style="margin-top: 100px;">
			<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/halloween.jpg" style="width: 305px;height: 400px;" id="img_test">
		</div>
		<div class="col-md-2" style="margin-top: 100px;">
			<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/halloween.jpg" style="width: 305px;height: 400px;" id="img_test">
		</div>
		<div class="col-md-2">
		</div>
</div>
<div class="form-group col-md-5">
	<div class="col-md-2">
		<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/user.png" style="width:50px;margin-left: 200px;">
	</div>
	<div class="col-md-5" id="movie_descript" style="margin-left: 150px;">
		<p class="font" >ชื่อ : Halloween</p>
		<p class="font">PIKU</p>
		<div id="test" class="font" style="display:none;">
			<p>ตอนที่ 1</p>
			<p>รายละเอียด : จุดเริ่มต้นของเรื่องนี้เป็นการพบกันระหว่างหญิงสาวและชายหนุ่มผู้ไล่ล่าความฝัน แล้วฝันจะเป็นจริงหรือไม่ไปติดตามกันเลย</p>
		</div>
	</div>
</div>
<div class="form-group col-md-3" style="left: 30px;"> 
	<div class="col-md-2">
		<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/user.png" style="width:50px">
	</div>
	<div class="col-md-7" id="movie_descript">
		<p class="font">ชื่อ : Halloween</p>
		<p class="font">PIKU</p>
		<div id="test" class="font" style="display:none;">
			<p>ตอนที่ 1</p>
			<p>รายละเอียด : จุดเริ่มต้นของเรื่องนี้เป็นการพบกันระหว่างหญิงสาวและชายหนุ่มผู้ไล่ล่าความฝัน แล้วฝันจะเป็นจริงหรือไม่ไปติดตามกันเลย</p>
		</div>
	</div>
</div>
<div class="form-group col-md-3" style="left: 180px;">
	<div class="col-md-2">
		<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/user.png" style="width:50px">
	</div>
	<div class="col-md-7" id="movie_descript" >
		<p class="font">ชื่อ : Halloween</p>
		<p class="font">PIKU</p>
		<div id="test" class="font" style="display:none;">
			<p>ตอนที่ 1</p>
			<p>รายละเอียด : จุดเริ่มต้นของเรื่องนี้เป็นการพบกันระหว่างหญิงสาวและชายหนุ่มผู้ไล่ล่าความฝัน แล้วฝันจะเป็นจริงหรือไม่ไปติดตามกันเลย</p>
		</div>
	</div>
</div>
</body>
</html>
