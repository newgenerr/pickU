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
		<div class="row" >
			<div class="col-md-12">
					<center><iframe width="500" height="300" src="https://www.youtube.com/embed/tg52up16eq0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></center>
			</div>
			<div class="col-md-12">
						<center><p>ชื่อเรื่อง : SPIDERMAN</p></center>
						<p>เรื่องย่อ : เกิดขึ้นในโลกอนาคต
						ในสมัยที่ความสามารถต่างๆของผู้มีพลังพิเศษ (ผู้มีพลังจิต, Psychics, Espers)
						กลายเป็นสาขาหนึ่งของวิทยาศาสตร์ โคจรมาพบกับ อำนาจเหนือธรรมชาติอีกชนิดหนึ่ง คือ เวทมนตร์ (Magic)
						เรื่องราวดำเนินไป ณ เมืองแห่งการศึกษา ซึ่งมีเทคโนโลยีสูงมาก อยู่ทางตะวันตกของกรุงโตเกียว ประเทศญี่ปุ่น วันหนึ่งชีวิตของโทมะก็ต้องเปลี่ยนไป เมื่อมีแม่ชี (อายุไล่เลี่ยกับเขา) คนหนึ่ง
						นอนสลบพาดอยู่ที่ระเบียงห้องของเขา เธอชื่อว่าอินเด็กซ์ อินเด็กซ์มีความทรงจำที่ดีมาก เธอสามารถจดจำ คัมภีร์เวทมนตร์กว่าแสนเล่มไว้ได้ ทำให้เธอต้องถูกตามล่าจากเหล่าผู้มีเวทมนตร์ 
						โทมะได้ช่วยเหลืออินเด็กซ์ไว้ ให้ที่พักพิงกับเธอ และคอยช่วยเหลือเธอจาการถูกตามล่า จากทั้งฝ่ายเวทมนตร์และฝ่ายวิทยาศาสตร์
						</p>
			</div>
		</div>
		<div class="row">
			<div class="subject">
			<?php for($i=1;$i<5;$i++) {?>
				<div class="row">
					<div class="col-md-3 box">
						<img src="https://10.80.39.17/TSP59/Nursing/application/views/sar/documents/Hackaday/Photo/pic1.png" width="240px" height="150px">
					</div>
					<div class="col-md-6 box">
						<h1>Spider-Man EP.<?php echo $i;?></h1>
						<p style="color:#737373">ยอดดู</p>
						<a href="#" style="color:#737373">ชื่อคนทำ</a>
					</div>
					<div class="col-md-3 box">
						<div class="pull-right" style="margin-top:50px">
							<button style="font-size:24px" class="btn btn-waring">แก้ไข</button> 
							<button style="font-size:24px" class="btn btn-success">อัพโหลด</button> 
							<button style="font-size:24px" class="btn btn-danger">ลบ</button> 
						</div>
					</div>
				</div>
			<?php }?>	
			</div>
		</div>
	</div>
	<style>
body{
	background-color: #000000;
	color: white;
}
.row{
	margin-bottom: 10px;
}
.box{
	height:150px;
}
.subject{
	padding-left: 0px;
	padding-right: 100px;
}
.col-md-12{
	float: left;
    width: 100%;
    padding: 10px;
}

.pull-left{
	float: left;
}

.pull-right{
	float: right;
}

.col-md-6 {
    float: left;
    width: 50%;
    padding: 10px;
}

.col-md-3 {
    float: left;
    width: 20%;
    padding: 10px;
}

.col-md-9 {
    float: left;
    width: 70%;
    padding: 10px;
}	

.row:after {
    content: "";
    display: table;
    clear: both;
}

.row:hover > .box{
	background-color: #333333;
}
.btn {
  display: inline-block;
  margin-bottom: 0;
  font-weight: 700;
  text-align: center;
  vertical-align: middle;
  touch-action: manipulation;
  cursor: pointer;
  background-image: none;
  border: 1px solid transparent;
  white-space: nowrap;
  padding: 5px 10px;
  font-size: 30px;
  line-height: 1.45;
  border-radius: 2px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.btn-waring{
	background-color: #ffc107 !important;
	border-color: #ffc107 !important;
	color: #ffffff;
	background-color: #ffc107;
	border-color: #ffc107;
}	
.btn-success {
  background-color: #8bc34a !important;
  border-color: #8bc34a !important;
  color: #ffffff;
  background-color: #8bc34a;
  border-color: #8bc34a;
}
.btn-danger {
  background-color: #e51c23 !important;
  border-color: #e51c23 !important;
  color: #ffffff;
  background-color: #e51c23;
  border-color: #e51c23;
}
</style>



</body>
</html>
