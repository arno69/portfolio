<?php require('header.php'); ?>

<main class="container princi" role="main">
    <div class="row">
        <div class="col-12 p-0">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="first-slide img-fluid" src="img/design.jpg" alt="First slide">

                    </div>
                    <div class="carousel-item">
                        <img class="second-slide img-fluid" src="img/html.jpg" alt="Second slide">

                    </div>
                    <div class="carousel-item">
                        <img class="third-slide img-fluid" src="img/css3.jpg" alt="Third slide">

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
    </div>

    <!-- fin du carrousel
================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- rond avec les images -->
        <div class="row">
            <div class="col-lg-3 mt-5 p-0 pl-4 text-center"><!-- 1rond -->
                <img class="rounded-circle" src="img/blog.png" alt="Generic placeholder image" width="140" height="140">
                <h2>Blog</h2>
                <p class="p-3">Projet de blog realisé pendant la formation que j'ai suivi.</p>
                <p><a class="btn btn-primary" href="http://arno.nepsod.fr/blogPerso/index.php" role="button">Afficher &raquo;</a></p>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-3 mt-5 p-0 text-center"><!-- 2rond -->
                <img class="rounded-circle" src="img/index.png" alt="Generic placeholder image" width="140" height="140">
                <h2>BlueEasy</h2>
                <p class="p-3">Projet réalisé en debut de la formation basé sur le design.</p>
                <p><a class="btn btn-primary" href="http://arno.nepsod.fr/BlueEasy/site/index.html" role="button">Afficher &raquo;</a></p>
            </div><!-- /.col-lg-4 -->

            <div class="col-lg-3 mt-5 p-0 text-center"><!-- 3rond -->
                <img class="rounded-circle" src="img/morpion.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Morpion</h2>
                <p class="p-3">Projet jeux du morpion pour l'apprentissage du javascript.</p>
                <p><a class="btn btn-primary" href="http://arno.nepsod.fr/morpion/index.html" role="button">Afficher &raquo;</a></p>
            </div>

            <div class="col-lg-3 mt-5 p-0 text-center"><!-- 4rond -->
                <img class="rounded-circle" src="img/transfert.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Transfert de fichier</h2>
                <p class="p-3">Page web de transfert de fichier, c'est projet réalisé en groupe.</p>
                <p><a class="btn btn-primary" href="http://arno.nepsod.fr/wetransfer/index.php" role="button">Afficher &raquo;</a></p>
            </div><!-- /.col-lg-4 --><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-12 p-0 text-center pt-5"><!-- 5rond -->
                <img class="rounded-circle" src="img/plus.png" alt="Generic placeholder image" width="140" height="140">
                <h2>Autre projets réalisé</h2>
                <p class="pt-4"><a class="btn btn-primary" href="http://arno.nepsod.fr/portfolio/projets.php" role="button">Afficher &raquo;</a></p>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-6 mt-5 p-0 pl-4 text-center"><!-- rond CV -->
            <img class="rounded-circle" src="img/cv.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Curriculum Vitae</h2>
            <p class="p-3">Vous trouverez ici mon CV.</p>
            <p><a class="btn btn-primary" href="img/arno%20zerathe%20cv%201.pdf" role="button">Afficher &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-6 mt-5 p-0 text-center"><!-- rond CONTACT -->
            <img class="rounded-circle" src="img/mail.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Contact</h2>
            <p class="p-3">Formulaire de contact pour pouvoir me joindre.</p>
            <p><a class="btn btn-primary" href="http://arno.nepsod.fr/portfolio/contact.php" role="button">Afficher &raquo;</a></p>
        </div><!-- /.col-lg-4 -->

    </div><!-- /.row -->
    <?php require('footer.php'); ?>