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
                    <div class="tranbkgrnd">
                    <p>
                    Best Bakers:

                    <table>
                        <tr>
                            <th></th>
                            <th class="strt">Name</th>
                            <th class="strt">History</th>
                        </tr>
                    
                        <tr>
                            <td>
                            <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/KEz20oVK0-0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </td>
                            <td>
                                Paul Hollywood
                            </td>
                            <td>
                            English celebrity chef and television presenter, widely known as a judge on The Great British Bake Off since 2010. Hollywood began his career at his father's bakery as a teenager and went on to serve as head baker at a number of British and international hotels.
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <img src="Images/Bakers/images.jpeg" alt="Cakes of the week 2" class="cakes">
                            </td>
                            <td>
                                Nadiya Hussain
                            </td>
                            <td>
                                Nadiya Jamir Hussain MBE is a British television chef, author and television presenter. She rose to fame after winning the sixth series of BBC's The Great British Bake Off in 2015. 
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="Images/Bakers/1_hEOaSHUkzUC1RjGkGxLLFA.jpeg" alt="Cakes of the week 3" class="cakes">
                            </td>
                            <td>
                                Wu Pao-chun

                            </td>
                            <td>
                                Wu Pao-chun is a Taiwanese baker best known for winning the title of Master Baker in the bread category of the 2010 Bakery Masters competition held in Paris.
                            </td>

                        </tr>
                    
                        <tr>
                            <td>
                                <img src="Images/Bakers/download.jpeg" alt="Cakes of the week 4" class="cakes">
                            </td>
                            <td>
                                Nancy Silverton
                            </td>
                            <td>
                                Nancy Silverton is an American chef, baker, and author. The winner of the James Beard Foundation's Outstanding Chef Award in 2014, Silverton is recognized for her role in popularizing sourdough and artisan breads in the United States.
                            </td>
                        </tr>
                    </table>
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