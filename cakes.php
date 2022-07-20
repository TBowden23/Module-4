<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rare Cakes</title>
        <link href="Stylesheets/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="cakesbg">
        
        <section>
            <img src="Images/Logo/Screen_Shot_2022-07-19_at_10.42.21_AM-removebg-preview.png" class="logo" alt="logo">
            <h1 class> 
                <?php
                    $t = date("l");
                    print "Happy " . $t ."! You want to put your name on it?";
                ?>
            </h1>
        
            <nav>
                <u>
                    <a href="index.php">
                        Home
                    </a>
                    </u> 
                    <u>
                        <a href="cakes.php">
                            Cakes
                        </a>
                    </u> 
                    <u>
                        <a href="cupcakes.php">
                            Cupcakes
                        </a>
                    </u> 
                    <u>
                        <a href="bakers.php">
                            Bakers
                    </a>
                    </u> 
                    <u>
                        <a href="Shop.php">
                            About Us
                        </a>
                    </u>
                </nav>
        </section>

        <section>
            <div class="homepg">
            
                <br>
                <br>
            <div class="transbkgrnd">
            
            </div>
            <p>
                Cakes of the week:

                <img src="Images/20-layer-chocolate-peanut-butter-cake-for-6-8.608966191ab74b476e851375fd2915ed.jpg" alt="extra cake photo" class="cakes1">
                <img src="Images/Ginger-Glazed-Lemon-Bundt_EXPS_FBMZ18_229015_D05_15_4b-6.jpeg" alt="extra cake photo" class="cakes">
                <img src="Images/Rich-Chocolate-Peanut-Butter-Cake_EXPS_THCA19_57688_C02_23_6b-3.jpeg" alt="extra cake photo" class="cakes1">
                <img src="Images/Mama-s-Spice-Cake_EXPS_THD18_1840_E07_26_4b-11.jpeg" alt="extra cake photo" class="cakes">
            </p>
        
        </div>    
        <footer>
            Dat's all Folks
            <br> &copy; 
            <?php
                $copyYear = 2020; // Set your website start date
                $curYear = date('Y'); // Keeps the second year updated
                echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
            ?> Copyright Tremarica LLC
        </footer>
    </body>
</html>