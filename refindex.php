
<html>
<head>
<title>WELCOME</title>
<?php require_once('header.php'); ?>

<?php require_once ('ref-only.php');?>
</head>
 
<style>
        *{
	      margin: 0;
	      padding: 0;
     	}
     	header{
     	  height: 100px;
     	  background: rgba(0,0,0,0.7);
     	  width: 100%;
     	  position:fixed;
     	  z-index:12;
     	}
	   .logo{
     	  font-family: 'Castoro Titling';
     	  font-size: 25px;
     	  padding: 35px;
     	  margin-left:50px;
     	}
     	.logo a{
     	  color: #fff;
     	  text-decoration: none;
     	}
     	.nav_bar{
     	  font-family: 'Castoro Titling';
     	  font-size: 20px;
     	  float:right;
     	  list-style: none;
     	}
     	.nav_bar li{
     	  display: inline-block;
     	}
	    .nav_bar li a{
     	  padding: 15px;
     	}
	    .nav_bar li a:hover{
     	  bacjground: #B4AFAF;
     	  color:#fff;
     	  border: 1px solid #000;
     	  border-radius: 5px;
     	  border-width: auto;
     	}
        body { 
          width: 100%;
          height:100%;
          font-family: 'Open Sans', sans-serif;
          background: #092756;
          background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
          background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
          background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
          background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
          background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
          filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
           }

        .box{
     	  background:rgba(0, 0, 0, 0.5);
          width:100%;
     	  height: 46%;
     	  padding: 100px;
     	  color:white;
     	  position: fixed;
     	
     	}
     	.box2 {
     	  background:rgba(0, 0, 0, 0.5);
     	  width:50%;
     	  height: 46%;
     	  padding: 100px;
     	  color:white;
     	  position: fixed;
     	  top: 0px;
     	  right: 0px;  	
     	} 
     	.box3 {
     	  background:rgba(0, 0, 0, 0.5);
     	  width:50%;
     	  height: 54%;
     	  color:white;
     	  position: fixed;
     	  bottom: 0px;
     	  left: 0px;  	
     	} 
     	.box4 {
     	  background:rgba(0, 0, 0, 0.5);
     	  width:50%;
     	  height: 54%;
     	  color:white;
     	  position: fixed;
     	  bottom: 0px;
     	  right: 0px;  	
     	}  
     	  
            
        input { 
          width: 100%; 
          margin-bottom: 10px; 
          background: rgba(0,0,0,0.3);
          border: none;
          outline: none;
          padding: 10px;
          font-size: 13px;
          color: #fff;
          text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
          border: 1px solid rgba(0,0,0,0.3);
          border-radius: 4px;
          box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
          -webkit-transition: box-shadow .5s ease;
          -moz-transition: box-shadow .5s ease;
          -o-transition: box-shadow .5s ease;
          -ms-transition: box-shadow .5s ease;
          transition: box-shadow .5s ease;
        }
        input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }

        table {
          border-collapse: collapse;
          width: 100%;
            }   
        th, td {
          padding: 8px;
          text-align: left;
          color:white;
          font-weight:normal;
          }
          .decks{
          padding-left: 100px;
          }
          .tourna-ment{
          padding-left: 0px;
          }
          .imagesfit{
     	height:100%;
     	width:100%; 
     	margin-left: auto;
        margin-right: auto;
     	filter:brightness(80%);
     	}
     	.imagesfit2{
     	height:100%;
     	width:100%; 
     	margin-left: auto;
        margin-right: auto;
     	filter:brightness(80%);
     	}
     	.btn { 
 display: inline-block;
 *display: inline; *zoom: 1;
 padding: 4px 10px 4px; 
 margin-bottom: 10; 
 font-size: 13px; 
 line-height: 18px; 
 cursor: pointer; 
 *margin-left: .3em; 
 }
 
.btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] { background-color: #2644c9; }
.btn-primary, .btn-primary:hover { text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); color: #ffffff; }
.btn-primary.active { color: rgba(255, 255, 255, 0.75); }
.btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] { filter: none; background-color: #4a77d4; }
.move {
    top: 10px;
    right:10px;
    position: absolute;

}

</style>



<body>

<header>
	<div class ="logo">
	<a href ="" >TCG DataBase</a>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
		<div class ="nav_bar">
			<ul>
				<li><a href = "teams">Teams</a></li>
				<li><a href = "cards"> Cards </a></li>
				<li><a href = "logout" >Logout</a></li>
				
			</ul>
		</div>
	</div>
</header>

<div class = "editinfo">
	<div class ="box">
		<div class="edit">
			<h1>EDIT INFO</h1>
				<form method="post">
				<label for="firstname">First Name:</label>
				<input type="text" name="firstname" placeholder="Change First Name"/>
				<label for="lastname">Last Name:</label>
				<input type="text" name="lastname" placeholder="Change Last Name"/>
				<label for="DateofBirth">Date of Birth:</label>
				<input type="date" id = "DateofBirth" name="dob" required="required" />	
				</form>
				<br>
				<a href="/~23SP_sahoos2/playerindex.php" class="btn btn-primary btn-block btn-large">Save</a>
		</div>
        
	</div>

</div>


<div class = "Cards">
	<div class ="box3">
		<div class="edit-cards">
			<h1 class ='decks'>Notes</h1>
			<div class = 'move'>
			<a href= 'cards' class = "btn btn-primary btn-block btn-large" > CLICK HERE TO ADD NOTES TO THE SERVER</a>
			</div>
	
		</div>
	</div>
</div>

<div class = "ViewTournament">
	<div class ="box4">
		<div class="Tourna">
			<h1 class = "tourna-ment">VIEW ON GOING MATCHES</h1>
			<div id="carouselExampleDark" class="carousel carousel-dark slide">
  <div class="carousel-indicators">
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img class = "imagesfit2" src="images/tournament.png" class="d-block w-100" alt="...">
    </div>
    </div>
		</div>
	</div>
</div>
</div>


</body>
</html>