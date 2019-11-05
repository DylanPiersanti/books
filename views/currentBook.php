<?php
$title = $book['title'];
ob_start();
?>

<?php echo $book['title'] ?>

<div class="container">

    <div class="jumbotron text-center hoverable p-4">
        <div class="row">
            <div class="col-md-4 offset-md-1 mx-3 my-3">

                <div class="view overlay">
                    <img src="<?php echo $book['image'] ?>" class="img-fluid" alt="Sample image for first version of blog listing">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

            </div>

            <div class="col-md-7 text-md-left ml-3 mt-3">

                <a href="#!" class="green-text">
                    <h6 class="h6 pb-1"><i class="fas fa-desktop pr-1"></i> Work</h6>
                </a>

                <h4 class="h4 mb-4"><?php echo $book['title'] ?></h4>

                <p class="font-weight-normal">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque, totam
                    rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                    dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
                <p class="font-weight-normal">by <a><strong>Carine Fox</strong></a>, 19/08/2016</p>

                <a class="btn btn-success">Read more</a>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Titre</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary discoverButton">Découvrir</a>
                </div>
            </div>
        </div>
    </div>


</div>

<br /><br />

<?php
$content = ob_get_clean();
require('public/index.php');
?>