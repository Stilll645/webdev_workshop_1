<?php
include "includes/db.php";
// Haal alle producten uit de database
$producten = $pdo->query("SELECT * FROM producten")->fetchAll();
?>
<?php include "includes/header.php"; ?>


                <!-- Ichigo -->
             <?php foreach ($producten as $product) { ?>
                <div class="product">
                   <img src="images/ichigo.png<?php echo $product['Ichigo']; ?>" alt="<?php echo $product['Ichigo']; ?>">
                   <h3><?php echo $product['Ichigo Nendoroid']; ?></h3>
                   <p class="prijs">&euro; <?php echo $product['39,99']; ?></p>
                   <a href="detail.php?id=<?php echo $product['id']; ?>" class="knop">Bekijk</a>
                </div>  
                   <?php } ?> 

                <!-- <div class="product">
                    <img src="images/ichigo.png" alt="ichigo" width="400">
                    <h2>Ichigo Nendoroid</h2>
                    <p>&euro; 39,99</p>
                    <a href="detail.php"class="knop">Bekijk</a>
                </div> -->
                
                
                <!-- Toshiro -->
                <div class="product">
                   <img src="images/Toshiro.png<?php echo $product['Toshiro']; ?>" alt="<?php echo $product['naam']; ?>">
                   <h3><?php echo $product['Toshiro Nendoroid']; ?></h3>
                   <p class="prijs">&euro; <?php echo $product['34,99']; ?></p>
                   <a href="detail.php?id=<?php echo $product['id']; ?>" class="knop">Bekijk</a>
                </div> 

                <!-- <div class="product">
                    <img src="images/Toshiro.png" alt="Toshiro" width="347">
                    <h2>Toshiro Nendoroid</h2>
                    <p>&euro; 34,99</p>
                    <a href="detail1.html"class="knop">Bekijk</a>
                </div> -->
                
                
                <!-- Sebastian -->
                <div class="product">
                   <img src="images/Sebastian.png<?php echo $product['Sebastian']; ?>" alt="<?php echo $product['naam']; ?>">
                   <h3><?php echo $product['Sebastian Nendoroid']; ?></h3>
                   <p class="prijs">&euro; <?php echo $product['89,99']; ?></p>
                   <a href="detail.php?id=<?php echo $product['id']; ?>" class="knop">Bekijk</a>
                </div> 

                <!-- <div class="product">
                    <img src="images/Sebastian.png" alt="Sebastian" width="319">
                    <h2>Sebastian Nendoroid</h2>
                    <p>&euro; 89,99</p>
                    <a href="detail2.html" class="knop">Bekijk</a>                        
                </div> -->
                
                
                <!-- Ciel -->
                <div class="product">
                   <img src="images/Ciel.png<?php echo $product['Ciel']; ?>" alt="<?php echo $product['naam']; ?>">
                   <h3><?php echo $product['Ciel Nendoroid']; ?></h3>
                   <p class="prijs">&euro; <?php echo $product['69,99']; ?></p>
                   <a href="detail.php?id=<?php echo $product['id']; ?>" class="knop">Bekijk</a>
                </div> 

                <!-- <div class="product">
                    <img src="images/Ciel.png" alt="Ciel" width="347">
                    <h2>Ciel Nendoroid</h2>
                    <p>&euro; 69,99</p>
                    <a href="detail3.html"class="knop">Bekijk</a>                        
                </div> -->
                
                
                <!-- Tomoko -->
                <div class="product">
                   <img src="images/Tomoko.png<?php echo $product['Tomoko']; ?>" alt="<?php echo $product['naam']; ?>">
                   <h3><?php echo $product['Tomoko Nendoroid']; ?></h3>
                   <p class="prijs">&euro; <?php echo $product['119,99']; ?></p>
                   <a href="detail.php?id=<?php echo $product['id']; ?>" class="knop">Bekijk</a>
                </div> 

                <!-- <div class="product">
                    <img src="images/Tomoko.png" alt="Tomoko" width="320">
                    <h2>Tomoko Nendoroid</h2>
                    <p>&euro; 119,99</p>
                    <a href="detail4.html"class="knop">Bekijk</a>                        
                </div> -->
                
                
                <!-- Sonico -->
                <div class="product">
                   <img src="images/Sonico<?php echo $product['Sonico']; ?>" alt="<?php echo $product['naam']; ?>">
                   <h3><?php echo $product['Sonico Nendoroid']; ?></h3>
                   <p class="prijs">&euro; <?php echo $product['79,99']; ?></p>
                   <a href="detail.php?id=<?php echo $product['id']; ?>" class="knop">Bekijk</a>
                </div> 

                <!-- <div class="product">
                    <img src="images/Sonico.png" alt="Sonico" width="346">
                    <h2>Sonico Nendoroid</h2>
                    <p>&euro; 79,99</p>
                    <a href="detail5.html"class="knop">Bekijk</a>                        
                </div> -->
           
                <?php
                include "includes/footer.php";
                ?>