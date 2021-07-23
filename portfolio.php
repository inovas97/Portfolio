<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/lightbox.min.css"/>
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <title>Portfolio</title>
</head>
<body>
<section>
    <nav class="menu_nav">
         <div class="main_menu">
            <ul class="menu_list">
                <li class="menu_item"><a href="#">Home</a></li>
                <li class="menu_item"><a href="#portfolio_position">Portfolio</a></li>
                <li class="menu_item"><a href="#contact_position">Contact</a></li>
            </ul>
         </div>
    </nav>

    <div class="home">
        <div class="home_list">
            <title id="home_position">Home</title>
            
        </div>
    </div>
    
     <div class="photo_list">
        <div class="row">
            <div id="column_title" class="column">
                 <title id="portfolio_position">Portfolio</title>
            </div>
            <?php
                $directory = "images";
                $images =  scandir($directory);
                foreach ($images as $image){
                    if ($image != "." && $image != ".."){
                        echo
                        "<div class='column'>
                            <a href='images/$image' data-lightbox='mygallery'><img  class='photo' src='images/$image'></a>
                        </div>";
                    } 
                }
            ?>
        </div>
    </div>
    
<?php
	if (isset($_POST['submit'], $_POST['name'],$_POST['email'],$_POST['message'])){
        $name = $_POST['name'];
        $eimailFrom = $_POST['email'];
        $message = $_POST['message'];
        $subject = "message from webpage";
        $eimailTo = "novasgiannis97@gmail.com";
        $headers = "From: ".$eimailFrom;
        $txt = "You have received an email from: ".$eimailFrom.".\n\n"."Message: \n\n".$message;
        if(mail($eimailTo, $subject, $txt, $headers)){
            echo '<script>alert("Your e-mail send succesfully!")</script>';
        }
        else{
            echo '<script>alert("Can not send your e-mail")</script>';
        }
        header("Location: portfolio.php"); 
    } 
?>

    <div class="contact">
        <div class="contact_list">
        <title id="contact_position">Contact</title>
        <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod
            placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non
            congue ullam corper. Praesent tincidunt sed tellus.</p>

        <form method="POST" action="contact-form-handler.php">
            <div class="forms_fields">
                <input class="input_fields" placeholder="Name" type="text" required="" name="name">
            </div>
            <div class="forms_fields">
                <input class="input_fields" placeholder="Email" type="text" required="" name="email">
            </div>
            <div class="forms_fields">
                <input class="input_fields" placeholder="Message" required="" name="message">
            </div>
            <div class="forms_fields">
                <button type="submit" class="submit_button" name="submit">Send</button>
            </div>
        </form>
        </div>

    </div>

</section>
</body>
</html>