<!DOCTYPE html>
<html>
<head>
<title>Main page</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
 <div class="container-fluid">
<div class="jumbotron"  style="background:url('project_images/pic5.jpg')  no-repeat; background-size:cover;height:230px" ></div>
<div class="container-fluid">	
<div id="myCarousel" class="carousel slide bg-inverse w-50 ml-auto mr-auto" data-ride="carousel" data-interval="3000">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox" style="width:100% ;max-height:400px" ;>
    <div class="carousel-item active">
      <img class="d-block w-100" src="project_images/new_image1.jpg" alt="First slide">
        <div class="carousel-caption">
          <h3>First slide</h3>
          <p>This is the first slide.</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="project_images/pic2.jpg" alt="Second slide">
        <div class="carousel-caption">
          <h3>Second slide</h3>
          <p>This is the second slide.</p>
        </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="project_images/pic3.jpg" alt="Third slide">
        <div class="carousel-caption">
          <h3>Third slide</h3>
          <p>This is the third slide.</p>
        </div>
	</div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<!-- Brand -->
<a class="navbar-brand" href="#">Logo</a>

<!-- Links -->
<div class="collapse navbar-collapse" id="nav-content">   
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="#">Link 1</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Link 2</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Link 3</a>
</li>
</ul>
</nav>

<!-- Set body height so that scrollbars grow -->
<style scoped>
body {
height:2000px;
background-image:url('/pix/samples/bubble1.gif');
}
</style>

</div>		

</body>
<footer>
<div class="sidenav">
<a href="">Home</a>
<a href="">Contact No</a>
</div>
</footer>
</html>