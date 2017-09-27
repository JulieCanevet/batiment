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
        <link rel = "stylesheet" href = "font-awesome-4.7.0/css/font-awesome.min.css"> 
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/css/bootstrap.css">
        <link rel="stylesheet" href="../css/main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <section id="header">
            <p>Bonjour <?php echo $_SESSION['first_name'] . ' ' . $_SESSION['name']; ?> </p>
            <ul>
                <li><a href="new_project.php">Nouveau projet</a></li>
                <li><a href="index.php">Deconnexion</a></li>
            </ul>
        </section>