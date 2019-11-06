<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <title>Mybooks - <?php echo $title ?></title>

    <link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/style/css/style.css">
    <link rel="stylesheet" href="public/assets/style/css/all.min.css">

</head>

<body>

    <!-- Contenu présent sur toutes les pages -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand fas fa-book-reader" href="#"> myBooks.fr</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Les livres</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Lien2
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">lienA</a>
                        <a class="dropdown-item" href="#">lienB</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">lienC</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" metho="get" action="?action=books">
                <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
            </form>
        </div>
    </nav>

    <?php echo $content ?>
    <!-- contenu dynamique -->

    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
        <div class="container text-center">
            <small>Copyright &copy; myBooks.fr</small>
        </div>
    </footer>

    <script src="public/assets/jquery/jquery.min.js"></script>
    <script src="public/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('.titleHeader').fadeIn(20000).removeClass('hidden');
            }, 5000);
        });
    </script>
</body>

</html>