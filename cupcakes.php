<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rare Cakes</title>
        <link href="Stylesheets/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="cupbg">
        <figure>
        <img src="Images/Logo/Screen_Shot_2022-07-19_at_10.42.21_AM-removebg-preview.png" class="logo" alt="logo">
        <h1> 
            <?php
                $t = date("l");
                print "Happy " . $t ."? Little Cakes Matter Too";
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

        <div class="homepg">
            
            <br><br>
            <div class="tranbkgrnd">
            <p>
                    Cupcakes of the week:

                    <table>
                        <tr>
                            <th></th>
                            <th class="strt">Cupcake name</th>
                            <th class="strt">Description of Cupcake</th>
                        </tr>
                    
                        <tr>
                            <td>
                                <img src="Images/jJJGnfR7nSxh3YZ2tdj7aT-1280-80.jpg.webp" alt="Cakes of the week 1" class="cakes">
                            </td>
                            <td>
                                Autumn Apple Crumb Cupcakes
                            </td>
                            <td>
                            The cupcake sponge is made with brown sugar and cinnamon, they're filled with spiced stewed apples, topped with sweet cinnamon buttercream, more delicious stewed apples, and filling a crunchy crumble topping!
                            </td>
                        </tr>
                    
                        <tr>
                            <td>
                                <img src="Images/NM2nj4PBYvhihUmyVZd6BJ-1280-80.jpg.webp" alt="Cakes of the week 2" class="cakes">
                            </td>
                            <td>
                                Strawberry Lemon-Lime Cupcakes
                            </td>
                            <td>
                            Perfect for summer, with a tangy lime cupcake base and sweet strawberry frosting they are sure to be loved by all. A family-friendly, non-alcoholic alternative to strawberry margarita cupcakes!
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="Images/JLhd9jjphPVHFFtgYbdepL-1280-80.jpg.webp" alt="Cakes of the week 3" class="cakes">
                            </td>
                            <td>
                                Strawberry Cream Cheese Cupcakes
                            </td>
                            <td>
                            Bursting with strawberry flavor from puree in BOTH the cake and the frosting, my Strawberry Cupcakes recipe with Strawberry Cream Cheese Frosting is your new favorite sweet treat.
                            </td>

                        </tr>
                    
                        <tr>
                            <td>
                                <img src="Images/Screen Shot 2022-07-20 at 2.15.19 PM.png" alt="Cakes of the week 4" class="cakes">
                            </td>
                            <td>
                                Bailey's Irish Cream Coffe Cupcakes
                            </td>
                            <td>
                            Baileys Irish Cream and coffee are a classic and delicious pairing, so I used both to produce an unforgettable cupcake flavor. These Baileys and coffee cupcakes are adapted from my vanilla cupcakes and are made with Baileys, strong black coffee, and a touch of espresso powder. If you enjoy the popular Irish cream liqueur, you’ll appreciate this fun dessert!
                            </td>
                        </tr>
                    </table>
                </p>
        </div>
        </div>    
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