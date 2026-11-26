<?php
$pagename = basename($_SERVER["REQUEST_URI"], '.php');
$bodyid = "";

if ($pagename == "detail") {
    $bodyid = "detailbody";
} else {
  $bodyid = "";
}

$shopname = "Nendoroidspot";
$aantalNendoroids = 6;
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $pagename; ?></title>
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body id = "<?php echo $bodyid; ?>">
        
        <div id="container">
            <div id="header"><h1>NendoroidSpot</h1>

            <ul id="menu">
                <li><a href="index.html">Producten</a></li>
                <li><a href="#">Over ons</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            </div>


            <div id="content">
