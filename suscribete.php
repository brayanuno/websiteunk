<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- font -->
  <link href="https://fonts.googleapis.com/css?family=Lato:$defaultFont,$boldFont" rel="stylesheet">
  <!-- icons -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <!-- links -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <title>SuscribedSuccess</title>
</head>

<body> 
 
  <!-- START HERE -->
  <!-- NAVBAR -->
  <nav class="navbar navbar-primary bg-dark navbar-toggleable-sm navbar-expand-sm fixed-top" id="main-nav1">
    <div class="container">
    <a href="" class="navbar-brand"><img src="img/logo.png"></a>
    <button class="navbar-toggler navbar-toggler-right collapsed " type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="my-1 mx-2 close"><i class="fas fa-times p-0"></i></span>
       <span class="navbar-toggler-icon "><i class="fas fa-bars"></i></span>   
    </button>
    <div class="collapse navbar-collapse " id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a href="index.php" class="nav-link">Juego</a></li>
          <li class="nav-item"><a href="historia.php" class="nav-link">Historia</a></li>
          <li class="nav-item"><a href="suscribete.php" class="nav-link">Suscribete</a></li>
        </ul>
    </div>
   </div> <!-- end container --> 
  </nav>  <!-- end nav -->

  <!-- FORM -->
  <div class="container " style= "margin-top:70px;">
      <div class="cardCompany">
        <h2 class="text-center">Suscribete</h2>
        <h5 class="text-center">"Te enviaremos notificaciones y noticias acerca nuestro juego y avances"</h5>
        <h5 class="text-center"><strong>contactanos a danielaristizabal1010@gmail.com</strong></h5>
          <form class="form-group " action="includes/securenewsletter.php" method="POST">
            <label for="email">Name</label>
              <input class="form-control mb-1 border border-secondary"  type="text" name="first" placeholder="FirstName" required>
            <label for="email">LastName</label>
              <input class="form-control mb-1 border border-secondary" type="text" name="last" placeholder="LastName" required>
            <label for="country">Country</label>
              <input class="form-control mb-1 border border-secondary" type="text" name="country" placeholder="Country" required>
            <label for="email">Email Address</label>
              <input class="form-control mb-2 border border-secondary" type="email" name="hotmail" placeholder="name@mail.com" required>
              <?php
              $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
              if(strpos($fullUrl,"error=hotmailalreadyexist") == true) {
                echo "<span>El correo se encuentra en uso por favor intenta de nuevo</span><br>";
              }
              else if(strpos($fullUrl,"error=invalidmail") == true) {
                echo "<span> El correo es invalido por favor intenta de nuevo</span><br>";
              } 
              ?>
            <label for="message">Message</label>
            <textarea class="form-control mb-2 border border-secondary" rows="4" name="message"></textarea>
            <input  class="btn btn-secondary btn-block" type="submit" name ="submit" value="Submit">
          </form> <!-- end form -->
      </div>  <!-- end cardCompany -->
    </div>  <!-- end container -->

   <!-- FOOTER -->
  <footer class="footer-bottom-area bg-dark-light pt-3">
    <div class="container">
        <div class="row widgets footer-widgets text-center">
            <div class="col-lg-6 col-md-6 col-sm-12 ">
                <div class="single-widget widget-quick-links">
                    <h4 class="widget-title">Media</h4>
                    <ul class="widget-ul">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li class="mb-3"><a href="#">Q & A</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="single-widget widget-quick-links">
                    <h4 class="widget-title">Find Us</h4>
                    <ul class="d-flex widget-ul flex-column">
                            <li><a href="#">Facebook</a><span class="icon"><i class="fab fa-facebook"></i></span></li>
                            <li><a href="#">Instagram</a><span class="icon"><i class="fab fa-instagram"></i></span></li>
                            <li class="pb-3"><a href="#">Twitter</a><span class="icon"><i class="fab fa-twitter"></i></span></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
  </footer>




  <!-- DONT CHANGE -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="js/main.js" type="text/javascript"></script>

</body>
</html>