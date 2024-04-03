<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <!-- <link rel="stylesheet" href="js/script.js"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.theme.default.min.css">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">
    
</head>
<!-- <style>
body{
    font-family: "Roboto", sans-serif;
}    
/* .home{
    height: 700px;
    background-image: url(images/dp.jpg);
    background-size: cover;
    /* background-position: center; 
    position: relative;
} */
.home {
    height: 700px;
    background-image: url(images/dp.jpg);
    background-size: cover;
    background-attachment: fixed; /* Image partiellement fixe lors du défilement */
    background-position: center bottom; /* Position de départ de l'image */
    position: relative;
}
 
.home .home-content{
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.home .home-title {
    color: #fff;
    font-size: 40px;
    text-shadow: 10px 6px 5px rgba(0, 0, 0, 0.5);
    font-family: "Roboto", sans-serif;
    font-weight: bold;
}



/* animation */

@media (max-width:575px){
    .home .home-title{
        font-size: 25px;
    }
}
.animate-up {
    opacity: 0;
    transform: translateY(100px);
    transition: opacity 1s, transform 1s;
}

.animate-visible {
    opacity: 1;
    transform: translateY(0);
}

.line {
    width: 200px;
    background-color: #ddd;
    height: 3px;
    margin: auto;
}


.line span {
    display: block;
    width: 100px;
    height: 4px;
    background-color: gold;
    margin: auto;
    position: relative;
    bottom: 0.5px;
}
.line2{
    width: 200px;
    background-color: #ddd;
    height: 3px;
}
.line2 span {
    display: block;
    width: 100px;
    height: 4px;
    background-color: gold;
    margin: auto;
    position: relative;
    bottom: 0.5px;
}
/* .section-header {
    width: 500px;
    color: #888;
    margin: 10px auto;
    line-height: 1.5;
    text-align: center;
} */
.animate-left {
    opacity: 0;
    transform: translateX(-100px);
    transition: opacity 1s, transform 1s;
}

.animate-right {
    opacity: 0;
    transform: translateX(100px);
    transition: opacity 1s, transform 1s;
}

.animate-visible {
    opacity: 1;
    transform: translateX(0);
}
.about .about-info h3{
    font-size: 25px;
    font-weight: normal;
    margin-bottom: 20px;
    margin-top: 40px;
}
.about-info h3 span{
    color: #000080;
}
.about-info .about-info-desc{
    line-height: 1.8;
    color: #888;
    margin-bottom: 20px;
}

.about-info .about-info-btn{
    background-color: #778899;
    padding: 10px 20px;
    border : 0;
    color: #fff;
    font-weight: bold;
    width: 144px;
    height: 45px;
}

.about .about-img img{
    width: 100%;
    margin-top: 40px;
}

.services{
    background: #f7f7f7; 
    margin-top: 30px;
}

.services .serv{
    background: #fff;
    width: 105%;
    padding: 20px;
    text-align: center;
    margin-top: 40px;
}


.services .serv img{
    /* background-color: #7cb62f; */
    width: 105%;
    height: 20%;
    text-align: center;
    padding-right: 20px;
    /* line-height: 60px; */
    /* color: #fff; */
     /* border-radius: 50%;  */
}

.services .serv-title{
    font-weight: bold;
    font-size: 20px;
    margin-bottom: 20px;
}
.services .serv-title2{
    /* font-weight: bold; */
    font-size: 20px;
    margin-bottom: 20px;
}
.container2 .serv-title{
    font-weight: bold;
    font-size: 25px;
    margin-bottom: 20px;
    text-align: center;
}



.services .serv-desc{
    font-size: 16px;
    color: #888;
    margin-bottom: 20px;
}

.about-info-btn{
    background-color: #4B0082; 
    padding: 10px 20px;
    border : 0;
    color: #fff;
    font-weight: bold;
    width: 144px;
    height: 45px;
}
.about-info-btn a{
    color: #fff;
    text-decoration: none;
}
.video video{
    width: 100%;
    margin-top: 15px;
}
.histoire{
    background: #f7f7f7;
    margin-top: 30px;
}
@media (max-width:575px){
    .service p{
        font-size: 25px;
    }
}

@media (max-width: 768px) {
        .sections {
            font-size: 24px;
        }
}

.Temoignanges {
        background-color: #f7f7f7;
        padding: 50px 0;
    }

    .testimonial {
        background-color: #fff;
        padding: 20px;
        text-align: center;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .testimonial-avatar {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        margin: 0 auto 20px;
    }

    .testimonial-text {
        margin-bottom: 20px;
    }

    .testimonial-author {
        font-weight: bold;
    }

    .rating {
    display: flex;
    justify-content: center;
}

.rating i {
    display: inline-block;
    width: 15px;
    height: 15px;
    color: #4B0082;
    margin-right: 3px;
}
.btn-donation {
        background-color: #7cb62f;
        color: white;
        padding: 20px;
        margin-bottom: 10px;
        width: 180px;
        transition: background-color 0.3s;
    }
    .btn-donation:hover {
        background-color: transparent;
    }

    /* nos valeurs */
 /* p{
    text-align: justify;
 } */


</style> -->
<body>
    
    <?php include("dashboard/dashboard.php") ?>
    <section class="sections home text-center">
    <div class="container">
        <div class="home-content">
            <h3 class="home-title animate-up">Eglise Garnison des Assoiffés du Christ (G.A.C)</h3>
        </div>
    </div>
</section>

<section class="sections about">
    <div class="section-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="text-center" style="margin-top: 10px; line-height: 1.5">A Propos de <span style="color: #4B0082;">Nous</span></h2>
                    <div class="line"><span></span></div>
                    <p class="text-center">MISSION: TRANSFORMER POUR IMPACTER</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
        <div class="col-md-6">
                <div class="about-img animate-right">
                    <img src="images/img.jpeg" alt="" style="max-width: 100%;">
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-info animate-left" style="margin-left: 10px;">
                    <h3>Bienvenue à <span>L'Eglise GAC</span> (Garnison Des Assoiffés Du Christ)</h3>
                    <p class="about-info-desc">
                        La GARNISON DES ASSOIFFES DU CHRIST est une église où l'intimité avec Christ devient un mode de vie. <br> Nous sommes pour vous une famille, un lieu de réconfort, de soutien et un havre de paix en Christ. <br> Ayant reçu l'ordre suprême d'aller, faire de toutes les nations des disciples ; c'est en ces termes que l'Eglise G.A.C apporte des formations, entre autres : <br> Les Affermissements, Le Discipolat et L'Ecole de Maturité.
                    </p>
                    <button class="about-info-btn" style= "background-color: #4B0082;"><a href="Apropos.php" style="color: #fff;">Lire Plus</a></button>
                </div>
            </div>
        </div>
    </div>
</section>

<br> <br>
<section class="section mb-4 mt-4">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title" style="margin-bottom: 10px;">NOS <span style="color: #4B0082;">VALEURS</span></h2>
            <div class="line2"><span></span></div>
        </div>
        <div class="row justify-content-between" style="margin-top: 60px;">
            <div class="col-md-3 d-flex align-items-center justify-content-center">
                <div class="serv text-center d-flex align-items-center flex-column">
                    <i class="icon fa fa-cross fa-3x"></i>
                    <h6 class="mt-2 fa-2x">Amour</h6>
                </div>
            </div>

            <div class="col-md-3 d-flex align-items-center justify-content-center">
                <div class="serv text-center d-flex align-items-center flex-column">
                    <i class="icon fa fa-bell fa-2x"></i>
                    <h6 class="mt-2 fa-2x">Reveille</h6>
                </div>
            </div>

            <div class="col-md-3 d-flex align-items-center justify-content-center">
                <div class="serv text-center d-flex align-items-center flex-column">
                    <i class="icon fas fa-fire fa-3x"></i>
                    <h6 class="mt-2 fa-2x">Puissance</h6>
                </div>
            </div>

            <div class="col-md-3 d-flex align-items-center justify-content-center">
                <div class="serv text-center d-flex align-items-center flex-column">
                    <i class="icon fas fa-praying-hands fa-3x"></i>
                    <h6 class="mt-2 fa-2x">Saintete</h6>
                </div>
            </div>

            <div class="col-md-3 d-flex align-items-center justify-content-center">
                <div class="serv text-center d-flex align-items-center flex-column">
                    <i class="icon fas fa-tint fa-3x"></i>
                    <h6 class="mt-2 fa-2x">Soif</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sections services">
        <div class="container">
        <div class="section-title text-center">
                <h2 class="section-title" style="margin-top: 10px; line-height: 1.5">REJOIGNEZ-<span style="color: #4B0082;">NOUS</span></h2>
                <div class="line"><span></span></div>
                <p>Nous rendons toute la gloire à Dieu qui nous permet de nous réunir dans ce lieu ordinaire, mais où la Présence de Dieu nous transforme, jour après jour, en de véritables disciples de Christ.</p>
        </div>
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="serv">
                         <!-- <i class="icon fas fa-bible" ></i>  -->
                        <img src="images/forme.jpg" alt=""> 
                        <h3 class="serv-title2" style="margin-top: 10px;">NOS FORMATIONS</h3>
                        <hr style="color: gold;">
                        <p class="serv-desc">Nous sommes là pour vous soutenir tout au long de votre parcours, afin de vous aider à devenir de véritables disciples de Christ.</p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="serv">
                        <!-- <i class="icon fas fa-praying-hands"></i>  -->
                         <img src="images/pr.jpg" alt=""> 
                        <h3 class="serv-title2" style="margin-top: 10px;">MOMENTS DE PRIERE</h3>
                        <hr style="color: gold;">
                        <p class="serv-desc">Ces instants précieux nous permettent de nous connecter spirituellement, de trouver la paix intérieure et de chercher la guidance divine.</p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="serv">
                         <!-- <i class="icon fas fa-cross" style="margin-top: 10px;"></i>  -->
                         <img src="images/cel.jpg" alt=""> 
                        <h3 class="serv-title2" style="margin-top: 10px;">MOMENTS DE CELEBRATIONS</h3>
                        <hr style="color: gold;">
                        <p class="serv-desc">En plus de nos moments de prière, nous célébrons ensemble .Rejoignez nos différents cultes organisés sur la page du Pasteur Jhovani TM</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                
            </div>
        </div>
    
    </section>
<br> <br>

    <section class="sections services">
        <div class="container">
            <div class="section-title">
                <h2 class="section-title" style="margin-top: 10px;">NOS <span style="color: #4B0082;">CULTES</span></h2>
                <div class="line2"><span></span></div>
            </div>

            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="serv">
                         <!-- <i class="icon fas fa-bible" ></i>  -->
                        <img src="images/fr.jpg" alt=""> 
                        <h3 class="serv-title" style="margin-top: 10px;">MARDI MALAKISI</h3>
                        <p class="serv-desc">DES FORTS MOMENTS <br> D'ENSEIGNEMENT ET PARTAGE</p>
                        <div style="display: flex; justify-content: space-between; margin-top: auto;">
                            <p class="serv-desc" style="text-align: left; font-size: 20px;"><span style="color : #000080;">Jour: </span>Mardi</p>
                            <p class="serv-desc" style="text-align: right; font-size: 20px;"><span style="color : #000080;">Heure: </span>17H00 à 19h30</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="serv">
                        <!-- <i class="icon fas fa-praying-hands"></i>  -->
                         <img src="images/jeudi.jpg" alt=""> 
                         
                        <h3 class="serv-title" style="margin-top: 10px;">JEUDI FIRE</h3>
                        <p class="serv-desc">DES MOMENTS D'INTERCESSION GENERALE</p>
                        <div style="display: flex; justify-content: space-between; margin-top: auto;">
                            <p class="serv-desc" style="text-align: left; font-size: 20px;"><span style="color : #000080;">Jour: </span>Jeudi</p>
                            <p class="serv-desc" style="text-align: right; font-size: 20px;"><span style="color : #000080;">Heure: </span>17H00 à 19h30</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="serv">
                         <!-- <i class="icon fas fa-cross" style="margin-top: 10px;"></i>  -->
                         <img src="images/dim.jpg" alt=""> 
                        <h3 class="serv-title" style="margin-top: 10px;">CULTE DOMINICAL</h3>
                        <p class="serv-desc">DES MOMENTS D'ADORATION <br> ET LOUANGE</p>
                        <div style="display: flex; justify-content: space-between; margin-top: auto;">
                            <p class="serv-desc" style="text-align: left; font-size: 20px;"><span style="color : #000080;">Jour: </span>Dimanche</p>
                            <p class="serv-desc" style="text-align: right; font-size: 20px;"><span style="color : #000080;">Heure: </span>09H30 à 12h30</p>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="serv">
                        <!-- <i class="icon fa fa-users"></i>  -->
                         <img src="images/gen.jpg" alt=""> 
                        <h3 class="serv-title" style="margin-top: 10px;">NEW GENERATION</h3>
                        <p class="serv-desc"> REUNION DES JEUNES</p>
                        <div style="display: flex; justify-content: space-between; margin-top: auto;">
                            <p class="serv-desc" style="text-align: left; font-size: 20px;"><span style="color : #000080;">Jour: </span>Samedi</p>
                            <p class="serv-desc" style="text-align: right; font-size: 20px;"><span style="color : #000080;">Heure: </span>16H00 à 18h00</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-xs-12">
                    <div class="serv">
                        <!-- <i class="icon fa fa-child"></i>  -->
                         <img src="images/ecod.jpg" alt=""> 
                        <h3 class="serv-title" style="margin-top: 10px;">ECODIM</h3>
                        <p class="serv-desc">REUNION DES PETITS ANGES</p>
                        <div style="display: flex; justify-content: space-between; margin-top: auto;">
                            <p class="serv-desc" style="text-align: left; font-size: 20px;"><span style="color : #000080;">Jour: </span>Dimanche</p>
                            <p class="serv-desc" style="text-align: right; font-size: 20px;"><span style="color : #000080;">Heure: </span>09H30 à 12H00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12">
                    <div class="serv">
                        <!-- <i class="icon fa fa-child"></i>  -->
                         <img src="images/croisade.jpeg" alt=""> 
                        <h3 class="serv-title" style="margin-top: 10px;">CROISADE</h3>
                        <p class="serv-desc">MOUVEMENT DE REVEIL</p>
                        <div style="display: flex; justify-content: space-between; margin-top: auto;">
                            <p class="serv-desc" style="text-align: left; font-size: 20px;"><span style="color : #000080;">Periode: </span>Chaque annee(Mois de Juillet)</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    
    </section>


    <div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <div class="section-header">
                <h2 class="section-title" style="margin-top: 10px; line-height: 1.5">MOT DU <span style="color: #4B0082;">PASTEUR</span></h2>
                <div class="line"><span></span></div>
            </div>
            <p class="text-center">Suivez les cultes en direct ou en différé sur YouTube et Facebook</p>
            <div class="video">
                <video src="videos/deo.MOV" controls></video>
            </div>
            <button class="about-info-btn"><a href="https://youtu.be/301qAyvqwr4?si=PAJBflIWZ2KMSSjk" style="color: white;" >Voir Plus</a></button>
        </div>
    </div>
</div>

<section class="section don">
    <div class="container">
        <div class="row" style="margin-top: 60px; background-image: url('images/money.jpg');">
            <div class="col">
                <div class="serv d-flex align-items-center justify-content-center" style="padding: 60px;">
                    <h1 style="color: #4B0082; text-align: center; background-color: #fff;">PARTICIPER A L'OEUVRE DE DIEU</h1>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="Donation.php" class="btn btn-donation" style="background-color: #4B0082; color: white; padding: 20px; margin-bottom: 10px; width: 180px; transition: background-color 0.3s; font-size: 15px;">Faire un don</a>
                </div>
            </div>
            <!-- Les autres divs avec des valeurs similaires -->
        </div>
    </div>
</section>

    <section class="section histoire">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title" style="margin-top: 10px; line-height: 1.5">PETITE <span style="color: #4B0082;">HISTOIRE</span></h2>
            <div class="line2"><span></span></div>
            <p>De l'église et du leader</p>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <h4 style="color: #000080; margin-top: 10px;">De l'église</h4>
                <p>L'église la Garnison des Assoiffés du Christ (GAC en sigle) est née précisément le 06 MARS 2022 par la recommandation du Seigneur à son serviteur JHOVANI TSHIMBALANGA MUTOMBO, Pasteur qui en est donc le visionnaire.</p>
                <h4 style="color: #000080;">Du leader</h4>
                <p>Le frère JHOVANI TSHIMBALANGA MUTOMBO est notre responsable devant Dieu et notre représentant légal devant l'État. Appelé à prêcher la révélation de l'Amour de Dieu par son Fils Jésus-Christ, la place fondamentale de la sanctification dans le royaume de Dieu et à démontrer la puissance de Dieu par des signes, prodiges et miracles.</p>
                <p>BIEN AIMÉ(E) DANS LE SEIGNEUR</p>
                <p>La rencontre personnelle que nous faisons avec Christ est une expérience qui nous donne accès à une vie : la vie éternelle en Jésus-Christ.</p>
            </div>
            <div class="col-12 col-md-6">
    <div class="about-img" style="position: relative; margin-left: 15px;">
        <!-- <img src="images/pst.jpg" alt="" style="max-width: 30%; transform: rotate(-6deg); margin-left: 20px;">
        <img src="images/mariage.jpeg" alt="" style="max-width: 40%; transform: rotate(12deg); margin-left: 20px;">
        <img src="images/col.jpg" alt="" style="max-width: 45%; transform: rotate(-6deg); margin-left: 20px;" >
        <img src="images/bapteme.jpeg" alt="" style="max-width: 45%; transform: rotate(13deg);"> -->
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="images/joie.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="images/mariage.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/col.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/bapteme.jpeg" class="d-block w-100" alt="...">
    </div>c
    <div class="carousel-item">
      <img src="images/li.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
</div>
        </div>
    </div>

<section class="section Temoignanges" style="background-color: #fff;">
<div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-header">
                    <h2 class="section-title" style="margin-top: 10px; line-height: 1.5;">TEMOIGNAGES</h2>
                    <div class="line" style="margin-bottom: 20px;"><span></span></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial">
                    <p class="testimonial-author">Asnath Ntumba</p>
                    <div class="rating">
                        <i class="icon fas fa-star"></i>
                        <i class="icon fas fa-star"></i>
                        <i class="icon fas fa-star"></i>
                        <i class="icon fas fa-star"></i>
                        <i class="icon fas fa-star"></i>
                    </div>
                    <hr style="color: gold;">
                    <p class="testimonial-text">L'église GAC est une véritable bénédiction dans ma vie. Elle a joué un rôle essentiel dans le renforcement de ma spiritualité et m'a enseigné comment vivre selon les principes de Dieu. Au sein de cette communauté, j'ai trouvé un soutien et une inspiration qui ont contribué à ma croissance personnelle et à mon cheminement spirituel. </p>
                    
                </div>
            </div>

            <div class="col-md-4">
                <div class="testimonial">
                    <p class="testimonial-author">Mardochee </p>
                    <div class="rating">
                        <i class="icon fas fa-star"></i>
                        <i class="icon fas fa-star"></i>
                        <i class="icon fas fa-star"></i>
                        <i class="icon fas fa-star"></i>
                        <i class="icon fas fa-star"></i>
                    </div>
                    <hr style="color: gold;">
                    <p class="testimonial-text">J’avais un problème d’estime de soi, cela m’a posé un problème de choisir une option 
Mais lorsque je suis venue à l’église Gac, à travers les enseignements j’ai pu avoir de l’estime de soi. <br> <br> <br> <br> <br></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="testimonial">
                <p class="testimonial-author">Lucie Mujinga</p>
                <div class="rating">
                        <i class="icon fas fa-star"></i>
                        <i class="icon fas fa-star"></i>
                        <i class="icon fas fa-star"></i>
                        <i class="icon fas fa-star"></i>
                        <i class="icon fas fa-star"></i>
                    </div> 
                    <hr style="color: gold;"> 
                      <p class="testimonial-text">Vestibulum volutpat, lectus sed posuere tempor, nisi arcu consequat nisl, ut interdum est lacus vitae justo. Ut aliquet tellus eget orci aliquam, id volutpat leo tincidunt.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section new">
    <div class="container" style="background-color: #f7f7f7;">
        <div class="row">
            <div class="col-lg-6" style="color: #4B0082; padding: 20px;">
                <h2>Nouveau ici?  <i class="fas fa-hand-point-right"></i></h2>

            </div>
            <div class="col-lg-6" style="text-align: right;">
                <a href="https://form.jotform.com/240432474694561" class="btn btn-donation" style="border: 1px solid #4B0082; color: #4B0082; margin-top: 25px">S'inscrire</a>
            </div>
        </div>
    </div>
</section>

    
    <?php include("footer/footer.php") ?>
    

         <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js"></script>

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

            <script>
         function isElementInViewport(element) {
            var rect = element.getBoundingClientRect();
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                rect.right <= (window.innerWidth || document.documentElement.clientWidth)
            );
        }
    
        function animateOnScroll() {
            var aboutSection = document.querySelector('.about');
            var aboutInfo = document.querySelector('.about-info');
            var aboutImg = document.querySelector('.about-img');
    
            if (isElementInViewport(aboutSection)) {
                aboutInfo.classList.add('animate-left');
                aboutImg.classList.add('animate-right');
            }
        }
    
        window.addEventListener('scroll', animateOnScroll);

    </script> 

     <script>
        function animateOnScroll(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate-visible');
        } else {
            entry.target.classList.remove('animate-visible');
        }
    });
}

var aboutInfo = document.querySelector('.about-info');
var aboutImg = document.querySelector('.about-img');

var options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.5
};

var observer = new IntersectionObserver(animateOnScroll, options);

observer.observe(aboutInfo);
observer.observe(aboutImg);
    </script>

    <script>
        function animateOnScroll(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate-visible');
        } else {
            entry.target.classList.remove('animate-visible');
        }
    });
}

var homeTitle = document.querySelector('.home-title');

var options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.5
};

var observer = new IntersectionObserver(animateOnScroll, options);

observer.observe(homeTitle);
    </script> 

    <script>
        function animateOnScroll(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate-visible');
        } else {
            entry.target.classList.remove('animate-visible');
        }
    });
}

var homeTitle = document.querySelector('.home-title');
var donateButton = document.querySelector('#donate-button');

var options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.5
};

var observer = new IntersectionObserver(animateOnScroll, options);

observer.observe(homeTitle);
observer.observe(donateButton);
    </script>   
    
    


    
</body>
</html>