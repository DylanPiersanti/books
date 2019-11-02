<?php
$title = "Accueil";
ob_start();
?>

<br /><br />

<!-- Page Content -->
<div class="container">

    <header>
        <div class="overlay"></div>
        <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
        </video>
        <div class="container h-100">
            <div class="d-flex h-100 text-center align-items-center">
                <div class="w-100 text-white">
                    <h1 class="display-3">Bienvenue</h1>
                    <p class="lead mb-0">sur myBooks.fr</p>
                </div>
            </div>
        </div>
    </header>

    <br /><br />

    <!-- Project One -->
    <div class="row">
        <div class="col-md-7">
            <a href="#">
                <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>Project One</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium veniam exercitationem expedita laborum at voluptate. Labore, voluptates totam at aut nemo deserunt rem magni pariatur quos perspiciatis atque eveniet unde.</p>
            <a class="btn btn-primary" href="#">View Project</a>
        </div>
    </div>
    <!-- /.row -->

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

<?php
$content = ob_get_clean();
require('public/index.php');
?>