<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>

$(document).ready(function(){
	$(document).on("click",".piku-header-listbar",function(){
		console.log($(".piku-sidebar").css("width"));
		if($(".piku-sidebar").css("width")=="0px"){
		$(".piku-sidebar").css("width", '200px');
		$(".screen").css('margin-left' ,'200px');
		$(".screen").css('width','calc(100vw - 220px)');
		}
		else{
		$(".piku-sidebar").css({width: '0px'});
		$(".screen").css('margin-left' ,'100px');
		$(".screen").css('width','calc(100vw - 100px)');
		}
	})
	$(document).on("click",".piku-header-userbar-button",function(){
		$(".piku-button-content").css("display","none");
		if($("#alertbutton").css("display")=="none"){
			$("#alertbutton").css("display","block");
		}
		else{
			$("#alertbutton").css("display","none");
		}
	});

	$(document).on("click","#icon_image",function(){
		$(".piku-button-content").css("display","none");
		if($("#loginbutton").css("display")=="none"){
			$("#loginbutton").css("display","block");
		}
		else{
			$("#loginbutton").css("display","none");
		}
	});
});

	</script>
	<style>
		.screen{
			margin-top:74px;
			margin-left:220px;
			width:calc(100vw - 220px);
			height:100vw;
		}
    	/* ----------------------------- ScrollBar ----------------------- */
       *::-webkit-scrollbar-track
          {

			   -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
               border-radius: 10px;
			   background: transparent;
			   background-color: transparent;
          }

          *::-webkit-scrollbar
          {

              width: 12px;
		   background: transparent;
		   background-color: transparent;
          }

          *::-webkit-scrollbar-thumb
          {
              border-radius: 10px;
              -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
              background-color: #555;
          }
		  *{
			  color:white;
		  }
    	/* ----------------------------- ScrollBar ----------------------- */

    	/* ----------------------------- Header -------------------------- */

        .piku-header {
        	position: fixed;
  			top: 0;
			display:flex;
            height:64px;
            width:100%;
            background-color: #333333;
			z-index:10;
		}
		.piku-header > .piku-header-iconbar {
         	height: calc(100% - 5px);
            width: 200px;
            padding: 2.5px;
		    display: flex;
            align-items: center;
		}
        .piku-header-icon {
        	margin-left:10px;
            margin-right:20px;
			height: 40px;
			cursor:pointer;
		}
        .piku-header-listbar{
        	margin-left:10px;
            margin-right:20px;
        	height: 60px;
			width: 60px;
			cursor:pointer;
        }
		.piku-header-listbar:hover{
			background-color:#232323;
			border-radius:50%
		}
		.piku-header > .piku-header-searchbar {
			height: 100%;
            width: calc(100% - 300px);
            display: flex;
            align-items: center;
			justify-content:center;
		}
        .piku-header-searchbar > .piku-header-searchbar-search {
        	width: 50%;
			color:black;
        }
        .piku-header-searchbar-search > input{
        	height:25px;
        	width:100%;
        }
        .piku-header-searchbar > .piku-header-searchbar-submit {
        	width: 50px;
            height:25px;
            border-style: solid;
            border-width: 1px;
			background-color: white;
			cursor:pointer;
        }
		.piku-header-searchbar-submit >img{
        	width: 24px;
            height:24px;
			display: block;
			margin: 0 auto;
        }
		.piku-header > .piku-header-userbar {
			height: calc(100% - 5px);
            width: 150px;
            padding: 2.5px;
            display: flex;
            justify-content:flex-end;
            align-items: center;
		}
        .piku-header-userbar > img{
            height:48px;
            padding-left:10px;
            padding-right:10px;
			cursor:pointer;
        }
        .piku-header-userbar > .piku-header-userbar-button{
			width:40px;
            height:40px;
            padding-left:10px;
            padding-right:10px;
            position:relative;
			align-items:center;
			cursor:pointer;
			display: inline-block;
        }

        .piku-header-userbar-button > img{
			width:24px;
            height:24px;
			top:10px;
			position:relative;
			cursor:pointer;
        }
        .piku-header-userbar-button > .piku-userbar-button-count{
			position:absolute;
            bottom:0;
            right:0;
            height: 13px;
            min-width: 13px;
            text-align:center;
            border-radius:50%;
			background-color:red;
			font-size:10px;
        }

		.piku-button-content {
			display: none;
			position: absolute;
			background-color: #f9f9f9;
			width: 200px;
			box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			padding: 12px 16px;
			z-index: 1;
			top:64px;
		}
        .piku-sidebar-buttons {
			padding-top:20px;
            padding-bottom:20px;
            padding-left:15px;
            padding-right:5px;
            display:flex;
            height: 32px;
            width:calc(100% - 20px);
            align-items: center;
			cursor:pointer;
		}

    	/* ----------------------------- Header -------------------------- */
		.piku-sidebar {
        	position: fixed;
  			top: 64px;
    		overflow-y: scroll;
            height: calc(100vh - 64px);
            width: 200px;
            padding-top:10px;
            background-color: #262626;
			z-index:10;
		}
		.piku-sidebar > .piku-sidebar-group {
			display:flex;
  			flex-direction: column;
		}
		.piku-sidebar-group > .piku-sidebar-header {
			font-weight:bold;
            padding-top:5px;
            padding-bottom:5px;
            padding-left:5px;
            padding-right:5px;
            white-space: nowrap;
    		text-overflow: ellipsis;
            overflow: hidden;
           	width:100%;
            height: 32px;
            font-size:20px;
            width:calc(100% - 10px);
		}
		.piku-sidebar-group > .piku-sidebar-button {
			padding-top:20px;
            padding-bottom:20px;
            padding-left:15px;
            padding-right:5px;
            display:flex;
            height: 32px;
            width:calc(100% - 20px);
            align-items: center;
			cursor:pointer;
		}
		.piku-sidebar-button-icon {
        	width:32px;
            padding-right:5px;
		}
		.piku-sidebar-button-icon > img{
        	width:32px;
            height:32px;
		}
		.piku-sidebar-button-name {
            white-space: nowrap;
            width: 50px;
    		text-overflow: ellipsis;
            overflow: hidden;
        	width:calc(100% - 25px);
            padding-left:5px;
		}
		.piku-sidebar-group > .piku-sidebar-follow {
			padding-top:20px;
            padding-bottom:20px;
            padding-left:15px;
            padding-right:5px;
			display:flex;
            height: 32px;
            width:100%;
            width:calc(100% - 20px);
            align-items: center;
			cursor:pointer;
		}
		.piku-sidebar-follow-icon {
			width:32px;
            padding-right:5px;
		}
		.piku-sidebar-follow-icon > img{
        	width:32px;
            height:32px;
		}
		.piku-sidebar-follow-name {
            white-space: nowrap;
            width: 50px;
    		text-overflow: ellipsis;
            overflow: hidden;
        	width:calc(100% - 20px);
            padding-left:5px;
		}
		.piku-sidebar-follow-count {
            padding-left:5px;
			width :35px;
			background-color:red;
			border-radius:50%;
		}
        .piku-sidebar-button:hover{
        	background-color:#4d4d4d;
        }
        .piku-sidebar-button:active{
        	background-color:#595959;
        }
        .piku-sidebar-follow:hover{
        	background-color:#4d4d4d;
        }
        .piku-sidebar-follow:active{
        	background-color:#595959;
        }

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
}
	</style>
</head>
<body style="background-color: #1a1a1a;">
	<div class="piku-header">
    	<div class="piku-header-iconbar">
        	<img src="https://d9hhrg4mnvzow.cloudfront.net/promo.bizjournals.com/listreprints/3ec560a8-white-menu-icon.png" class="piku-header-listbar">
        	<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/logo2.png" class="piku-header-icon">
        </div>
    	<div class="piku-header-searchbar">
        	<div class="piku-header-searchbar-search">
            	<input type="text" width="1000px">
            </div>
            <div class="piku-header-searchbar-submit">
            	<img src="https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-512.png">
            </div>
        </div>
    	<div class="piku-header-userbar">
        	<div class="piku-header-userbar-button">
                <img src="https://flaticons.net/gd/makefg.php?i=icons/Miscellaneous/Bell.png&r=255&g=255&b=255">
                <div class="piku-userbar-button-count">
                	45
                </div>
            </div>
			<div class="piku-button-content" id="alertbutton">
				<div class="piku-sidebar-buttons">
					<div class="piku-sidebar-button-icon">
						<img src="https://png.pngtree.com/svg/20170602/avatar_107646.png">
					</div>
					<div class="piku-sidebar-button-name" style="color:black">
						KoJiNa ได้ทำการเพื่มตอนใหม่ Kingsman
					</div>
				</div>
				<div class="piku-sidebar-buttons">
					<div class="piku-sidebar-button-icon">
						<img src="https://png.pngtree.com/svg/20170602/avatar_107646.png">
					</div>
					<div class="piku-sidebar-button-name" style="color:black">
						KoJiNa ได้ทำการเพื่มตอนใหม่ HelloMan
					</div>
				</div>
				<div class="piku-sidebar-buttons">
					<div class="piku-sidebar-button-icon">
						<img src="https://png.pngtree.com/svg/20170602/avatar_107646.png">
					</div>
					<div class="piku-sidebar-button-name" style="color:black">
						KoJiNa ได้ทำการเพื่มตอนใหม่ ProJect
					</div>
				</div>
				<div class="piku-sidebar-buttons">
					<div class="piku-sidebar-button-icon">
						<img src="https://png.pngtree.com/svg/20170602/avatar_107646.png">
					</div>
					<div class="piku-sidebar-button-name" style="color:black">
						ดูเพื่มเติม
					</div>
				</div>
			</div>
            <img src="https://png.pngtree.com/svg/20170602/avatar_107646.png" id="icon_image">
			<div class="piku-button-content" id="loginbutton">
				<div class="piku-sidebar-buttons">
					<div class="piku-sidebar-button-icon">
						<img src="https://png.pngtree.com/svg/20170602/avatar_107646.png">
					</div>
					<div class="piku-sidebar-button-name" style="color:black">
						Setting
					</div>
				</div>
				<div class="piku-sidebar-buttons">
					<div class="piku-sidebar-button-icon">
						<img src="https://png.pngtree.com/svg/20170602/avatar_107646.png">
					</div>
					<div class="piku-sidebar-button-name"  style="color:black">
						Logout
					</div>
				</div>
			</div>
        </div>
    </div>

    <div class="piku-sidebar">
    	<div class="piku-sidebar-group">
            <div class="piku-sidebar-button">
            	<div class="piku-sidebar-button-icon">
                	<img src="https://png.pngtree.com/svg/20170602/avatar_107646.png">

                </div>
            	<div class="piku-sidebar-button-name">
                	หน้าแรก
                </div>
            </div>
			<div class="piku-sidebar-button">
            	<div class="piku-sidebar-button-icon">
                	<img src="https://png.pngtree.com/svg/20170602/avatar_107646.png">

                </div>
            	<div class="piku-sidebar-button-name">
                	ถ่ายทอดสด
                </div>
            </div>
        </div>
    	<div class="piku-sidebar-group">
        	<div class="piku-sidebar-header">
            	รายการอื่นๆ
            </div>
            <div class="piku-sidebar-button">
            	<div class="piku-sidebar-button-icon">
                	<img src="https://png.pngtree.com/svg/20170602/avatar_107646.png">
                </div>
            	<div class="piku-sidebar-button-name">
                	ละครไทย
                </div>
            </div>
            <div class="piku-sidebar-button">
            	<div class="piku-sidebar-button-icon">
                	<img src="https://png.pngtree.com/svg/20170602/avatar_107646.png">
                </div>
            	<div class="piku-sidebar-button-name">
                	ละครเกาหลี
                </div>
            </div>
        </div>
        <div class="piku-sidebar-group">
        	<div class="piku-sidebar-header">
            	รายการที่ติดตาม
            </div>
            <div class="piku-sidebar-follow">
            	<div class="piku-sidebar-follow-icon">
                	<img src="https://png.pngtree.com/svg/20170602/avatar_107646.png">
                </div>
            	<div class="piku-sidebar-follow-name">
                	รักนี้มีหนเดียว
                </div>
            	<div class="piku-sidebar-follow-count">
                	3
                </div>
            </div>
            <div class="piku-sidebar-button">
            	<div class="piku-sidebar-button-icon">
                	<img src="https://png.pngtree.com/svg/20170602/avatar_107646.png">
                </div>
            	<div class="piku-sidebar-button-name">
                	นายง่วง กับ นางหิว
                </div>
            </div>

            <div class="piku-sidebar-follow">
            	<div class="piku-sidebar-follow-icon">
                	<img src="https://png.pngtree.com/svg/20170602/avatar_107646.png">
                </div>
            	<div class="piku-sidebar-follow-name">
                	โปรแกรมข้ามคืน
                </div>
            	<div class="piku-sidebar-follow-count">
                	14
                </div>
            </div>

            <div class="piku-sidebar-follow">
            	<div class="piku-sidebar-follow-icon">
                	<img src="https://png.pngtree.com/svg/20170602/avatar_107646.png">
                </div>
            	<div class="piku-sidebar-follow-name">
                	ดูเพื่มเติม
                </div>
            	<div class="piku-sidebar-follow-count">
                	99+
                </div>
            </div>

        </div>

        <div class="piku-sidebar-group">
        	<div class="piku-sidebar-header">
            	Follow Suber
            </div>
            <div class="piku-sidebar-follow">
            	<div class="piku-sidebar-follow-icon">
                	<img src="https://png.pngtree.com/svg/20170602/avatar_107646.png">
                </div>
            	<div class="piku-sidebar-follow-name">
                	KoJiNa
                </div>
            	<div class="piku-sidebar-follow-count">
                	2
                </div>
            </div>
            <div class="piku-sidebar-follow">
            	<div class="piku-sidebar-follow-icon">
                	<img src="https://png.pngtree.com/svg/20170602/avatar_107646.png">
                </div>
            	<div class="piku-sidebar-follow-name">
                	CGJi
                </div>
            	<div class="piku-sidebar-follow-count">
                	4
                </div>
            </div>

            <div class="piku-sidebar-button">
            	<div class="piku-sidebar-button-icon">
                	<img src="https://png.pngtree.com/svg/20170602/avatar_107646.png">
                </div>
            	<div class="piku-sidebar-button-name">
                	โปรแกรมข้ามคืน
                </div>
            </div>

            <div class="piku-sidebar-follow">
            	<div class="piku-sidebar-follow-icon">
                	<img src="https://png.pngtree.com/svg/20170602/avatar_107646.png">
                </div>
            	<div class="piku-sidebar-follow-name">
                	ดูเพื่มเติม
                </div>
            	<div class="piku-sidebar-follow-count">
                	99+
                </div>
            </div>
        </div>

        <div class="piku-sidebar-group">
        	<div class="piku-sidebar-header">
            	My Channel
            </div>
            <div class="piku-sidebar-follow">
            	<div class="piku-sidebar-follow-icon">
                	<img src="https://png.pngtree.com/svg/20170602/avatar_107646.png">
                </div>
            	<div class="piku-sidebar-follow-name">
                	รายการวีดีโอ
                </div>
            	<div class="piku-sidebar-follow-count">
                	4
                </div>
            </div>
            <div class="piku-sidebar-follow">
            	<div class="piku-sidebar-follow-icon">
                	<img src="https://png.pngtree.com/svg/20170602/avatar_107646.png">
                </div>
            	<div class="piku-sidebar-follow-name">
                	คำขอช่วยแปล
                </div>
            	<div class="piku-sidebar-follow-count">
                	14
                </div>
            </div>

            <div class="piku-sidebar-button">
            	<div class="piku-sidebar-button-icon">
                	<img src="https://png.pngtree.com/svg/20170602/avatar_107646.png">
                </div>
            	<div class="piku-sidebar-button-name">
                	ตั้งค่า Channel
                </div>
            </div>

            <div class="piku-sidebar-follow">
            	<div class="piku-sidebar-follow-icon">
                	<img src="https://png.pngtree.com/svg/20170602/avatar_107646.png">
                </div>
            	<div class="piku-sidebar-follow-name">
                	ดูเพื่มเติม
                </div>
            	<div class="piku-sidebar-follow-count">
                	10
                </div>
            </div>
        </div>
    </div>
	<div class="screen">
		<center>
			<img src="http://id.castko.com/wp-content/uploads/2017/10/1-43-800x445.jpg" width="50%" >
		</center>
		<div class="col-md-12">
			<h2>Recommended</h2>
		</div>
		<div class="col-md-12">
			<div class="col-md-2 col-md-offset-1" style="padding:10px ;background-color:#232323">
				<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/avenger.jpg"width="100%" height="280px"><br>
				<p><span style="font-size:20px;font-weight:bold">Avenger </span><br>15 ตอน <br>5423 view ☺ 1 day ago</p>
			</div>
			<div class="col-md-2 " style="padding:10px ;background-color:#232323">
				<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/doraemon.jpg"width="100%" height="280px"><br>
				<p><span style="font-size:20px;font-weight:bold">DORAEMON </span><br>19 ตอน <br>5423 view ☺ 2 day ago</p>
			</div>

			<div class="col-md-2 " style="padding:10px ;background-color:#232323">
				<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/halloween.jpg"width="100%" height="280px"><br>

				<p><span style="font-size:20px;font-weight:bold">HALLOWEEN </span><br>16 ตอน <br>5423 view ☺ 1 day ago</p>
			</div>

			<div class="col-md-2 " style="padding:10px ;background-color:#232323">
				<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/homestay.jpg"width="100%" height="280px"><br>

				<p><span style="font-size:20px;font-weight:bold">HOMESTAY </span><br>12 ตอน <br>5423 view ☺ 2 day ago</p>
			</div>

			<div class="col-md-2 " style="padding:10px ;background-color:#232323;position:relative;">
				<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/spider.jpg"width="100%" height="280px"><br>
				<span style="width:calc(100% - 20px);height:280px;position:absolute;top:10px;background-color:black;opacity:0.8;text-align: center;font-size:24px;"><br><br><br><br>ดูเพื่มเติม</span>
				<p><span style="font-size:20px;font-weight:bold">You are the Best!!</span><br>11 ตอน <br>5423 view ☺ 2 day ago</p>
			</div>
		</div>
		<div class="col-md-12">
			<h2>ละครไทย</h2>
		</div>
		<div class="col-md-12">
			<div class="col-md-2 col-md-offset-1" style="padding:10px ;background-color:#232323">
				<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/nakii.jpg"width="100%" height="280px"><br>

				<p><span style="font-size:20px;font-weight:bold">นาคี</span><br>18 ตอน <br>99998 view ☺ 2 day ago</p>
			</div>
			<div class="col-md-2 " style="padding:10px ;background-color:#232323">
				<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/maxresdefault.jpg"width="100%" height="280px"><br>

				<p><span style="font-size:20px;font-weight:bold">ฟ้าจรดทราย</span><br>10 ตอน <br>602 view ☺ 2 day ago</p>
			</div>

			<div class="col-md-2 " style="padding:10px ;background-color:#232323">
				<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/love.jpg"width="100%" height="280px"><br>

				<p><span style="font-size:20px;font-weight:bold">รักวุ่นๆกับเจ้าหญิงจอมจุ้น</span><br>15 ตอน <br>5423 view ☺ 2 day ago</p>
			</div>

			<div class="col-md-2 " style="padding:10px ;background-color:#232323">
				<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/kum.jpg"width="100%" height="280px"><br>

				<p><span style="font-size:20px;font-weight:bold">กำไลมาศ 	</span><br>16 ตอน <br>4510 view ☺ 2 day ago</p>
			</div>

			<div class="col-md-2 " style="padding:10px ;background-color:#232323;position:relative;">
				<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/0124073672.jpg"width="100%" height="280px"><br>
				<span style="width:calc(100% - 20px);height:280px;position:absolute;top:10px;background-color:black;opacity:0.8;text-align: center;font-size:24px;"><br><br><br><br>ดูเพื่มเติม</span>
				<p><span style="font-size:20px;font-weight:bold">บ่วงรัก ซาจาน</span><br>15 ตอน <br>2000 view ☺ 2 day ago</p>
			</div>
		</div>
		<div class="col-md-12">
			<h2>ละครเกาหลี</h2>
		</div>
		<div class="col-md-12">
			<div class="col-md-2 col-md-offset-1" style="padding:10px ;background-color:#232323">
				<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/series_korea.jpg"width="100%" height="280px"><br>

				<p><span style="font-size:20px;font-weight:bold">นายมนุษย์ต่างดาว กับ ยัยตัวร้าย</span><br>12 ตอน <br>9000 view ☺ 2 day ago</p>
			</div>
			<div class="col-md-2 " style="padding:10px ;background-color:#232323">
				<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/korea.jpg"width="100%" height="280px"><br>

				<p><span style="font-size:20px;font-weight:bold">Thorn Tree Birds</span><br>17 ตอน <br>5723 view ☺ 2 day ago</p>
			</div>

			<div class="col-md-2 " style="padding:10px ;background-color:#232323">
				<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/my-fair-lady.jpg"width="100%" height="280px"><br>

				<p><span style="font-size:20px;font-weight:bold">My Fair Lady</span><br>13 ตอน <br>5423 view ☺ 2 day ago</p>
			</div>

			<div class="col-md-2 " style="padding:10px ;background-color:#232323">
				<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/images.jpg"width="100%" height="280px"><br>

				<p><span style="font-size:20px;font-weight:bold">รักนี้หัวใจไม่โกหก </span><br>20 ตอน <br>5423 view ☺ 2 day ago</p>
			</div>

			<div class="col-md-2 " style="padding:10px ;background-color:#232323;position:relative;">
				<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/A-Korean-Odyssey.jpg"width="100%" height="280px"><br>
				<span style="width:calc(100% - 20px);height:280px;position:absolute;top:10px;background-color:black;opacity:0.8;text-align: center;font-size:24px;"><br><br><br><br>ดูเพื่มเติม</span>
				<p><span style="font-size:20px;font-weight:bold">A Korean Odyssey</span><br>16 ตอน <br>6500 view ☺ 2 day ago</p>
			</div>
		</div>
	</div>
</body>
</html>
