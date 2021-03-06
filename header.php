<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>portfolio</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <div id="content"></div>
        <div id="random-wall">
            <div class="overlay"></div>
        </div>       

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <script src="appjs/jquery.random-wall.min.js"></script>
        <script>
            (function($){
                $(function() {
                    $("#random-wall").randomwall({
                        delay_time: 5000,
                        /* set random image pool manually (optional)
        image_list: ['http://i.imgur.com/CiAvVQL.jpg',
                     'http://i.imgur.com/qC5Nprs.jpg',
                     'http://i.imgur.com/fckzvp1.jpg',
                     'http://i.imgur.com/od4QZ8C.jpg'],
        */

                        image_list: ['img/Backgrounds.jpg',
                                     'img/Background4.jpg', 
                                     'img/Backgrounds5.png',
                                     'img/Backgrounds6.png',
                                     'img/Backgrounds7.jpg',
                                    ],
                    });
                });
            }(jQuery));
        </script>

        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <a class="navbar-brand text-light" href="http://arno.nepsod.fr/portfolio/index.php">
                            <img src="img/portfolio.png" width="30" height="30" class="d-inline-block align-top" alt="">
                            Portfolio Arno
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="http://arno.nepsod.fr/portfolio/projets.php">Projets</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>