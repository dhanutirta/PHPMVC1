<!DOCTYPE html>
<html>
<head>
<style>
   body {
    background-image: url(http://localhost/phpmvc/img/1.jpg);
   }
   
  
   .jumbotron {
    opacity: 0.9;
}

footer {
  text-align: center;
  padding: 3px;
  background-color: #3C4048;
  color: white;
  margin-top: 191px;
}


</style>
</head>
<body>
<div class="container text-center mt-4">
    <h1 style="color: white;">Halaman Creator</h1>
    <img src="http://localhost/phpmvc/img/dhanu.jpg" alt="sugik" width="200" class="rounded-circle shadow mb-2">
    <p style="color: white;">Hallo, Nama saya <?= $data['nama']?>, Saya seorang <?=$data['pekerjaan']?></p>

</div>
<footer>
  <h4 style="margin-top: 10px; font-weight: bold;">SMKN 2 TRENGGALEK</h4><h6>
  <a href="https://smkn2trenggalek.sch.id/">smkn2trenggalek.sch.id</a></h6>
</footer>

</body>
</html>