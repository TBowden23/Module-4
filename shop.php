<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Rare Cakes</title>
        <link href="Stylesheets/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body class="histbg">
        <figure>
        <img src="Images/Logo/Screen_Shot_2022-07-11_at_1.30.58_PM-removebg-preview.png" class="logo" alt="logo">
        <h1> 
            This is a site celebrating rare cakes
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
            <div class="transbkgrnd">
            <p>
                <form>
                    <label for="fname">First name:</label><br>
                    <input type="text" id="fname" name="fname"><br>
                    <label for="lname">Last name:</label><br>
                    <input type="text" id="lname" name="lname">
                </form>
                <form>
                <p>Choose your favorite Cake/Cupcake:</p>

                <form>
                    <input type="radio" id="html" name="fav_language" value="HTML">
                    <label for="html">20 Layer Chocolate Peanut Butter Cake</label><br>
                    <input type="radio" id="css" name="fav_language" value="CSS">
                    <label for="css">Ginger Glazed Lemon Bundt</label><br>
                    <input type="radio" id="javacript" name="fav_language" value="JavaScript">
                    <label for="javascript">Rich Chocolate Peanut Butter Cake</label>
                    <input type="radio" id="htm" name="fav_language" value="HTML">
                    <label for="html">Mama's Spice Cake</label><br>
                    <input type="radio" id="cs" name="fav_language" value="CSS">
                    <label for="css">Autumn Apple Crumb Cupcakes</label><br>
                    <input type="radio" id="jaascript" name="fav_language" value="JavaScript">
                    <label for="javascript">Strawberry Lemon-Lime Cupcakes</label>
                    <input type="radio" id="ss" name="fav_language" value="CSS">
                    <label for="css">Strawberry Cream Cheese Cupcakes</label><br>
                    <input type="radio" id="avascript" name="fav_language" value="JavaScript">
                    <label for="javascript">Bailey's Irish Cream Coffe Cupcakes</label>
                    
                </form>
                </form>
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