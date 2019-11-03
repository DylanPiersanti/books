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
                $lastBook['language'] = '<i> Francais</i>';
            }
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
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Free</h5>
                            <h6 class="card-price text-center">$0<span class="period">/month</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Single User</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>5GB Storage</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Unlimited Private Projects</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Dedicated Phone Support</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free Subdomain</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status Reports</li>
                            </ul>
                            <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
                        </div>
                    </div>
                </div>
                <!-- Plus Tier -->
                <div class="col-lg-4">
                    <div class="card mb-5 mb-lg-0">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Plus</h5>
                            <h6 class="card-price text-center">$9<span class="period">/month</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>5 Users</strong></li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>50GB Storage</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Free Subdomain</li>
                                <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status Reports</li>
                            </ul>
                            <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
                        </div>
                    </div>
                </div>
                <!-- Pro Tier -->
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title text-muted text-uppercase text-center">Pro</h5>
                            <h6 class="card-price text-center">$49<span class="period">/month</span></h6>
                            <hr>
                            <ul class="fa-ul">
                                <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited Users</strong></li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>150GB Storage</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited</strong> Free Subdomains</li>
                                <li><span class="fa-li"><i class="fas fa-check"></i></span>Monthly Status Reports</li>
                            </ul>
                            <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- /.container -->

<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
        <small>Copyright &copy; Your Website</small>
    </div>
</footer>

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
                <img src="<?php echo $lastBook['imageLink'] ?>" width="100%"/>
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