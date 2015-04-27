<!DOCTYPE html>
<html lang="en">
<?php include("head.php"); ?>



<body>

<?php include("nav.php"); ?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('theme travail.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Etudes</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('theme decouverte.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Découvertes</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('theme sport.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Sports</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                   Bienvenue sur le site de Notre Dame de Sion
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Accueillir</h4>
                    </div>
                    <div class="panel-body">
                        <p>Tous les élèves, toutes les familles et tous les éducateurs dans leur tradition culturelle et religieuse et affirmer la richesse et l'estime des différences.</p>    
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Accompagner</h4>
                    </div>
                    <div class="panel-body">
                        <p>En affirmant l'importance du passé de l'élève, du présent vécu à l'école et aussi du projet qu'il construit pour son avenir avec ses éducateurs.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Approfondir</h4>
                    </div>
                    <div class="panel-body">
                        <p>En donnant accès à l'élève à la diversité humaine, spirituelle, sociale et culturelle du monde d'aujourd'hui et en l'ouvrant au questionnement.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Photos de l'établissement</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" src="imgbatGouzien300.jpg" alt="">
                
            </div>
            <div class="col-md-4 col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" src="imgLyceeProtec300.jpg" alt="">
              
            </div>
            <div class="col-md-4 col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" src="imgbatRatisbonne300.jpg" alt="">
                
            </div>
            <div class="col-md-4 col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" src="imBatCentral300.jpg" alt="">
                
            </div>
            <div class="col-md-4 col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" src="imgBatAnneFrank300.jpg" alt="">
              
            </div>
           <div class="col-md-4 col-sm-6">
                    <img class="img-responsive img-portfolio img-hover" src="ImgParcPingPong300.jpg" alt="">
                
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>

        <hr>

       

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
