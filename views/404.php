<?php header('refresh:5; ?action=home'); 
?>
<?php $title = 'Page not found'; ?>
<?php ob_start(); ?>

<!-- 404 Error Content -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>Oops!</h1>
                <h2>404 Not Found</h2> <br/>
                <div class="error-details">
                    Désolé, une erreur est survenue. Vous allez être rediriger dans <b class="timer">10s</b>. <br/>
                    Si se n'est pas le cas, cliquez sur le bouton "Accueil".
                </div> <br/>
                <div class="error-actions">
                    <a href="?action=home" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                        Vers l'accueil</a><a href="#" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contact Support </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('public/index.php'); ?>