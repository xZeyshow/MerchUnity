<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=², initial-scale=1.0">
    <title>Contact</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- FrameWork Tailwind -->
    <link href="../css_pages/style.css" rel="stylesheet" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<body class="font-sans text-sm">
  <!-- Top Bar -->
  <div class="w-full border-b text-gray-600index text-xs">
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
      <ul class="flex space-x-8 font-semibold text-gray-800" style="font-size: 16px;">
        <li><a href="UPPA.html" class="hover:text-[#bebab4] no-underline text-gray-800">UPPA</a></li>
        <li><a href="Hexagone.html" class="hover:text-[#bebab4] no-underline text-gray-800">Hexagone</a></li>
        <li><a href="Lidl.html" class="hover:text-[#bebab4] no-underline text-gray-800">Lidl</a></li>
      

        <li class="relative">
        </li>
      </ul>

      <!-- Icons -->
      <div class="flex items-center space-x-6 text-gray-700">
        <a href="#"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M5 11a6 6 0 1112 0 6 6 0 01-12 0z"/></svg></a>
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
    
  
<!-- Formulaire -->
  <div class="mx-auto max-w-2xl text-center">
    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Nous contacter</h2>

  </div>
  <form action="#" method="post" class="mx-auto mt-8 max-w-xl sm:mt-20">
    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
      <div>
        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">Prénom</label>
        <div class="mt-2.5">
          <input type="text" name="first-name" id="first-name" autocomplete="given-name" required class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div>
        <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Nome</label>
        <div class="mt-2.5">
          <input type="text" name="last-name" id="last-name" autocomplete="family-name" required class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      
      <div class="sm:col-span-2">
        <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
        <div class="mt-2.5">
          <input type="email" name="email" id="email" autocomplete="email" required class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>
      <div class="sm:col-span-2">
        <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Numéro de téléphone</label>
        <div class="mt-2.5">
          <input type="tel" name="tel" id="tel" autocomplete="tel" required class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>



      <div class="sm:col-span-2">
        <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
        <div class="mt-2.5">
          <input type="textarea" name="message" id="message" rows="4" required class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
        </div>
      </div>
      <div class="flex gap-x-4 sm:col-span-2">
        

        <div class="form-check form-switch">
        <input class="form-check-input" type="checkbox" id="switch-1">
        <label class="form-check-label text-sm text-muted" for="switch-1">
            En sélectionnant cette option, vous acceptez notre
            <a href="privacy.html" class="fw-semibold text-primary">politique&nbsp;de&nbsp;confidentialité</a>.
        </label>
        </div>


      </div>
    </div>
    <div class="mt-10">
      <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Envoyer</button>
    </div>
  </form>
</div>
 
</body>
</html>