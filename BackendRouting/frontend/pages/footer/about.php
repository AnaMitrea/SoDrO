<?php
$root = '/BackendRouting/';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frontend/stylesheets/footer/globalForPages.css">
    <link rel="stylesheet" href="frontend/stylesheets/footer/aboutStyle.css">
    <link href='https://fonts.googleapis.com/css?family=Jolly Lodger' rel='stylesheet'>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <title>About Us</title>
</head>
<body>
    <div class="top-bar">
        <div class="icon">
            <span id="icon" class="iconify" data-icon="ep:cold-drink"></span>
        </div> 
    
        <div id="page-title">
          <p>SoftDrinks</p>
        </div>

        <!-- Responsive top bar  -->
        <div class="shop-list-icon">
            <span class="iconify" data-icon="bx:list-ul"></span>
            <div class="list-items-responsive">
                <a href="<?php echo $root ?>/trending">Trending</a>
                <a href="<?php echo $root ?>/products">Products</a>
                <a href="<?php echo $root ?>/recipes">Recipes</a>
                <a href="<?php echo $root ?>/favorites">Favorites</a>
            </div>
        </div>
        <div class="list-items">
            <a href="<?php echo $root ?>/trending">Trending</a>
            <a href="<?php echo $root ?>/products">Products</a>
            <a href="<?php echo $root ?>/recipes">Recipes</a>
            <a href="<?php echo $root ?>/favorites">Favorites</a>
        </div>

        <div class="search-container">
            <form>
                <input type="search" placeholder="Search...">
            </form>
        </div>

        <div class="user-icon">
            <span id="profile-picture" class="iconify" data-icon="healthicons:ui-user-profile-outline"></span>
        </div>
</div>
   
    <div class="middle">
     
     <div class="title">
        <p id="title-name">SoDrO</p>
        <h4>Team:</h4>
        <ul class="lists">
            <li>Mitrea Ana-Maria</li>
            <li>Iosub George-Catalin</li>
            <li>Arnautu Stefan</li>
        </ul>   
     </div>

     <div class="bookmark">
         <p>Bookmark</p>
         <ul style="list-style-type:none;">
             <li><a href="#1">1 Introduction</a></li>
             <li><a href="#1.1">1.1 Purpose</a></li>
             <li><a href="#1.2">1.2 Intended Audience and Reading Suggestions</a></li>
             <li><a href="#1.3">1.3 Product Scope</a></li>
             <li><a href="#1.4">1.4 References</a></li>
             <li><a href="#2">2 Overall Description</a></li>
             <li><a href="#2.1">2.1 Product Perspective</a></li>
             <li><a href="#2.2">2.2 Product Functions</a></li>
             <li><a href="#2.3">2.3 User Classes and Characteristics</a></li>
             <li><a href="#2.4">2.4 Operating Environment</a></li>
             <li><a href="#2.5">2.5 Assumptions and Dependencies</a></li>
             <li><a href="#3">3 External Interface Requirements</a></li>
             <li><a href="#3.1">3.1 User Interfaces</a></li>
             <li><a href="#3.2">3.2 Software Interfaces</a></li>
             <li><a href="#4">4 Backend Description</a></li>

         </ul>

     </div>

     <div class="punct">
     <h1 id="1">1.Introducere</h1>
         <h2 id="1.1">1.1 Purpose</h2>
       <p>SoDro este o aplicatie Web care realizeaza managementul preferintelor unei persoane sau grup de persoane in ceea de priveste
    consumul de bauturi non-alcoolice. Aplicatia ofera suport continuu pentru gestiunea informatiilor esentiale produselor si listelor
    de cumparaturi. SoDro detine un clasament al celor mai populare produse.</p>

     <h2 id="1.2">1.2 Intended Audience and Reading Suggestions</h2>
       <p>Acest site este destinat oricarei persoane ce detine un cont sau care doreste sa creeze un cont cu scopul de a cauta informatii
    despre diferite bauturi non alcoolice.</p>

         <img class="actori" src="frontend/images/footer/about/actori.png" alt="p">

     <h2 id="1.3">1.3 Product Scope</h2>
       <p>Scopul acestui site este de a prezenta produse nonalcolice persoanelor pe care il acceseaza si de a afla preferintele
        acestor in functie de categoriile de bauturi. Fiecare produs este prezentat in detaliu si sunt oferite foarte multe 
        informatii utile precum: ingrediente, alergeni, informatii nutritionale.</p> 
     <h2 id="1.4">1.4 References</h2>
       <p>Baza de date aferenta aplicatiei a fost preluata de la Open Food Facts:</p>
        <a href="https://world.openfoodfacts.org/data">https://world.openfoodfacts.org/data</a>
     
    </div>

    <div class="punct">
     <h1 id="2">2.Overall Description</h1>
     <h2 id="2.1">2.1 Product Perspective</h2>

     <h3>Flowchart Login/SignUp</h3>
        <img class="flowcharts" src="frontend/images/footer/about/login.png" alt="p">
     <h3>Flowchart User Dashboard</h3>
        <img class="flowcharts" src="frontend/images/footer/about/dashboard.png" alt="p">
     <h3>Flowchart Admin Dashboard</h3>
        <img class="flowcharts" src="frontend/images/footer/about/admindashboard1.png" alt="p">
        <img class="flowcharts" src="frontend/images/footer/about//admindashboard2.png" alt="p">
     <h3>Flowchart Trending</h3>
        <img class="flowcharts" src="frontend/images/footer/about/trending.png" alt="p">
     <h3>Flowchart Recipes</h3>
        <img class="flowcharts" src="frontend/images/footer/about/recipes.png" alt="p">
     <h3>Flowchart shop</h3>
        <img class="flowcharts" src="frontend/images/footer/about/shop.png" alt="p">
     <h3>Flowchart product</h3>
        <img class="flowcharts" src="frontend/images/footer/about/product.png" alt="p">

     <h2 id="2.2">2.2 Product Functions</h2>
       <ul class="lists">
            <li>Autentificarea utilizatorilor</li>
            <li>Creare de conturi pentru utilizatori</li>
            <li>Crearea unei liste de produse favorite</li>
            <li>Accesarea sectiunilor de Trending, Recipes, Products, Favorites</li>
            <li> Accesarea sectiunii de User Dashboard</li>
            <li>Crearea unei liste de produse favorite la nivel de grup de persoane</li>
            <li>Vizualizarea informatiilor referitoare la fiecare produs de pe pagina</li>
            <li>Furnizarea unor retete ce folosesc diferite produse din aplicatie</li>
            <li>Furnizarea unor statistici diverse ce pot fi exportate in diferite formate</li>
            <li>Vizualizarea clasamentului de produse populare</li>
       </ul>
     <h2 id="2.3">2.3 User Classes and Characteristics</h2>
         <ul class="lists">   
            <li>Ca si utilizator, pot accesa pagina de login pentru a ma autentifica</li>
            <li>Ca si utilizator, pot accesa pagina de signin pentru a-mi crea cont de utilizator.</li>
            <li>Ca si utilizator, pot folosi functia de search din interfata principala a sitului.</li>
            <li>Ca si utilizator, pot accesa User Dashboard pentru a vizualiza informatiile esentiale ale contului, respectiv grupului din care fac parte.</li>
            <li>Ca si utilizator, pot adauga produse intr-o lista</li>
            <li>Ca si utilizator, pot accesa sectiunile Trending, Recipes, Products, Favorites</li>
            <li>Ca si administrator, pot accesa Admin Dashboard pentru a utiliza functiile de Add/Remove User, Add/Remove Product si User Whitelist.</li>
         </ul>
     <h2 id="2.4">2.4 Operating Environment</h2>
     <ul class="lists">
        <li>Pentru crearea site-ului s-au folosit urmatoarele:  HTML, CSS, JavaScript.</li> 
        <li>Pentru gestiunea bazei de date se va folosi un server cu MySQL / PostgreSQL.</li>
     </ul>
     <h2 id="2.5">2.5 Assumptions and Dependencies</h2>
        <p>Aplicatia Web se poate folosi doar in cazul in care baza de date folosita este disponibila. In acest caz, orice eroare
        datorata bazei de date va face ca situl sa nu aiba functionalitatile respective.</p>
    </div>    
    
    <div class="punct">
     <h1 id="3">3.External Interface Requirements</h1>
     <h2 id="3.1">3.1 User Interfaces</h2>
        <p>Interfata grafica a siteului este responsive in functie de marimea ecranului. In acest fel, componentele principale
        ale paginilor se ajusteaza automat pentru a fi vizibile in orice situatie.</p>


        <h3>Login/SignIn Interface</h3>
        <img class="interface" src="frontend/images/footer/about/interface/login.png" alt="p">
        <img class="interface" src="frontend/images/footer/about/interface/login2.png" alt="p">
        <ul class="lists">
        <li>Formulare de Login/Sign-in cu buton de submit</li>
        <li>Buton de conectare cu Google</li>
        </ul>
        <h3>Change Password Interface</h3>
        <img class="interface" src="frontend/images/footer/about/interface/changepwd.png" alt="p">
        
        <h3>Main Page Interface</h3>
        <img class="interface" src="frontend/images/footer/about/interface/main.png" alt="p">
        <ul class="lists">
        <li>Butoanele asociate meniului principal sunt fixate in top-ul paginilor in asa fel incat sunt accesibile utilizatorilor in orice moment.</li>
        </ul>
        <h3>User Dashboard Interface</h3>
        <img class="interface" src="frontend/images/footer/about/interface/dashboard.png" alt="p">
        
        <ul class="lists">
            <li>Lista de produse - Shopping List</li>
            <li>Butoane de change password/email ce permit schimbarea datelor utilizatorului.</li>
            <li>Buton de vizualizare a grupului din care face parte utilizatorul.</li>
            <li>Buton pentru Save Preferences ce salveaza statisticile fiecarui utilizator in formate deschise, textuale si grafice – minimal, CSV si SVG.</li>
        </ul>
        
        <h3>Admin Dashboard Interface</h3>
        <img class="interface" src="frontend/images/footer/about/interface/adminprofile.png" alt="p">
        <ul class="lists">
        <li>Butoane specifice de moderare a:</li>
          <ul style="list-style-type:circle;">
            <li>utilizatorilor</li>
            <li>produselor</li>
          </ul>
        <li>Butoane de change password/email ce permit schimbarea datelor administratorului.</li>
        </ul>
        <h3>Shop Interface</h3>
        <img class="interface" src="frontend/images/footer/about/interface/shop.png" alt="p">
        <img class="interface" src="frontend/images/footer/about/interface/shop2.png" alt="p">
        
        <ul class="lists">
            <li>Pe aceasta pagina sunt doua functionalitati noi, Sort by si Order by. Acestea ajuta la sortarea datelor afisate
            (daca o persoana doareste sa afiseze produsele in ordine alfabetica; sau daca o persoana doreste sa afiseze doar
             podusele care au un anumit numar de calorii sau sunt produse de o anumita firma)</li>
            <li>Aceste functionalitati isi schimba afisajul in funtie de dimensiunea paginii.</li>
            <li>Totodata, pe o pagina sunt afisate 24 de produse si putem schimba paginile de produse cu ajutorul butoanelor
            Previous si Next.</li>
            <li>Pagina contine doar un produs, deoarece nu avem conexiunea cu baza de date.</li>
        </ul>

        <ul style="list-style-type:none;">
         <li>La hover peste un produs apar doua butoane noi:</li>
            <ul style="list-style-type:none;">
            <li>- unul pentru a vedea mai multe detalii despre produs</li>
            <li>- unul pentru a adauga produsul in lista de cumparaturi</li>
            </ul>
        </ul>
        <img id="hover-shop" src="frontend/images/footer/about/interface/shop3.png" alt="p">

        <h3>Product interface</h3>
        <img class="interface" src="frontend/images/footer/about/interface/product.png" alt="p">
        <ul class="lists">
        <li>Aceasta pagina este destinata unui produs</li>
        <li>Cele doua iconite din stanga si dreapta ne ajuta sa schimbam imaginile; prin apasarea lor acele imagini vor aparea 
            in partea prinicipala (imaginea mare din centru)</li>
        <li>Mai jos vor aparea detaliile despre produs (INGREDIENTS, NUTRITIONAL VALUES)</li>
        </ul>
        
        <h3>Trending Interface</h3>
        <img class="interface" src="frontend/images/footer/about/interface/trending.png" alt="p">
        
        
        <ul class="lists">
            <li>Pe aceasta pagina gasim cate o rubrica speciala pentru fiecare categorie de produse, fiecare avand cele mai populare produse din acea categorie.
            <li>Apasand pe titlul sectiunii, utilizatorul va fi redeirectionat catre o noua pagina unde va putea vedea mai multe produse populare din acea categorie.
            <li>Facand Hover pe produs, utilizatorul poate adauga produsul in Shopping List sau sa acceseze pagina produsului pentru a afla mai multe detalii.
        </ul>
        
        
        <h3>Recipe Interface</h3>
        <img class="interface" src="frontend/images/footer/about/interface/recipe.png" alt="p">
        <ul class="lists">
            <li>Pagina destinata vizulizarii diferitelor retete de mocktail-uri, cafele, ceaiuri, etc</li>
            <li>Pagina dispune de un buton numit Servings care in functie de ce numar va contine, va actualiza portiile ingredientelor</li>
            <li>Pagina dispuna de un buton See Recipe ce va deschide etapele de urmat ale retetei</li>
        </ul>
        
        <h2 id="3.2">3.2 Software Interfaces</h2>
        <p>Aplicatia se va conecta la baza de date cu produse si va permite vizualizarea matadatelor produselor in componentele specifice:</p>
        <ul class="lists">
            <li>Main Page</li>
            <li>Trending</li>
            <li>Favorite</li>
            <li>Products</li>
            <li>Recipes</li>
        </ul>
    </div>

    <div class="punct">
    <h1 id="4">4.Backend Description</h1>
      <p>Frontend-ul si Backend-ul sunt în stransa legatura când este vorba de comunicare. Browser-ul trimite request-uri HTTP,
     primește răspunsuri înapoi și folosește informația pentru a randa paginile pentru ca utilizatorul sa le poată vizualiza.</p>
      <p>Backend-ul de obicei răspunde Browserului cu informații legate de HTML, fișiere de tip css, js, json.</p>
      <p>Frontend-ul de obicei face request-uri HTTP, informatii diferite din inputul formularelor sau al altor structuri.</p>

        <img class="backend" src="frontend/images/footer/about/backend.png" alt="p">

      <p>Codul va fi structurat in mai multe fișiere, cu nume specifice, pentru a fi ușor de interpretat și de alți programatori.</p>
      <p>Datele importante despre autentificarea utilizatorilor vor fi stocate într-un mod securizat în baza de date. Celelalte 
    date despre produse vor fi stocate in baza de date aferenta cu campurile identificatoare.</p>

        <img class="backend" src="frontend/images/footer/about/backend2.png" alt="p">
      
    </div>

    </div>
    
    
    <footer id="jos" class="footer">
        <div class="icon">
            <span id="icon-footer" class="iconify" data-icon="ep:cold-drink"></span>
        </div>
        <div class="list-items-bottom">
            <a href="<?php echo $root ?>/terms">Terms</a>
            <a href="<?php echo $root ?>/blogs">Blogs</a>
            <a href="<?php echo $root ?>/about">About</a>
            <a href="<?php echo $root ?>/contact">Contact</a>
            <a href="<?php echo $root ?>/privacy">Privacy</a>
        </div>
    </footer>
</body>
</html>