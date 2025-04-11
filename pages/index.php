<?php
session_start();
?>

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="../css_pages/style.css" rel="stylesheet" />
</head>


<body class="">
<link rel="stylesheet" href="../css_pages/style_index.css">

<!-- NAVBAR Section -->
  <!-- Top Bar -->
  <div class="w-full border-b text-gray-600 text-xs">
    <div class="max-w-7xl mx-auto px-4 flex justify-between py-2">
      <div class="flex space-x-4">
        <a href="about.html" class="hover:underline">A propos</a>
        <a href="#" class="hover:underline">Vie privée</a>
        <a href="#" class="hover:underline">Contact</a>
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
        <a href=""><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M5 11a6 6 0 1112 0 6 6 0 01-12 0z"/></svg></a>
        <a href="login.php"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0z"/></svg></a>
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

<div class="container-fluid" style="margin: 0px; padding: 0px;">
<header class="header-bg-index">
  <div class="container px-4 px-lg-5 my-5">
      <div class="text-center text-black">
          <h1 class="display-4 fw-bolder">Merch-Unity</h1>
          <p class="lead fw-normal text-black-50 mb-0">
          <?php

              if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                echo "Bienvenue {$username} !";
              }
              else {
                echo "Bienvenue sur Merch-Unity ! ";
              }

?>
          </p>
      </div>
  </div>
</header>

  



  <br>

  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="titre text-center">
          Les nouveautés 🎁
        </div>
      </div>
        
        <br>
      
    </div>
  </div>
  <br>
  <div class="container">
    <br>

    
     <div class="row ">
                  <!-- Produit 1-->
                  <div class="col mb-4">
                        <button onclick="window.location.href='produit.html';">
                        <div class="card h-100">
                            <img class="card-img-top" src="../images/lidl_page/router-lidl.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">AP WIFI 6</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    
                                    55,76€
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Ajouter au panier</a></div>
                            </div>
                        </div>
                    </div>
                </button>
    

        <!-- Produit 2-->
        <div class="col mb-4">
                        <button onclick="window.location.href='produit.html';">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            
                            <!-- Product image-->
                            <img class="card-img-top" src="../images/lidl_page/router-lidl.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">AP WIFI 6</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <!-- Product price-->
                                    
                                    55,76€
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Ajouter au panier</a></div>
                            </div>
                        </div>
                    </div>
                </button>

      <!-- Produit 3-->
      
      <div class="col mb-4">
                        <button onclick="window.location.href='produit.html';">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            
                            <!-- Product image-->
                            <img class="card-img-top" src="../images/lidl_page/router-lidl.png" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">AP WIFI 6</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div> 
                                    55,76€
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Ajouter au panier</a></div>
                            </div>
                        </div>
                    </div>
                </button>
</div>
    

    </div>
    </div>
  </div>

  <br><br>

  
  <!--UPPA Section -->
  <div class="container-fluid" style="background-color: #22232a;">

      <div class="row justify-content-end">
        <div class="col-md-5">
          <div style="padding-top: 150px;">
            <img src="../images/index_page/CarteCampus.jpg" class="mx-auto ps-6" style="height: 150%; width: 100%;">
        </div>
      </div>
      
        <div class="col-md-7 align-items-center" style="margin-top: 60px;">
          <img src="../images/index_page/photoo.jpg" class="d-block mx-auto" style="width: 75%; height: 50%; ">
          
          <div style="padding-left: 130px;" class="align-items-start">
            <div class="uppa">
              Collection
            </div>
            <div class="uppa">
              
                <span style="color: #995ca2;">U</span>
                <span style="color: #67b0e2;">P</span>
                <span style="color: #B5BD00;">P</span>
                <span style="color: #E6007E;">A</span>

             
              
            </div>
            <div>
              <br>
              <a href="UPPA.html" class="myButton">DECOUVREZ LA COLLECTION</a>
            </div>
          </div>
        </div>

    </div>
    <br><br>
  </div>
  


    <!--Hexagone -->
    <div class="container-fluid" style="background-color: #020104;">

      <div class="row justify-content-end">
        <div class="col-md-5">
          <div style="padding-top: 150px;">
            <img src="../images/index_page/paris-d2.jpg" class="ps-5 ms-5" style="width: 80%; height: 850px; max-width: 100%;">


        </div>
      </div>
      
        <div class="col-md-7 align-items-center" style="margin-top: 60px;">
          <img src="../images/index_page/paris-d.avif" class="d-block ms-5" style="width: 75%; height: 50%; ">
          
          <div class="align-items-start ms-5">
            <div class="uppa">
              Collection
            </div>
            <div class="uppa">
              <span style="color: #000091;">H</span>
              <span style="color: #000091;">E</span>
              <span style="color: #000091;">X</span>
              <span style="color: #FFFFFF;">A</span>
              <span style="color: #FFFFFF;">G</span>
              <span style="color: #E1000F;">O</span>
              <span style="color: #E1000F;">N</span>
              <span style="color: #E1000F;">E</span>
            </div>
            <div>
              <br>
              <a href="hexagone.html" class="myButton">DECOUVREZ LA COLLECTION</a>
            </div>
          </div>
        </div>

    </div>
    <br><br>
  </div>



  <!-- Lidl -->
  <div class="container-fluid" style="background: #004A85;">

    <div class="row justify-content-end">
      <div class="col-md-5">
        <div style="padding-top: 150px;">
          <img src="../images/index_page/lidl.jpg" class="ps-5 ms-5" style="width: 80%; height: 840px; max-width: 100%;">


      </div>
    </div>
    
      <div class="col-md-7 align-items-center" style="margin-top: 60px;">
        <img src="../images/index_page/Symbole-Lidl.jpg" class="d-block ms-5" style="width: 75%; height: 45%; ">
        
        <div class="align-items-start ms-5">
          <div class="uppa">
            Collection
          </div>
          <div class="uppa">
            <span style="color: #0050aa;">L</span>
            <span style="color: #fff000;">I</span>
            <span style="color: #e60a14;">D</span>
            <span style="color: #fff000;">L</span>
          </div>
          <div>
            <br>
            <a href="Lidl.html" class="myButton">DECOUVREZ LA COLLECTION</a>
          </div>
        </div>
      </div>

  </div>
  <br><br>
</div>

<br><br>


<!--Ship info-->
<div class="container-fluid">
  <div class="row align-items-center text-center center">
    <div class="col-md-4 p-5">
      <div class="text-center pb-2">
        <img src="../images/index_page/carrier.svg" class="mx-auto d-block" alt="Livraison">
      </div>
      <p>Livraison offerte à partir de 90€ <span>d'achat en France métropolitaine</span></p>
    </div>
    <div class="col-md-4 p-5">
      <div class="text-center pb-2">
        <img src="../images/index_page/parcel.svg" class="mx-auto d-block" alt="Livraison">
      </div>
      <p>Echange ou remboursement sous 15 jours</span></p>
    </div>
    <div class="col-md-4 p-5">
      <div class="text-center pb-2">
        <img src="../images/index_page/security.svg" class="mx-auto d-block" alt="Livraison">
      </div>
      <p>Paiement 100% sécurisé</p>
    </div>
  </div>

  
</div>

<br><br>

<!--Footer-->
<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6>A propos</h6>
            <p class="text-justify pt-2">Boutique multi-marques réunissant des pièces originales, stylées et engagées.
              <br>Mode, accessoires, lifestyle : découvre une sélection qui te ressemble.</p>
          </div>

          <div class="col-xs-6 col-md-3">
          <h6>Categories</h6>
          <ul class="footer-links pt-2">
            <li><a href="UPPA.html">UPPA</a></li>
            <li><a href="hexagone.html">Hexagone</a></li>
            <li><a href="Lidl.html">Lidl</a></li>
          </ul>
        </div>

          <div class="col-xs-6 col-md-3">
            <h6>Liens rapides</h6>
            <ul class="footer-links pt-2">
              <li><a href="about.html">A propos de nous</a></li>
              <li><a href="contact.html">Nous contacter</a></li>
              <li><a href="policy.html">Politique de confidentialité</a></li>
            </ul>
          </div>
        </div>
        <div class="pt-3"></div>
        <hr>
      </div>
      
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2025 Tout droit reservé par 
         <a href="#">Merch-Unity</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12 pt-3">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fab fa-youtube"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>


  </body>
</html>