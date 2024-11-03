<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Evalve|| Event </title>


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
<style>

.main {
  max-width: 1000px;
  margin: auto;
}
img{
	height: 200px;
	width: 400px;
	background-size: cover;
}
.row {
  margin: 10px -16px;
}
.row,
.row > .column {
  padding: 8px;
}
.column {
  float: left;
  width: 33.33%;
  display: none; 
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
/* Content */
.content {
  background-color: white;
  padding: 10px;
}
.show {
  display: block;
}
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
</head>
<body>
	
	<!-- banner -->
	<div class="banner jarallax">
		<div class="agileinfo-dot">
		<?php include_once('includes/header.php');?>
			<div class="wthree-heading">
				<h2>Events</h2>
			</div>
		</div>
	</div>
	<!-- //banner -->

	
	<div class="main">

			<h1>Our Events</h1>
			<hr>

			<h2>Photo Gallary</h2>

			<div id="myBtnContainer">
			<button class="btn active" onclick="filterSelection('all')"> Show all</button>
			<button class="btn" onclick="filterSelection('wed')"> Wedding</button>
			<button class="btn" onclick="filterSelection('con')"> Conference</button>
			<button class="btn" onclick="filterSelection('par')"> Party</button>
			</div>

			<!-- Portfolio Gallery Grid -->
			<div class="row">
			<div class="column wed">
				<div class="content">
				<img src="./images/./wed1.jpg" alt="wedding" style="width:100%">
				<h4>Own Home</h4>
				</div>
			</div>
			<div class="column wed">
				<div class="content">
				<img src="./images/./wed2.jpg" alt="wedding" style="width:100%">
				<h4>Royal Palace</h4>
				</div>
			</div>
			<div class="column wed">
				<div class="content">
				<img src="./images/./wedding1.jpg" alt="wedding" style="width:100%">
				<h4>Destination Wedding</h4>
				</div>
			</div>
			<div class="column par">
				<div class="content">
				<img src="./images/./party1.jpg" alt="Party" style="width:100%">
				<h4>Gathering Show</h4>
				</div>
			</div>
			<div class="column par">
				<div class="content">
				<img src="./images/./party2.jpg" alt="Party" style="width:100%">
				<h4>Indoor Show</h4>
				</div>
			</div>
			<div class="column par">
				<div class="content">
				<img src="./images/./party3.jpg" alt="Party" style="width:100%">
				<h4>Private</h4>
				</div>
			</div>
			<div class="column con">
				<div class="content">
				<img src="./images/./confere1.jpg" alt="conference" style="width:100%">
				<h4>Personal Conference</h4>
				</div>
			</div>
			<div class="column con">
				<div class="content">
				<img src="./images/./confere2.jpg" alt="conference" style="width:100%">
				<h4>Business Conference</h4>
				</div>
			</div>
			<div class="column con">
				<div class="content">
				<img src="./images/./confere3.jpg" alt="conference" style="width:100%">
				<h4>Gobal Seminar</h4>
				</div>
			</div>
			<!-- END GRID -->
			</div>

			<!-- END MAIN -->
			</div>
			
<!-- END GRID -->
</div>	
	<!-- footer -->
	<?php include_once('includes/footer.php');?>
	<!-- jarallax -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<!-- //jarallax -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/* 
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="js/modernizr.custom.js"></script>
<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>


</body>	
</html>