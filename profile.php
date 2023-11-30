<!DOCTYPE html>
<html>
<head>

    <?php
        include("views/favicon.php");
        
        include("modules/conexao.php");

        include("modules/meta.php");


        include("views/fonts.php");
        
        include("views/styles.php");

        include("modules/scripts.php");

    ?>

    <title>ETC - Eu Também Construo</title>

</head>

<body>

<section class="container second-gray-background height-full">

    <?php



    

    /* include("components/intro.php"); */
    include("components/profile-connections.php");

    include("components/profile-overview.php");

    include("components/navbar-profile.php");

    include("components/profile-lastjobs.php");
    
    /* include("components/app-ratings.php"); */

    /* include("components/footer.php"); */


    ?>

</section>

</body>
</html>