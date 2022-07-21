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
            <div class="cakespg">
            
                <br>
                <br>
            <div class="tranbkgrnd">
            
                <p>
                    Cakes of the week:

                    <table>
                        <tr>
                            <th></th>
                            <th class="strt">Cake name</th>
                            <th class="strt">Description of cake</th>
                        </tr>
                    
                        <tr>
                            <td>
                                <img src="Images/20-layer-chocolate-peanut-butter-cake-for-6-8.608966191ab74b476e851375fd2915ed.jpg" alt="Cakes of the week 1" class="cakes">
                            </td>
                            <td>
                                20 Layer Chocolate Peanut Butter Cake
                            </td>
                            <td>
                                Legendary chocolate peanut butter cake from Lavo NYC featuring layers of moist, chocolate devil’s food cake, sandwiched by peanut butter mascarpone, then finished with rich chocolate ganache and chocolate ribbons.
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <img src="Images/Ginger-Glazed-Lemon-Bundt_EXPS_FBMZ18_229015_D05_15_4b-6.jpeg" alt="Cakes of the week 2" class="cakes">
                            </td>
                            <td>
                                Ginger Glazed Lemon Bundt
                            </td>
                            <td>
                            Tangy ginger, tart lemon and puckery cranberries make this melt-in-your-mouth cake as crisp—and gorgeous—as autumn. —Taste of Home Test Kitchen
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="Images/Rich-Chocolate-Peanut-Butter-Cake_EXPS_THCA19_57688_C02_23_6b-3.jpeg" alt="Cakes of the week 3" class="cakes">
                            </td>
                            <td>
                                Rich Chocolate Peanut Butter Cake
                            </td>
                            <td>
                                The combination of mocha and peanut butter will satisfy every sweet tooth at your table. The garnish is a little extra work, but what are special occasions for? —Tammy Bollman, Minatare, Nebraska
                            </td>

                        </tr>
                    
                        <tr>
                            <td>
                                <img src="Images/Mama-s-Spice-Cake_EXPS_THD18_1840_E07_26_4b-11.jpeg" alt="Cakes of the week 4" class="cakes">
                            </td>
                            <td>
                                Mama's Spice Cake
                            </td>
                            <td>
                            Whenever I get a craving for a tasty old-fashioned treat, I make this cake. Great cooks in my family have been baking it for generations, and their families have been enjoying the wonderful spice flavor and rich frosting. —Nancy Duty, Jacksonville, Florida
                            </td>
                        </tr>
                    </table>
                </p>
            </div>
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