<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>

    <style>
    
        #collectable-bg {
           background-color: #b5e4b3;
            border-radius: 25px;
            margin-top: 100px;
            width: 20%;
            padding: 50px;
            text-align: center;
        }

        #product { /*selects the HTML element with id=product*/
            display: flex; /*Places the two product containers next to eachother */
            align-items: center; /*vertically centres the image and information*/
            gap: 40px; /*adds 40 pixels of spaces between them*/

            background-color: #fff2db;
            padding: 50px; /*makes space inside the card*/
            border-radius: 25px; /*makes the corners rounded*/
            margin: 30px; /*creates the space outside the card*/
        }
    
        #product-image img {
            flex: 0, 0, 40%; /*tells flexbox that the image container should take up 40% of the available space.*/

            width: 100%; /*makes the image fill whatever space is left*/
            max-width: none; 
            height: 500px; /*makes the image area 500 pixels tall*/
            object-fit: contain; /*makes sure the entire image stays visible without stretching or distorting it*/
            border-radius: 15px; 
            display: block; /*removes the little inline-image spacing underneath it*/
        }
        
        #product-info {
            flex: 1; /*Tells the information container to take up all the remaining available space*/
            margin-top: -100px;
            color: #744a00;
            font-size: 30px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
 
        /* Product pricing info*/
        #product-price {
            border-radius: 25px;
            font-size: 25px;
            width: 150px;
            align-items: center;
            color: #d88900;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /*about product*/

        #product-description {
            font-size: 20px;
            font-family: 'Times New Roman', Times, serif;
            width: 650px;
        }

        /*collectable sign*/
        #collectable {
            font-size: 18px;
            color: #08b300;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
          
      
        }

    </style>

</head>

<!-- Background Color-->
<body style="background-color: #ff8c07">
  
    <a href="index.html">&larr; Terug naar alle Nendoroids</a>
    
    <?php include "includes/header.php"; ?>
        <h1>NendoroidSpot</h1> <!-- header -->

<h2>Bestellen: Ichigo Nendoroid</h2>

<!-- Formulier -->
<form class="formulier">

    <div class="veld">
        <label for="voornaam">Voornaam</label>
        <input type="text" id="voornaam" name="voornaam" placeholder="Bijvoorbeeld: Sanne" required> <!-- required betekent dit veld is verplicht en placeholder is grijze voorbeeldtekst in het lege veld-->
    </div>

    <div class="veld">
        <label for="achternaam">Achternaam</label>
        <input type="text" id="achternaam" name="achternaam" required>
    </div>

    <!-- E-mailveld en Aantal -->
    <div class="veld">
        <label for="email">E-mailadres</label>
        <input type="email" id="email" .name="email" required>
    </div>

    <div class="veld">
        <label for="aantal">Aantal</label>
        <input type="number" id="aantal" name="aantal" min="1" max="10" value="1" required>
    </div>

    <!-- Een keuze uit een lijst -->
    <div class="veld">
        <label for="maat">Maat</label>
        <select id="maat" name="maat">
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            <option value="43">43</option>
            <option value="44">44</option>
        </select>
    </div>


    <!-- Vinkje en verzendknop -->
    <div class="veld">
        <input type="checkbox" id="voorwaarden" name="voorwaarden" required>
        <label for="voorwaarden">Ik ga akkoord met de voorwaarden</label>
    </div>

    <input type="submit" value="Bestelling plaatsen" class="knop">

    <div class="veld vinkje"></div>
</form>


</body>
</html>