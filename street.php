<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/lightbox.min.css"/>
    <link rel="stylesheet" href="css/styles.css"/>
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Portfolio</title>
</head>
<body>
<section>
    <nav class="main_menu">
        <ul class="name_list">
            <li><h4 class="logo">Argyro</h2></li>
            <li><h4 class="logo last_name">Anastasiou</h3></li>
        </ul>
        <ul class="menu_list" id="menu_list">
            <li class="menu_item"><a href="home.php">Portfolio</a></li>
            <li class="menu_item"><a href="street.php">Street</a></li>
            <li class="menu_item"><a href="travel.php">Travel</a></li>
            <li class="menu_item"><a href="portait.php">Portait</a></li>
            <li class="menu_item"><a href="about.php">About</a></li>
            <li class="menu_item"><a href="contact.php">Contact</a></li>
        </ul>
        <ul class="social_list">
            <li class="social_item"><a href="https://www.facebook.com/arguro.anas" target="_blank"><img class="social_image" src="facebook.png"/></a></li>
            <li class="social_item"><a href="#"><img class="social_image" src="instagram.png"/></a></li>
        </ul>
        <div class="bars">
            <a><i class="fa fa-bars"></i></a>
        </div>
    </nav>
    
    <ul class="full_menu_list">
        <li class="menu_item"><a href="home.php">Portfolio</a></li>
        <li class="menu_item"><a href="street.php">Street</a></li>
        <li class="menu_item"><a href="travel.php">Travel</a></li>
        <li class="menu_item"><a href="portait.php">Portait</a></li>
        <li class="menu_item"><a href="about.php">About</a></li>
        <li class="menu_item"><a href="contact.php">Contact</a></li>
    </ul>
    <div class="main_page" id="home-page">
        <div class="container">
        <?php
            $directory = "street";
            $images =  scandir($directory);
            foreach ($images as $image){
                if ($image != "." && $image != ".."){
                    echo
                    "<div class='photo_item'>
                        <a href='street/$image' data-lightbox='mygallery'><img class='image' src='street/$image'></a>
                    </div>";
                } 
            }
        ?>
        </div>
    </div>
    <script src="handler.js"></script>
</section>
</body>