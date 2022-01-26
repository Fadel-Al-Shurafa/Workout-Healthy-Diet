
<!DOCTYPE html>
<html>
    <head>
    <title> workout || Cantact Me </title>
        <link rel="stylesheet" text="text/css" href="./Contact-me-style.css">
        <link rel="stylesheet" text="text/css" href="queries.css">
        <link rel="stylesheet" text="text/css" href="../queries.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" 
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    </head>




    <body>
        
            <header class="header-gym">
                <div class="navbar" >
                    <h1 class="logo" >
                        <i class="fas fa-heartbeat fa-2x"></i>
                        <a href="#"> <em> Workout </em> </a>
                    </h1>
                    <a href="../index.php.#home"><i class="fas fa-home fa-3x"></i></a>
                </div>
            </header>

            <div class="view-height">
                <div class="echo-style">

                    <?php

                        $message_sent = false;
                        if(isset($_POST['send'])){

                            $userName = $_POST['name'];
                            $userEmail = $_POST['email'];
                            $messageSubject = $_POST['subject'];
                            $message = $_POST['message'];

                            $to = "fadeluhb@gmail.com";
                            $body = "";

                            $body .= "from: ".$userName. "\r\n";
                            $body .= "Email: ".$userEmail. "\r\n";
                            $body .= "Message: ".$message. "\r\n";
                            
                            if(mail($to,$messageSubject,$body)){
                                echo " Email sent successfully ";

                                $message_sent = true;

                            }else {
                                echo "sorry, failed while sennding mail!";
                            }
                    
                        }

                    ?>
                        
                </div>

                <?php
                if($message_sent):
                ?>

                    <a href="../index.php.#home"><i class="fas fa-home fa-3x  back-home "></i></a>
                    
                <?php 
                else:
                ?>

                <main id="Contact-us-sign">
                    <header class="sgin-header">
                        <h1><span> Contact </span>Me</h1>
                        <h3> Pless fill the form below to Contact Me </h3>
                    </header>

                    <form id="hide-form" class="main-form" action="<?php echo $_SERVER['PHP_SELF']  ?>" method="POST" autocomplete="off">
                        <div class="group-form">
                            <label for="name"> Your Name </label>
                            <input type="text" class="name" id="name" name="name" placeholder="Fadel" maxlength="0" required>
                        </div>
                        <div class="group-form">
                            <label for="email"> Your Email </label>
                            <input <?php  $invalid_class_name ?? "" ?> type="email" class="email" id="email" name="email" maxlength="0" placeholder="XXXXX@gmail.com" required>
                        </div>
                        <div class="group-form">
                            <label for="subject"> Subject </label>
                            <input type="text" class="subject" id="subject" name="subject" placeholder="Your Subject" maxlength="0" required>
                        </div>
                        <div class="group-form">
                            <textarea id="message" name="message" cols="35" rows="4" maxlength="0" placeholder="Sorry it's just Static Website"></textarea>
                        </div>
                        <div class="buttom-group">
                            <input type="submit" name="send" value="Send" class="btn">
                        </div>
                        
                    </form>
                    
                </main>
                
                
            
            

                <?php
                endif;
                ?>

        </div> 

        <div class="clear-contant"></div>
    </body>
    <footer class="footer-main">
            <div class="footer-nav">
                
                <nav>
                    <ul class="ul-nav navbar-link">
                        <li><a href="../index.php.#home"> Home </a></li>
                        <li><a href="../index.php.#about"> About </a></li>
                        <li><a href="../cantact-as/contact-me.php"> Contact Me </a></li>
                        
                    </ul>
                </nav>
                
                <div class="footer-icons">
                    <i class="fab fa-facebook-f fa-2x icons-footer"></i>
                    <i class="fab fa-instagram fa-2x icons-footer"></i>
                    <i class="fab fa-twitter fa-2x icons-footer"></i>
                    <i class="fab fa-youtube fa-2x icons-footer"></i>
                </div>  
            </div>
            <p style="color: #fff;">@C by Fadel Alshurafa</p>
        </footer>
               