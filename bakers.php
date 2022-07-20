<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rare Cakes</title>
        <link href="Stylesheets/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="bakebg">
        <figure>
            <!-- Header section including the nav bar -->
            <section>
            <div class="translogo">
                <img src="Images/Logo/Screen_Shot_2022-07-19_at_10.42.59_AM-removebg-preview.png" class="logo" alt="logo">
            </div>
            <h1> 
                <?php
                    $timezone = "America/New_York";
                    date_default_timezone_set($timezone);
                    $hour= date("H");
                    if ($hour<12 && $hour>=5)
                        echo "Good Morning, Do you think Pancakes count as cake?";
                    else if ($hour>=12 && $hour<17)
                        echo "Good Afternoon, Hope you saved room for dessert!!";
                    else if ($hour>=17 && $hour<=20)
                        echo "Good Evening,";
                    else
                        echo "Good Night, don't let the bedbugs bite your cake!!";
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
                        <a href="shop.php">
                            About Us
                        </a>
                    </u>
                </nav>
            </section>

            <section>
            <!-- The meat and Potatoes of the page -->
                <div class="homepg">
            
                    <br>
                    <br>
                    <div class="transbkgrnd">
                        <p>
                            In all seriousness the cake industry has seen extreme innovation over time Lorem 
                            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua. Sed vulputate odio ut enim blandit 
                            volutpat maecenas volutpat. Et malesuada fames ac turpis egestas. Ultricies 
                            integer quis auctor elit sed vulputate mi. Sit amet nulla facilisi morbi tempus 
                            iaculis urna id.
                        </p>
                    </div>
                </div>
            </section>    
        </figure>

        
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