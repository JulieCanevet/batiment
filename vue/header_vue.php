<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel = "stylesheet" href = "../font-awesome-4.7.0/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/css/bootstrap.css">
        <link rel="stylesheet" href="../css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Questrial" rel="stylesheet">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
         <section id="header">

     <nav class="navbar navbar-toggleable-md navbar-light bg-faded menu">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
        <p id="hello">Bonjour <?php echo $_SESSION['first_name']; ?> </p>

        <article class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link" href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="new_project.php"><i class="fa fa-plus" aria-hidden="true"></i> Nouveau projet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fa fa-power-off" aria-hidden="true"></i> Deconnexion</a>
                </li>
            </ul>
        </article>
    </nav>
</section>