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
		a.col{
			display:flex;
			align-items:center;
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
			<div class="piku-button-content" id="alertbutton" style="width:400px">
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
				<a href="<?php echo site_url('sar/documents/Hackaday/Hackaday_controller/index');?>" class="col">
					<div href="sdsd" class="piku-sidebar-button-icon">
						<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/menu1.png">
		   
					</div>
					<div class="piku-sidebar-button-name">
						หน้าแรก
					</div>
				</a>
            </div>
			<div class="piku-sidebar-button">
				<a href="<?php echo site_url('sar/documents/Hackaday/Hackaday_controller/index');?>" class="col">
					<div class="piku-sidebar-button-icon">
						<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/menu2.png">
		   
					</div>
					<div class="piku-sidebar-button-name">
						ถ่ายทอดสด
					</div>
				</a>
            </div>
        </div>
    	<div class="piku-sidebar-group">
			
        	<div class="piku-sidebar-header">
            	รายการอื่นๆ
            </div>
            <div class="piku-sidebar-button">
				<a href="<?php echo site_url('sar/documents/Hackaday/Hackaday_controller/index');?>" class="col">
					<div class="piku-sidebar-button-icon">
						<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/menu3.png">
					</div>
					<div class="piku-sidebar-button-name">
						ซีรีส์ไทย
					</div>
				</a>
			</div>
            <div class="piku-sidebar-button">
				<a href="<?php echo site_url('sar/documents/Hackaday/Hackaday_controller/index');?>" class="col">
					<div class="piku-sidebar-button-icon">
						<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/menu4.png">
					</div>
					<div class="piku-sidebar-button-name">
						ซีรีส์เกาหลี
					</div>
				</a>
            </div>
			
            <div class="piku-sidebar-button">
				<a href="<?php echo site_url('sar/documents/Hackaday/Hackaday_controller/index');?>" class="col">
					<div class="piku-sidebar-button-icon">
						<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/menu5.png">
					</div>
					<div class="piku-sidebar-button-name">
						ซีรีส์สากล
					</div>
				</a>
            </div>
        </div>
        <div class="piku-sidebar-group">
        	<div class="piku-sidebar-header">
            	รายการที่ติดตาม
            </div>
            <div class="piku-sidebar-follow">
				<a href="<?php echo site_url('sar/documents/Hackaday/Hackaday_controller/index');?>" class="col">
					<div class="piku-sidebar-follow-icon">
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTY8894L3HH6K7yNEnTKJrJxpKICFJwosUBPy_b_uv4AbRbY2EB" style="border-radius:50%">
					</div>
					<div class="piku-sidebar-follow-name">
						รักนี้มีหนเดียว
					</div>
					<div class="piku-sidebar-follow-count">
						3
					</div>
				</a>
            </div>
            <div class="piku-sidebar-button">
            	<a href="<?php echo site_url('sar/documents/Hackaday/Hackaday_controller/index');?>" class="col">
					<div class="piku-sidebar-button-icon">
						<img src="https://i.bug-a-boo.tv/images/55503dd791b27c373c103b9be05ca0ce/series_ipad2_v_ohmyvenus.jpg?resize=auto " style="border-radius:50%">
					</div>
					<div class="piku-sidebar-button-name">
						นายง่วง กับ นางหิว
					</div>
				</a>
            </div>
			
            <div class="piku-sidebar-follow">
				<a href="<?php echo site_url('sar/documents/Hackaday/Hackaday_controller/index');?>" class="col">
					<div class="piku-sidebar-follow-icon">
						<img style="border-radius:50%" src="data:image/jpeg;base64,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">
					</div>
					<div class="piku-sidebar-follow-name">
						โปรแกรมข้ามคืน
					</div>
					<div class="piku-sidebar-follow-count">
						14
					</div>
				</a>
            </div>
			
            <div class="piku-sidebar-follow">
            	<a href="<?php echo site_url('sar/documents/Hackaday/Hackaday_controller/index');?>" class="col">
					<div class="piku-sidebar-follow-icon">
						<img style="border-radius:50%" src="http://www.lakornhit.com/images/category/konluck.jpg">
					</div>
					<div class="piku-sidebar-follow-name">
						ดูเพื่มเติม
					</div>
					<div class="piku-sidebar-follow-count">
						99+
					</div>
				</a>
            </div>
			
        </div>
		
        <div class="piku-sidebar-group">
        	<div class="piku-sidebar-header">
            	Follow
            </div>
            <div class="piku-sidebar-follow">
				<a href="<?php echo site_url('sar/documents/Hackaday/Hackaday_controller/index');?>" class="col">
					<div class="piku-sidebar-follow-icon">
						<img style="border-radius:50%" src="http://www.clker.com/cliparts/7/b/9/9/1498565612833849610famous-youtuber-logos.med.png">
					</div>
					<div class="piku-sidebar-follow-name">
						KoJiNa
					</div>
					<div class="piku-sidebar-follow-count">
						2
					</div>
				</a>
            </div>
            <div class="piku-sidebar-follow">
            	<a href="<?php echo site_url('sar/documents/Hackaday/Hackaday_controller/index');?>" class="col">
					<div class="piku-sidebar-follow-icon">
						<img style="border-radius:50%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQL74vTMMZrcFzMoKB9BQu79Xz3QojWegPN75qche4pkzWcEHwJ">
					</div>
					<div class="piku-sidebar-follow-name">
						CGJi
					</div>
					<div class="piku-sidebar-follow-count">
						4
					</div>
				</a>
            </div>
			
            <div class="piku-sidebar-button">
            	<a href="<?php echo site_url('sar/documents/Hackaday/Hackaday_controller/index');?>" class="col">
					<div class="piku-sidebar-button-icon">
						<img style="border-radius:50%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTopbnWZJQ4L44RIYwnpaSth7KxqqR-xbGn4xbtCmPKkbQE2MON">
					</div>
					<div class="piku-sidebar-button-name">
						โปรแกรมข้ามคืน
					</div>
				</a>
			</div>
			
            <div class="piku-sidebar-follow">
				<a href="<?php echo site_url('sar/documents/Hackaday/Hackaday_controller/index');?>" class="col">
					<div class="piku-sidebar-follow-icon">
						<img style="border-radius:50%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2uH80I_k6iWKSsiFTSAop0o3n-28cUlDsKIbR6I-eeN_Q0KXt">
					</div>
					<div class="piku-sidebar-follow-name">
						ดูเพื่มเติม
					</div>
					<div class="piku-sidebar-follow-count">
						99+
					</div>
				</a>
			</div>
        </div>
		
        <div class="piku-sidebar-group">
        	<div class="piku-sidebar-header">
            	My Channel
            </div>
            <div class="piku-sidebar-follow">
				<a href="<?php echo site_url('sar/documents/Hackaday/Hackaday_controller/movie_chapter_edit');?>" class="col">
					<div class="piku-sidebar-follow-icon">
						<img style="border-radius:50%" src="https://mbtskoudsalg.com/images/logo-video-png.png">
					</div>
					<div class="piku-sidebar-follow-name">
						รายการวีดีโอ
					</div>
					<div class="piku-sidebar-follow-count">
						4
					</div>
				</a>
			</div>
            <div class="piku-sidebar-follow">
            	<a href="<?php echo site_url('sar/documents/Hackaday/Hackaday_controller/index');?>" class="col">
					<div class="piku-sidebar-follow-icon">
						<img style="border-radius:50%" src="http://writing.rocks/wp-content/uploads/2012/06/LOGO-Master.jpg">
					</div>
					<div class="piku-sidebar-follow-name">
						คำขอช่วยแปล
					</div>
					<div class="piku-sidebar-follow-count">
						14
					</div>
				</a>
            </div>
			
            <div class="piku-sidebar-button">
            	<a href="<?php echo site_url('sar/documents/Hackaday/Hackaday_controller/index');?>" class="col">
					<div class="piku-sidebar-button-icon">
						<img style="border-radius:50%" src="https://image.freepik.com/icones-gratis/engrenagem_318-56262.jpg">
					</div>
					<div class="piku-sidebar-button-name">
						ตั้งค่า Channel
					</div>
				</a>
            </div>
			
            <div class="piku-sidebar-follow">
            	<a href="<?php echo site_url('sar/documents/Hackaday/Hackaday_controller/index');?>" class="col">
					<div class="piku-sidebar-follow-icon">
						<img style="border-radius:50%" src="https://www.colourbox.com/preview/5697410-icon-plus-black.jpg">
					</div>
					<div class="piku-sidebar-follow-name">
						ดูเพื่มเติม
					</div>
					<div class="piku-sidebar-follow-count">
						10
					</div>
				</a>
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
				<a href="<?php echo site_url('sar/documents/Hackaday/Hackaday_controller/movie_description');?>">
				<img src="http://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/halloween.jpg"width="100%" height="280px"><br>

				<p><span style="font-size:20px;font-weight:bold">HALLOWEEN </span><br>16 ตอน <br>5423 view ☺ 1 day ago</p>
				</a>
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