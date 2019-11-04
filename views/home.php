<?php
$title = "Accueil";
ob_start();
?>

<br /><br />

<!-- Page Content -->
<div class="container">

    <header>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted">
            <source src="public/assets/video/background.mp4" type="video/mp4">
        </video>
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="display-3 hidden titleHeader">Bienvenue</h1>
                    <p class="lead mb-0 hidden titleHeader">sur myBooks.fr</p>
                </div>
            </div>
        </div>
    </header>

    <br /><br />



    <!-- Last book -->
    <div class="row">
        <div class="col-md-7">

            <?php
            $lastBook = end($books); // last book of Json list.
            if ($lastBook['language'] = "French") {
                $lastBook['language'] = ' Francais';
            }

            $numberA = rand(0, 99);
            $bookA = $books[$numberA];

            $numberB = rand(0, 99);
            $bookB = $books[$numberB];

            $numberC = rand(0, 99);
            $bookC = $books[$numberC];

            ?>

            <a href="#">
                <img data-toggle="modal" data-target="#exampleModal" class="lastBookImg img-fluid mb-3 mb-md-0 btn" src="<?php echo $lastBook['imageLink'] ?>" alt="">
            </a>
        </div>
        <div class="col-md-5 lastBookCard">
            <h2><?php echo $lastBook['title'] ?></h2>
            <h4 class="fas fa-pencil-alt"><i> <?php echo $lastBook['author'] ?></i></h4>
            <ul style="display: block;">
                <li class="fa fa-flag"><?php echo $lastBook['language'] ?></li>
                <li class="fa fa-globe"> <?php echo $lastBook['country'] ?></li>
                <li class="fas fa-calendar-alt"> <?php echo $lastBook['year'] ?></li>
                <li class="fas fa-book"> <?php echo $lastBook['pages'] . " pages" ?></li>
            </ul>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam.</p>
            <a class="btn btn-primary" href="<?php echo $lastBook['link'] ?>">Découvrir</a>
        </div>
    </div>

    <section class="pricing py-5">
        <div class="container">
            <div class="row">
                <!-- Free Tier -->
                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0 ">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center"><?php echo $bookA['title']; ?></h5>
                            <img class="randomImage" src="<?php echo $bookA['imageLink'] ?>" />
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-flag"></i></span><?php echo $bookA['language']; ?></li>
                                <li><span class="fa-li"><i class="fas fa-calendar-alt"></i></span><?php echo $bookA['year']; ?></li>
                                <li><span class="fa-li"><i class="fas fa-globe"></i></span><?php echo $bookA['country']; ?></li>
                                <li><span class="fa-li"><i class="fas fa-book"></i></span><?php echo $bookA['pages']; ?></li>
                            </ul>
                            <br /><br />
                            <a href="<?php echo $bookA['link']; ?>" class="btn btn-block btn-primary text-uppercase randomLink">Découvrir</a>
                        </div>
                    </div>
                </div>
                <!-- Plus Tier -->
                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center"><?php echo $bookB['title'] ?></h5>
                            <img class="randomImage" src="<?php echo $bookB['imageLink'] ?>" />
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-flag"></i></span><?php echo $bookB['language']; ?></li>
                                <li><span class="fa-li"><i class="fas fa-calendar-alt"></i></span><?php echo $bookB['year']; ?></li>
                                <li><span class="fa-li"><i class="fas fa-globe"></i></span><?php echo $bookB['country']; ?></li>
                                <li><span class="fa-li"><i class="fas fa-book"></i></span><?php echo $bookB['pages']; ?></li>
                            </ul>
                            <br /><br />
                            <a href="<?php echo $bookB['link']; ?>" class="btn btn-block btn-primary text-uppercase randomLink">Découvrir</a>
                        </div>
                    </div>
                </div>
                    
                <!-- Pro Tier -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center"><?php echo $bookC['title'] ?></h5>
                            <img class="randomImage" src="<?php echo $bookC['imageLink'] ?>" />
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-flag"></i></span><?php echo $bookC['language']; ?></li>
                                <li><span class="fa-li"><i class="fas fa-calendar-alt"></i></span><?php echo $bookC['year']; ?></li>
                                <li><span class="fa-li"><i class="fas fa-globe"></i></span><?php echo $bookC['country']; ?></li>
                                <li><span class="fa-li"><i class="fas fa-book"></i></span><?php echo $bookC['pages']; ?></li>
                            </ul>
                            <br /><br />
                            <a href="<?php echo $bookC['link']; ?>" class="btn btn-block btn-primary text-uppercase randomLink">Découvrir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- /.container -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo $lastBook['title'] ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="<?php echo $lastBook['imageLink'] ?>" width="100%" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<?php
$content = ob_get_clean();
require('public/index.php');
?>