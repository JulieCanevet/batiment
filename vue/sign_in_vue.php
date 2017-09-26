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
<section class="row col-md-8 col-md-offset-2 registeration">
    
            <h3 class="headerSign">Votre profile</h3>
                    
            <form class="col-md-10" action="sign_in.php" method="post" enctype="multipart/form-data">

                    <input class="form-control" type="text" name="name" placeholder="Votre nom">

                    <input class="form-control" type="text" name="first_name" placeholder="Votre prénom">

                    <input class="form-control" type="text" name="age" placeholder="Votre âge">

                    <input class="form-control" type="text" name="email" placeholder="Votre adresse mail">

                    <input class="form-control" type="password" name="pass" placeholder="Mot de passe">

             <button type="submit" class="signbuttons btn btn-primary">s'inscrire</button>

            </form>
    </section>
    </body>
</html>