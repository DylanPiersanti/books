<?php
$title = $book['title'];
ob_start();
?>

<div class="container mt-5">

    <div class="jumbotron text-center hoverable p-4">
        <div class="row">
            <div class="col-md-4 offset-md-1 mx-3 my-3">

                <div class="view overlay">
                    <img id="jumboImg" src="<?php echo $book['image'] ?>" class="img-fluid" alt="Sample image for first version of blog listing">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

            </div>

            <div class="col-md-7 text-md-left ml-3 mt-3">

                <a href="#!" class="green-text">
                    <h6 class="h6 pb-1"><i class="fas fa-desktop pr-1"></i> Work</h6>
                </a>

                <h4 id="jBookTitle" class="h4 mb-4"><?php echo $book['title'] ?></h4>

                <p class="font-weight-normal">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque, totam
                    rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                    dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
                <p class="font-weight-normal">by <a><strong>Carine Fox</strong></a>, 19/08/2016</p>

                <a class="btn btn-success">Read more</a>

            </div>
        </div>
    </div>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                Ouvrages de
                <?php

                    if ($book['author'] == '') {
                        echo '(auteur inconnu)';
                    } else {
                        echo $book['author'];
                    }

                ?>

            </li>
        </ol>
    </nav>

    <div id="authors" class="row mb-5">
        <?php
        foreach ($booksAuthor as $book) {
            if (file_exists($book['image'])) {
                $bookImage = $book['image'];
                $noCover = '';
            } else {
                $bookImage = 'public/images/books/default.jpg';
                $noCover = 'Couverture inconnue';
            }

            ?>
            <div class="col-sm-3">
                <div class="card">
                    <img src="<?php echo $bookImage ?>" class="card-img-top" alt="...">
                    <b style="text-align:center;"><?php echo $noCover ?></b>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $book['title'] ?></h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary discoverButton">Découvrir</a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

</div>

<script>

</script>

<?php
$content = ob_get_clean();
require('public/index.php');
?>