<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="description" content="Project who made for cool people">
<meta name="keywords" content="Kernel, Silont Project">
<meta name="author" content="SilonT Project Team">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>SilonT Project Web</title>
</head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<style type="text/css">
.containerq{
	color: #fff;
}
.sticky {
	position: fixed;
  	top: 0;
  	width: 100%;
}
.sticky + .containerq{
	padding-top: 50px;
}
</style>
<body>
	<div class="hero">
		<div class="hero-inner" align="center">
			<img src="svg/brand.svg">
			<form action="#">
				<button class="download">Downloads</button>
			</form>
		</div>
	</div>
<nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
  <div class="container">
    <a class="navbar-brand" href="#">SilonT Project</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Downloads</a>
      </div>
    </div>
  </div>
</nav>
<div class="containerq">
 <div class="containerq col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-sm-8 col-lg-6">
        <img src="svg/opensource.svg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Open Source Code</h1>
        <p class="lead">Our code is fully open source and you can use it for learn, tracking our work, or etc.</p>
        <form action="https://github.com/silont-project">
        	<button class="githab">See Our Code</button>
        </form>
      </div>
    </div>
  </div>
 </div>
 <div class="container-2">
   <div class="containerq col-xxl-8 px-4 py-5">
    <div class="row g-5 align-items-center py-5">
      <div class="col-sm-8 col-lg-6">
        <img src="svg/opensource.svg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Open Source Code</h1>
        <p class="lead">Our code is fully open source and you can use it for learn, tracking our work, or etc.</p>
      </div>
    </div>
  </div>
  </div>
 </div>
<div class="float">
	<a href="https://t.me/silont_support"><img src="svg/telegram.svg"></a>
	<a href="https://www.github.com/silont-project"><img src="svg/github.svg"></a>
</div>
<div class="footer">
	<br>
	<p>SilonT Project Team<br>
	Copyright 2021</p>
</div>
<script>
var navbar = document.querySelector("nav");
var sticky = navbar.offsetTop;

window.onscroll = function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}</script>
</body>
</html>