<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Merch-Unity</title>
  <script src="https://cdn.tailwindcss.com"></script> <!-- FrameWork Tailwind -->
  <link rel="icon" href="../images/index_page/Image2-modified.png" type="image/png">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Futura+PT:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../css_pages/login.css">


</head>


<body class="">
    <link rel="stylesheet" href="../css_pages/style_index.css">
    
    <!-- NAVBAR Section -->
      <!-- Top Bar -->
      <div class="w-full border-b text-gray-600 text-xs">
        <div class="max-w-7xl mx-auto px-4 flex justify-between py-2">
          <div class="flex space-x-4">
            <a href="about.html" class="hover:underline">A propos</a>
            <a href="privacy.html" class="hover:underline">Vie privée</a>
            <a href="contact.php" class="hover:underline">Contact</a>
            <a href="#" class="hover:underline">Collaborateurs</a>
          </div>
          <div class="flex space-x-4 items-center">
            <a href="#" class="hover:underline">Ma liste de souhait</a>
            <span class="border-l h-4"></span>
            <a href="#" class="hover:underline">Suivre ma commande</a>
            <span class="border-l h-4"></span>
            
          </div>
        </div>
      </div>
    
      <!-- Main Navbar -->
      <nav class="w-full bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
    
          <!-- Logo -->
           <button onclick="window.location.href='index.php';">
            <div class="flex items-center space-x-2">
              <img src="../images/index_page/Image2-modified.png" class= "w-9 h-9 text-red-500">
              <span class="text-2xl font-bold text-gray-800">Merch <span class="font-light">Unity</span></span>
            </div>
           </button>
          
    
          <!-- Nav Links -->
          <ul class="flex space-x-8 font-semibold text-gray-800">
            <li><a href="uppa.html" class="hover:text-[#bebab4]">UPPA</a></li>
            <li><a href="hexagone.html" class="hover:text-[#bebab4]">Hexagone</a></li>
            <li><a href="lidl.html" class="hover:text-[#bebab4]">Lidl</a></li>
           
            <li class="relative">
            </li>
          </ul>
    
          <!-- Icons -->
          <div class="flex items-center space-x-6 text-gray-700">
            <a href="#"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M5 11a6 6 0 1112 0 6 6 0 01-12 0z"/></svg></a>
            <a href="#"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z"/></svg></a>
            <a href="#" class="relative">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M17 13a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
              <span class="absolute -top-2 -right-2 text-white text-xs rounded-full px-1" style="background-color: #46413b;">1</span>
            </a>
          </div>
        </div>
      </nav>
    <br><br>


    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-md-9 col-lg-6 col-xl-5">
            <img class="img-fluid" src="../images/login_page/login-photo.png" style="border-radius: 10px;">
          </div>
          <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">


            <!--Messages erreur -->
            <?php
            if (isset($_GET['param1'])) {
              if ($_GET['param1'] == 'passnotthesame') {
                echo '
                <div class="error-msg">
                <i class="fa fa-times-circle"></i>
                Les mots de passe ne correspondent pas.
                </div>
                ';
                
              }
              else if ($_GET['param1'] == 'namepb') {
                echo '
                <div class="error-msg">
                <i class="fa fa-times-circle"></i>
                Votre nom doit contenir entre 3 et 15 caractères.
                </div>
                ';
              }
              else if ($_GET['param1'] == 'usernamepb') {
                echo '
                <div class="error-msg">
                <i class="fa fa-times-circle"></i>
                Votre prénom doit contenir entre 3 et 10 caractères.
                </div>
                ';
              }
              else if ($_GET['param1'] == 'passpb') {
                echo '
                <div class="error-msg">
                <i class="fa fa-times-circle"></i>
                Votre mot de passe doit contenir entre 5 et 15 caractères.
                </div>
                ';
              }
              else if ($_GET['param1'] == 'empty') {
                echo '
                <div class="error-msg">
                <i class="fa fa-times-circle"></i>
                 Tout les champs doivent être remplis. 
                </div>
                ';
              }
              else if ($_GET['param1'] == 'pbbdd') {
                echo '
                <div class="info-msg">
                <i class="fa fa-info-circle"></i>
                Problème de base de donnée. Veuillez réessayer plus tard...
                </div>
                ';
                
              }
            }


            ?>

            <form action="./reg_traitement.php" method="POST">
              <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                <p class="lead fw-normal mb-0 me-3">S'inscrire avec</p>
                <button type="button" class="btn btn-primary btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>
    
                <button type="button" class="btn btn-primary btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>
    
                <button type="button" class="btn btn-primary btn-floating mx-1">
                  <i class="fab fa-linkedin-in"></i>
                </button>
              </div>
    
              <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0">Ou</p>
              </div>
    
              
              <div class="form-outline mb-2">
                <input type="text" name="name" id="form3Example3" class="form-control form-control-lg" required minlength="3" maxlength="15">
                <label class="form-label" for="form3Example3" >Nom</label>
              </div>
              <div class="form-outline mb-2">
                <input type="text" id="form3Example3" name="username" class="form-control form-control-lg" required minlength="3" maxlength="10">
                <label class="form-label" for="form3Example3">Prénom</label>
              </div>
              <div class="form-outline mb-2">
                <input type="email" id="form3Example3" name="email" class="form-control form-control-lg" required minlength="3" maxlength="15">
                <label class="form-label" for="form3Example3">Adresse Mail</label>
              </div>
    
              
              <div class="form-outline mb-2">
                <input type="password" id="form3Example4" name="password" class="form-control form-control-lg" required minlength="5" maxlength="15">
                <label class="form-label" for="form3Example4">Mot de passe</label>
              </div>
              <div class="form-outline mb-2">
                <input type="password" id="form3Example4" name="re_password"class="form-control form-control-lg" required minlength="5" maxlength="15">
                <label class="form-label" for="form3Example4">Confirmer le mot de passe</label>
              </div>
    
              <div class="d-flex justify-content-between align-items-center">
                
                <!--
                <div class="form-check mb-0">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3">
                  <label class="form-check-label" for="form2Example3">
                    Se rapeller
                  </label>
                </div>
                -->
                
                <a href="#!" class="text-body" style="text-decoration: underline;">Mot de passe oublié?</a>
              </div>
    
              <div class="text-center text-lg-start mt-4 pt-0">
                <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">S'inscrire</button>
                <p class="small fw-bold mt-2 pt-1 mb-0">Vous avez déja un compte? <a href="login.php" class="link-danger">Se connecter</a></p>
              </div>
    
            </form>
          </div>
        </div>
      </div>
      
<br><br>

</body>

</html>