<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARAM ZAMAN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>

  
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ARAM ZAMAN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul style="width: 90%;"  class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="https://www.youtube.com/channel/UCRu0VXQBgXtw5ETGvpjRqJA">YouTube <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mailto:0996652915a@gmail.com">Contact</a>
      </li>
     
      <li class="nav-item">
      </li>

    </ul>

    <form method='POST' > <button class="btn btn-danger" type='submit' name='logout'>Logout</button> </form>

    
  </div>
</nav>

<main class="contanier">


<?php 

$username = "aramzaman";
$password = "12345";


session_start();

if(isset($_SESSION['USER'])  && isset($_SESSION['PASSWORD']) &&  isset($_SESSION['LOGIN'])){

  if($username === $_SESSION['USER'] && $password === $_SESSION['PASSWORD']){
   
    echo '<div class="card-group">
    <div class="card">
      <img src="img1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">aram zaman</h5>
        <p class="card-text">ليس العار أن تسقط ولكنّ العار أن لا تستطيع النّهوض.</p>
      </div>
    </div> 
    
    <div class="card">
      <img src="img2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">aram zaman</h5>
        <p class="card-text"> لا يستطيع أحد ركوب ظهرك إلّا إذا كنت منحنياً </p>
      </div>
    </div>
    <div class="card">
      <img src="img3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">aram zaman </h5>
        <p class="card-text">من جار على صباه جارت عليه شيخوخته
    </p>
        </div>
  </div>';
  }
}else{
    echo "<script> location.replace('login.php') </script>";
}



if(isset($_POST['logout'])){
    echo "<script> location.replace('login.php') </script>";
    session_unset();
}

?>
</main>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</body>
</html>
