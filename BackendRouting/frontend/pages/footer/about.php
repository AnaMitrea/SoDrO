<?php
$root = '/BackendRouting';
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

    <!-- Top-bar - Search Bar -->
    <div class="search-container">
        <form action="<?php echo $root ?>/products?method=search" method="post">
            <input type="text" name="search" placeholder="Search...">
            <input type="submit" name="submit-from-search-bar">
        </form>
    </div>
    <!-- User Icon Button -->
    <div class="user-icon">
        <a href="<?php echo $root ?>/profile">
            <span id="user-iconify" class="iconify" data-icon="iconoir:profile-circled"></span>
        </a>
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
        <img class="flowcharts" src="frontend/images/footer/about/admin_dashboard.png" alt="p">
        <h3>Flowchart Trending</h3>
        <img class="flowcharts" src="frontend/images/footer/about/trending.png" alt="p">
        <h3>Flowchart Recipes</h3>
        <img class="flowcharts" src="frontend/images/footer/about/recipes.png" alt="p">
        <h3>Flowchart shop</h3>
        <img class="flowcharts" src="frontend/images/footer/about/shop.png" alt="p">
        <h3>Flowchart product</h3>
        <img class="flowcharts" src="frontend/images/footer/about/product.png" alt="p">
        <h3>Flowchart favorites</h3>
        <img class="flowcharts" src="frontend/images/footer/about/favorites.png" alt="p">

        <h2 id="2.2">2.2 Product Functions</h2>
        <ul class="lists">
            <li>Autentificarea utilizatorilor</li>
            <li>Creare de conturi pentru utilizatori</li>
            <li>Crearea unei liste de produse favorite</li>
            <li>Accesarea sectiunilor de Trending, Recipes, Products, Favorites</li>
            <li> Accesarea sectiunii de User Dashboard</li>
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
            <li>Ca si utilizator, pot accesa User Dashboard pentru a vizualiza informatiile esentiale ale contului.</li>
            <li>Ca si utilizator, pot adauga produse intr-o lista</li>
            <li>Ca si utilizator, pot accesa sectiunile Trending, Recipes, Products, Favorites</li>
            <li>Ca si administrator, pot accesa Admin Dashboard pentru a utiliza functiile de Add/Remove User.</li>
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
        <img class="interface" src="frontend/images/footer/about/interface/signup.png" alt="p">
        <ul class="lists">
            <li>Formulare de Login/Sign-in cu buton de submit</li>
        </ul>

        <h3>Main Page Interface</h3>
        <img class="interface" src="frontend/images/footer/about/interface/main.png" alt="p">
        <img class="interface" src="frontend/images/footer/about/interface/main2.png" alt="p">
        <ul class="lists">
            <li>Butoanele asociate meniului principal sunt fixate in top-ul paginilor in asa fel incat sunt accesibile utilizatorilor in orice moment.</li>
        </ul>
        <h3>User Dashboard Interface</h3>
        <img class="interface" src="frontend/images/footer/about/interface/userdashboard.png" alt="p">
        <img class="interface" src="frontend/images/footer/about/interface/userdashboard_group.png" alt="p">

        <h3>Admin Dashboard Interface</h3>
        <img class="interface" src="frontend/images/footer/about/interface/admin_adduser.png" alt="p">
        <img class="interface" src="frontend/images/footer/about/interface/admin_removeuser.png" alt="p">
        <ul class="lists">
            <li>Butoane specifice de moderare a:</li>
            <ul style="list-style-type:circle;">
                <li>utilizatorilor</li>
            </ul>
        </ul>
        <h3>Shop Interface</h3>
        <img class="interface" src="frontend/images/footer/about/interface/shop.png" alt="p">
        <img class="interface" src="frontend/images/footer/about/interface/shop2.png" alt="p">

        <ul class="lists">
            <li>Pe aceasta pagina sunt doua functionalitati noi, Sort by si Order by. Acestea ajuta la sortarea datelor afisate
                (daca o persoana doareste sa afiseze produsele in ordine alfabetica; sau daca o persoana doreste sa afiseze doar
                podusele care fac parte dintr-o anumita categorie)</li>
            <li>Aceste functionalitati isi schimba afisajul in funtie de dimensiunea paginii.</li>
            <li>Totodata, pe o pagina sunt afisate 24 de produse si putem schimba paginile de produse cu ajutorul butoanelor
                Previous si Next.</li>
            <li>Dupa sortarea cu ajutorul criteriilor din partea stanga rezultatul va fi redirectionat pe o alta pagina.</li>
        </ul>

        <h3>Product interface</h3>
        <img class="interface" src="frontend/images/footer/about/interface/product.png" alt="p">
        <img class="interface" src="frontend/images/footer/about/interface/product2.png" alt="p">
        <ul class="lists">
            <li>Aceasta pagina este destinata unui produs</li>
            <li>In partea dreapta vor aparea detaliile despre produs (INGREDIENTS, NUTRITIONAL VALUES)</li>
        </ul>

        <h3>Trending Interface</h3>
        <img class="interface" src="frontend/images/footer/about/interface/trending.png" alt="p">

        <ul class="lists">
            <li>Pe aceasta pagina gasim cate o rubrica speciala pentru 5 cele mai populare categorii de produse, fiecare avand cele mai populare produse din acea categorie.</li>
            <li>Divul ului produs este la fel ca pe celelalte pagini.</li>
        </ul>

        <h3>Recipe Interface</h3>
        <img class="interface" src="frontend/images/footer/about/interface/recipes.png" alt="p">
        <img class="interface" src="frontend/images/footer/about/interface/recipes_ingredients.png" alt="p">

        <ul class="lists">
            <li>Pagina destinata vizulizarii diferitelor retete de mocktail-uri, cafele, ceaiuri, etc</li>
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

        <p><b>Importul de date</b></p>
        <p>Importul de date se face cu ajutorul unui script php (migrations.php) ce creaza in baza de date tabelele ce sunt folosite de aplicatia web.</p>
        <p>Importul de date in baza de date se face cu ajutorul unui script python ce ia informatii de pe site-ul Open Food Facts in functie de filtrele folosite in API. Scriptul parseaza textul JSON si il prelucreaza pentru a-l insera  intr-un fisier CSV.</p>
        <p>Ex de URL de pe care s-a facut scrape: </p>
        <p>Categoria 1: Beverages; Categoria 2: Dairy Drinks; Incepand cu pagina 1.</p>
        <p>https://world.openfoodfacts.org/cgi/search.pl?action=process&tagtype_0=categories&tag_contains_0=contains&tag_0=beverages&tagtype_1=categories&tag_contains_1=contains&tag_1=dairy_drinks&page=1&json=true</p>

        <p><b>Exportul de date</b></p>
        <p>Exportul datelor se face in 3 modur din pagina utilizatoruluii:</p>
        <p>1. Exportul celor 3 categorii favorite ale unui utilizator ca si fisier text.</p>
        <p>2. Exportul distributiei produselor ce contin alergeni cunoscuti ca si fisier CSV, respectiv imagine png.</p>
        <p>3. Exportul distributiei produselor caracterizate dupa nustriscore ca si fisier CSV, respectiv imagine png.</p>


        <p><b>Modulul de administrare</b></p>
        <p>Exista doua fisiere importante care se ocupa de routing-ul aplicatiei, Router.php si index.php, ce verifica endpoint-urile catre orice pagina. In cazul in care path-ul este unul gresit, utilizatorul va fi redirectionat catre o pagina de tip “error404” custom.</p>
        <p>In cazul in care un utilizator nu este autentificat pe site si incearca sa acceseze paginile din path, acesta va fi redirectionat automat catre pagina de autentificare..</p>


        <p><b>Arhitectura Aplicatiei</b></p>
        <p>Arhitectura aplicatiei este de tip Model-View-Controller:</p>
        <p>Obiectele de tip model (ex: Login/Signup Models, User Model, Product Model, Shop Model etc) isi stocheaza variabilele cu informatii (folosind informatiile din form-uri, din javascript etc) necesare obiectelor de tip controller.</p>
        <p>Obiectele de tip controller, preia informatiile de la modele si verifica corectitudinea lor si sunt trimise catre randarea lor in view-uri.</p>
        <p>Fisierele de tip view sunt evidentiate prin extensia .phtml si contin informatii de tip JSON necesare randarii tuturor paginilor.</p>

        <p><b>Arhitectura Datelor</b></p>
        <p>Datele ce sunt preluate din baza de date prin intermediul scriptului php sunt convertite in text de tip json. Acestea sunt preluate prin intermediul JavaScript, unde sunt decodate si parsate, iar informatiile necesare sunt prelucrate in pagina web, generand produse.</p>

        <p><b>Securitatea</b></p>
        <p>Datele utilizatorului sunt stocate in baza de date, parola fiind criptata, iar la nivelul sesiunii datele nu sunt accesibile utilizatorului.</p>
        <p>Toate interogarile catre baza de date sunt protejate de atacurile de tip SQL Injection</p>
        <p>Credentialele necesare conectarii catre host-ul bazei de date este stocat intr-un fisier separat ce nu va fi adaugat (folosind .gitignore) la incarcarea pe github a repository-ului</p>

        <p><b>Modelul C4 al aplicatiei</b></p>
        <img class="interface" src="frontend/images/footer/about/DiagramaC1.png" alt="p">
        <img class="interface" src="frontend/images/footer/about/DiagramaC2.png" alt="p">
        <img class="interface" src="frontend/images/footer/about/DiagramaC3.png" alt="p">
    </div>

</div>


<footer id="jos" class="footer">
    <div class="icon">
        <span id="icon-footer" class="iconify" data-icon="ep:cold-drink"></span>
    </div>
    <div class="list-items-bottom">
        <a href="<?php echo $root ?>/about">About</a>
        <a href="<?php echo $root ?>/contact">Contact</a>
    </div>
</footer>
</body>
</html>