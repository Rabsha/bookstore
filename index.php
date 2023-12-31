<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    if(isset($_POST['submit']))
    {
        $name =     $_POST['name'];
        $email =    $_POST['email'];
        $phone =    $_POST['phone'];

        $mail = new PHPMailer(true);

        try {                
            $mail->isSMTP();                                            
            $mail->Host       = 'thebookcompany.org';                     
            $mail->SMTPAuth   = true;                                   
            $mail->Username   = 'contact@thebookcompany.org';                     
            $mail->Password   = 'YA2iHPOW40pM';                               
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
            $mail->Port       = 465;

            $mail->setFrom('contact@thebookcompany.org', 'Contact Details');
            $mail->addAddress('rabshasiddiqui@gmail.com', 'The Book Company');
            $mail->isHTML(true);
            $mail->Subject = 'Connect With Us';
            $mail->Body    = 'Name: '.$name.' <br> Phone Number: '.$phone.' <br> Email: '.$email;

            $mail->send();
            $success = true;
        } 
        catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<div class="wrapper">
    <div id="header">
        <div class="header-top">
            <div class="topBlackBar">
                <div class="container">
                    <div class="texttopOrder">
                        <h2>Welcome Offer: <span class="difftext">Get 70% Straight Off</span> <span class="ordertext">on your first order!</span></h2>
                    </div>
                </div>
            </div>
            <div class="main-menus">
                <div class="container">
                    <div class="mainthreemenus clearfix">
                        <div class="topmenus clearfix">
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Genre</a></li>
                                <li><a href="#">Writers</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">Blogs</a></li>
                            </ul>
                        </div>
                        <div class="mainnmenus clearfix">
                            <span style="font-size: 41px;cursor: pointer;line-height: 23px;" onclick="openNav()">&#9776;</span>
                            <div id="mySidenav" class="sidenav">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <div class="textheadmenu">Menu</div>
                                <a href="#">About</a>
                                <a href="#">Genre</a>
                                <a href="#">Writers</a>
                                <a href="#">Contact</a>
                                <a href="#">Blogs</a>
                                <div class="textheadmenu">Primary Menu</div>
                                <a href="#">Ghostwriting</a>
                                <a href="#">Hire Ghostwriters</a>
                                <a href="#">Book Publishing</a>
                                <a href="#">Book Editing</a>
                                <a href="#">Book Formatting</a>
                                <a href="#">Book Printing</a>
                                <a href="#">Book Cover Printing</a>
                                <a href="#">Author Website Design</a>
                                <a href="#">Book Marketing</a>
                                <a href="#">Others</a>
                            </div>
                        </div>
                        <div class="callactionsbtn clearfix">
                            <a href="tel:661-548-2574" class="mycallbtn mobileview"><i class="fa-solid fa-phone-volume"></i></a>
                            <a href="tel:661-548-2574" class="mycallbtn desktopview"><i class="fa-solid fa-phone-volume"></i>661-548-2574</a>
                            <a href="#" class="mybtnlivechat">Live Chat</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menutwo clearfix">
                <div class="container">
                    <div class="widemenu">
                        <ul>
                            <li><a href="#" style="padding-left:0;">Ghostwriting</a></li>
                            <li><a href="#">Hire Ghostwriters</a></li>
                            <li><a href="#">Book Publishing</a></li>
                            <li><a href="#">Book Editing</a></li>
                            <li><a href="#">Book Formatting</a></li>
                            <li><a href="#">Book Printing</a></li>
                            <li><a href="#">Book Cover Printing</a></li>
                            <li><a href="#">Author Website Design</a></li>
                            <li><a href="#">Book Marketing</a></li>
                            <li><a href="#" style="padding-right:0;">Others</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="banner">
            <div class="container">
                <div class="bannermain clearfix">
                    <div class="bannerdetails">
                        <div class="bannerheading">
                            <h1>Let Us "Tell Your Story" to the World.</h1>
                            <p>Avail <b>40% Discount</b> on all <b>book writing services.</b></p>
                        </div>
                        <form method="post">
                            <div class="bannerform">
                                <?php
                                    if(isset($success)):
                                ?>
                                <div class="alert alert-success">
                                    Thankyou for Contacting Us
                                </div>
                                <?php
                                    endif;
                                ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="topbarform">
                                            <div class="form-group">
                                                <input type="text" name="name" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="topbarform">
                                            <div class="form-group">
                                                <input type="text" name="phone" placeholder="Phone">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" name="submit">SUBMIT</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="bannerclients">
                            <img src="assets/images/certified.png" />
                        </div>
                    </div>
                    <div class="imgbook">
                        <img src="assets/images/bannerbook.png" />
                    </div>
                </div>
            </div>
            <div class="promotionicons">
                <ul>
                    <li class="rotatenow"><a href="#" class="btn-promotion" id="showPopupBtn">GET UP TO 50% OFF</a></li>
                    <li><a href="#" class="btncall"><i class="fas fa-phone-volume"></i></a></li>
                    <li><a href="#" class="btncomments"><i class="fa-regular fa-comments"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="services">
            <div class="container">
                <div class="serviceheading">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="mainheadingsize">Our Services</h1>
                            <p class="mainparasize">You have found the most capable ghost book writing service. As a book writing service provider led by dynamic professionals, we have gained the respect and loyalty of the audience.</p>
                        </div>
                    </div>
                </div>
                <div class="firstservice clearfix">
                    <div class="serviceimgbook">
                        <img src="assets/images/oneimg.png">
                    </div>
                    <div class="serviceprompt">
                        <div class="counticonservice">
                            <img class="bookiconbg" src="assets/images/open-book.png">
                            <img src="assets/images/01.png">
                        </div>
                        <h1>Nonfiction Manuscript Writing</h1>
                        <p>Nonfiction writing is not as easy as it sounds; it requires back-and-forth changes to make the book readable, enjoyable, and understandable. Our nonfiction writers can write any story assigned to them without wasting your time.</p>
                        <a href="#" class="themecolorbtn">CONSULT NOW</a>
                        <a href="#" class="blackcolorbtn">CHAT NOW</a>
                    </div>
                </div>
                <div class="firstservice clearfix">
                    <div class="serviceimgbook rightthere">
                        <img src="assets/images/twoimg.png">
                    </div>
                    <div class="serviceprompt leftthere">
                        <div class="counticonservice">
                            <img class="bookiconbg" src="assets/images/open-book.png">
                            <img src="assets/images/01.png">
                        </div>
                        <h1>Nonfiction Manuscript Writing</h1>
                        <p>Nonfiction writing is not as easy as it sounds; it requires back-and-forth changes to make the book readable, enjoyable, and understandable. Our nonfiction writers can write any story assigned to them without wasting your time.</p>
                        <a href="#" class="themecolorbtn">CONSULT NOW</a>
                        <a href="#" class="blackcolorbtn">CHAT NOW</a>
                    </div>
                </div>
                <div class="firstservice clearfix">
                    <div class="serviceimgbook">
                        <img src="assets/images/threeimg.png">
                    </div>
                    <div class="serviceprompt">
                        <div class="counticonservice">
                            <img class="bookiconbg" src="assets/images/open-book.png">
                            <img src="assets/images/01.png">
                        </div>
                        <h1>Nonfiction Manuscript Writing</h1>
                        <p>Nonfiction writing is not as easy as it sounds; it requires back-and-forth changes to make the book readable, enjoyable, and understandable. Our nonfiction writers can write any story assigned to them without wasting your time.</p>
                        <a href="#" class="themecolorbtn">CONSULT NOW</a>
                        <a href="#" class="blackcolorbtn">CHAT NOW</a>
                    </div>
                </div>
                <div class="btn-showall">
                    <a href="#">SEE ALL</a>
                </div>
            </div>
        </div>
        <div class="bookwriter">
            <div class="container">
                <div class="mainbooxk clearfix">
                    <div class="leftsidebook">
                        <h1 class="mainheadingsize">Our <span class="thmecolor">Ghost Book Writers</span> Have an Impeccable Writing.</h1>
                        <p class="paddbot mainparasize">Our ghost book writers are known to give words to your ideas. We offer a broad range of book writing and marketing services that will help you reach success in days.</p>
                        <h3>Wait A Minute!</h3>
                        <p class="paddbot mainparasize">You have found the most capable ghost book writing service. As a book writing service provider led by dynamic professionals, we have gained the respect and loyalty of the audience.</p>
                        <a href="#" class="themeBtn">Get a Quote</a>
                        <a href="#" class="simpleBtn">Chat With Us</a>
                    </div>
                    <div class="rightsideimg">
                        <img src="assets/images/secondbook.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="secondbookwriter">
            <div class="container">
                <div class="secondmainbooxk clearfix">
                    <div class="secondrightsideimg">
                        <img src="assets/images/02.png">
                    </div>
                    <div class="secondleftsidebook">
                        <h1 class="mainheadingsize">Our <span class="thmecolor">Ghost Book Writers</span> Have an Impeccable Writing Style That Draws Readers In.</h1>
                        <p class="paddbot mainparasize">Our ghost book writers are known to give words to your ideas. We offer a broad range of book writing and marketing services that will help you reach success in days.</p>
                        <h3>Wait A Minute!</h3>
                        <p class="paddbot mainparasize">You have found the most capable ghost book writing service. As a book writing service provider led by dynamic professionals, we have gained the respect and loyalty of the audience.</p>
                        <a href="#" class="themeBtn">Get a Quote</a>
                        <a href="#" class="simpleBtn">Chat With Us</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sellyour">
            <div class="container">
                <div class="sellheading">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="mainheadingsize">Sell Your <span class="redcolotext">Book With</span></h1>
                            <p class="mainparasize">You have found the most capable ghost book writing service. As a book writing service provider led by dynamic professionals, we have gained the respect and loyalty of the audience.</p>
                        </div>
                        <div class="booklogos">
                            <img src="assets/images/one.png">
                            <img src="assets/images/two.png">
                            <img src="assets/images/three.png">
                            <img src="assets/images/four.png">
                            <img src="assets/images/five.png">
                            <img src="assets/images/six.png">
                        </div>
                        <div class="clickbtn">
                            <a href="#" class="redthemeBtn">Get a Quote</a>
                            <a href="#" class="simpleBtn">Chat With Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabcategory">
            <div class="container">
                <div class="tabsheading">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="mainheadingsize">Our Top <span class="thmecolor">Publishings</span></h1>
                        </div>
                    </div>
                </div>
                <div class="mainpublish">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="starter-template">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active mycoloractive" id="allcategory-tab" data-toggle="tab" href="#allcategory" role="tab" aria-controls="home" aria-selected="true">All Categories</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="ficton-tab" data-toggle="tab" href="#ficton" role="tab" aria-controls="ficton" aria-selected="false">Fiction</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="nonfiction-tab" data-toggle="tab" href="#nonfiction" role="tab" aria-controls="nonfiction" aria-selected="false">non-Fiction</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="biography-tab" data-toggle="tab" href="#biography" role="tab" aria-controls="biography" aria-selected="false">Biography</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="auto-tab" data-toggle="tab" href="#auto" role="tab" aria-controls="auto" aria-selected="false">AutoBiography</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link myborderss" id="children-tab" data-toggle="tab" href="#children" role="tab" aria-controls="children" aria-selected="false">Childrens</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane masonry-container fade show active" id="allcategory" role="tabpanel" aria-labelledby="allcategory-tab">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img01.png" alt="Card image cap">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img02.png" alt="Card image cap">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img03.png" alt="Card image cap">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img04.png" alt="Card image cap">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img05.png" alt="Card image cap">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img06.png" alt="Card image cap">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img07.png" alt="Card image cap">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img08.png" alt="Card image cap">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade masonry-container" id="ficton" role="tabpanel" aria-labelledby="ficton-tab">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img01.png" alt="Card image cap">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img02.png" alt="Card image cap">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img03.png" alt="Card image cap">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img08.png" alt="Card image cap">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade masonry-container" id="nonfiction" role="tabpanel" aria-labelledby="nonfiction-tab">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img01.png" alt="Card image cap">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img02.png" alt="Card image cap">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img03.png" alt="Card image cap">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img07.png" alt="Card image cap">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img08.png" alt="Card image cap">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade masonry-container" id="biography" role="tabpanel" aria-labelledby="biography-tab">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img01.png" alt="Card image cap">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img02.png" alt="Card image cap">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img03.png" alt="Card image cap">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img08.png" alt="Card image cap">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade masonry-container" id="auto" role="tabpanel" aria-labelledby="auto-tab">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img05.png" alt="Card image cap">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img06.png" alt="Card image cap">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img07.png" alt="Card image cap">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img08.png" alt="Card image cap">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img08.png" alt="Card image cap">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade masonry-container" id="children" role="tabpanel" aria-labelledby="children-tab">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img06.png" alt="Card image cap">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img07.png" alt="Card image cap">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="card">
                                                    <img class="card-img-top" src="assets/images/img08.png" alt="Card image cap">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn-showall mycolorbg">
                    <a href="#">VIEW ALL BOOKS</a>
                </div>
            </div>
        </div>
        <div class="features">
            <div class="container">
                <div class="featureheading">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="mainheadingsize">As Featured In</h1>
                            <p class="mainparasize">You have found the most capable ghost book writing service. As a book writing service provider led by dynamic professionals, we have gained the respect and loyalty of the audience.</p>
                            <div class="btn-showall mydiffcolor">
                                <a href="#">Sign Up Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="desiredbook">
            <div class="container">
                <div class="desiredhead">
                    <div class="leftheadings">
                        <h1 class="mainheadingsize">How to Get the <span class="purplecolor">Desired Book-Writing</span> Results</h1>
                        <p class="mainparasize">Our writing, design, and marketing departments are equipped with advanced tools to provide high-quality ghostwriting services. While pricing is reasonable, we keep the quality high and strive for excellence. The Ghostwriting Professionals team puts its expertise into delivering the best-ghostwriting services that will boost your online presence and double your progress. Easy and understandable work by ghost book authors helps us promise outstanding customer outcomes. Our intelligent ghostwriting professionals can quickly understand the primary requirements of the content. It is remarkable to have competent and best-ghostwriting services who give their best efforts to ensure our client's utmost satisfaction. Our entire plan focuses on producing excellent books and making them very simple for the readers.</p>
                        <p class="mainparasize">High-quality content is paramount to receiving your book writing website the reach and attention it deserves. Are you aware that unique book writing plays a major role in the success of a book?</p>
                        <p class="mainparasize">Our registration process is easy and understandable. The process starts with the creation of your account and submitting your requirements. Depending on your genre and needs, we will assign your book to one of the ghostwriters from the dedicated ghostwriting team. The next step involves taking the reader to the final and publishing stages.</p>
                        <a href="#" class="btnThemeOne">Get a Quote</a>
                        <a href="#" class="btnThemeTwo">Chat With Us</a>
                    </div>
                    <div class="rightimgbook">
                        <img src="assets/images/newb.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="qualityghost">
            <div class="container">
                <div class="qualityheading">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="mainheadingsize">Qualities of <span class="thmecolor">Good Ghostwriters</span></h1>
                            <p class="mainparasize">You have found the most capable ghost book writing service. As a book writing service provider led by dynamic professionals, we have gained the respect and loyalty of the audience.</p>
                        </div>
                    </div>
                </div>
                <div class="totalqualities">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="leftsidequality">
                                <div class="mainquality">
                                    <img src="assets/images/circle.png">
                                    <p>Are you exhausted with your work life and want to pen down your ideas in a book? The average person often reads more than 11 pieces of content before making a purchase decision.</p>
                                </div>
                                <div class="mainquality">
                                    <img src="assets/images/circle.png">
                                    <p>With world-class research and a profound commitment to delivering the best, we are a ghostwriting company that works to provide book writing services, design, and book marketing services to benefit the authors through world-class research and expertise.</p>
                                </div>
                                <div class="mainquality">
                                    <img src="assets/images/circle.png">
                                    <p>Our company provides ghost book writing services, among other benefits. In addition to editing and formatting, Ghost Book Writers work on cover design, book publishing, and book marketing to provide you everything under one umbrella.</p>
                                </div>
                                <div class="mainquality">
                                    <img src="assets/images/circle.png">
                                    <p>Our team of talented and experienced US ghostwriters strives to help you write your book in your voice and express your ideas in your own words.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="rightsidequality">
                                <div class="mainquality">
                                    <img src="assets/images/circle.png">
                                    <p>We're here to create the book you've always wanted. The best way to transform your low-profile business into a prominent one is to tell your story through your book.</p>
                                </div>
                                <div class="mainquality">
                                    <img src="assets/images/circle.png">
                                    <p>Let's start the book-writing journey and avail ourselves of a 40% discount on all book-writing services.</p>
                                </div>
                                <div class="mainquality">
                                    <img src="assets/images/circle.png">
                                    <p>In writing, design, and marketing, we provide top-notch services based on world-class research and a profound understanding of the subject.</p>
                                </div>
                                <div class="mainquality">
                                    <img src="assets/images/circle.png">
                                    <p>As a ghostwriting company, we provide extraordinary ghostwriting services and solutions. Talk to us today to discover how we can assist you in ghostwriting your next bestseller.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qualitybtn">
                    <a href="#" class="themeBtn">Get a Quote</a>
                    <a href="#" class="simpleBtn">Chat With Us</a>
                </div>
            </div>
        </div>
        <div class="demandexpert">
            <div class="container">
                <div class="qualityheading mywidths">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="mainheadingsize">YOUR ON-DEMAND TEAM OR EXPERTS YOUR TIPS</h1>
                            <p class="mainparasize">Find the right person at the right time to make your author's journey unbelievably seamless.</p>
                        </div>
                    </div>
                </div>
                <div class="counterss">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="counterbox">
                                <span class="counter">173</span>
                                <p>Editors</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="counterbox">
                                <span class="counter">227</span>
                                <p>Designers</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="counterbox">
                                <span class="counter">28</span>
                                <p>Publicists</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="counterbox">
                                <span class="counter">54</span>
                                <p>Marketers</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="counterbox">
                                <span class="counter">206</span>
                                <p>Ghostwriters</p>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="counterbox">
                                <span class="counter">58</span>
                                <p>Web designers</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btndemand">
                    <a href="#" class="themecolorbtn">CONSULT NOW</a>
                    <a href="#" class="blackcolorbtn">CHAT NOW</a>
                </div>
            </div>
        </div>
        <div class="sellyour">
            <div class="container">
                <div class="sellheading">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="mainheadingsize">OUR PROUD PARTNERS</h1>
                            <p class="mainparasize">You have found the most capable ghost book writing service. As a book writing service provider led by dynamic professionals, we have gained the respect and loyalty of the audience.</p>
                        </div>
                        <div class="booklogos">
                            <img src="assets/images/logo1.png">
                            <img src="assets/images/logo2.png">
                            <img src="assets/images/logo3.png">
                            <img src="assets/images/logo4.png">
                            <img src="assets/images/logo5.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="authorsection">
            <div class="mainauthor">
                <div class="yellowbook">
                    <img src="assets/images/yellowbook.png" alt="Additional Image" id="additionalImage">
                </div>
                <div class="mainheadtestimonial">
                    <div class="headyellow">
                        <h1 class="mainheadingsize">Why Book Authors Love Book Writing Company</h1>
                        <p class="mainparasize">Don't just take our word for it - hear what our satisfied clients say about their experience working with BookWriting Company.</p>
                    </div>
                    <div class="mainsliders">
                        <div class="slider-container">
                            <div class="slider-content" id="slider">
                                <!-- Slide 1 -->
                                <div class="slide">
                                    <div class="boxtestimonial">
                                        <h1>Fantasy</h1>
                                        <p>I recently completed my novel The Department of Injustice. Book Writing HQ formatted and printed my book. The books came in on a timely basis, and the graphics for the cover are amazing.</p>
                                        <img src="assets/images/starts.png">
                                        <h3>Mark Robert</h3>
                                        <h6>Marketer</h6>
                                    </div>
                                </div>
                                <!-- Slide 2 -->
                                <div class="slide">
                                    <div class="boxtestimonial">
                                        <h1>Fantasy</h1>
                                        <p>I recently completed my novel The Department of Injustice. Book Writing HQ formatted and printed my book. The books came in on a timely basis, and the graphics for the cover are amazing.</p>
                                        <img src="assets/images/starts.png">
                                        <h3>Mark Robert</h3>
                                        <h6>Marketer</h6>
                                    </div>
                                </div>
                                <!-- Slide 3 -->
                                <div class="slide">
                                    <div class="boxtestimonial">
                                        <h1>Fantasy</h1>
                                        <p>I recently completed my novel The Department of Injustice. Book Writing HQ formatted and printed my book. The books came in on a timely basis, and the graphics for the cover are amazing.</p>
                                        <img src="assets/images/starts.png">
                                        <h3>Mark Robert</h3>
                                        <h6>Marketer</h6>
                                    </div>
                                </div>
                                <!-- Slide 4 -->
                                <div class="slide">
                                    <div class="boxtestimonial">
                                        <h1>Fantasy</h1>
                                        <p>I recently completed my novel The Department of Injustice. Book Writing HQ formatted and printed my book. The books came in on a timely basis, and the graphics for the cover are amazing.</p>
                                        <img src="assets/images/starts.png">
                                        <h3>Mark Robert</h3>
                                        <h6>Marketer</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slider-nav">
                            <button id="prevBtn"><i class="fa-solid fa-angle-left"></i></button>
                            <button id="nextBtn"><i class="fa-solid fa-angle-right"></i></button>
                        </div>
                        <div class="pagination">
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="packageswork">
            <div class="container">
                <div class="qualityheading myparacolor">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="mainheadingsize">Packages That Suit Every Author</h1>
                            <p class="mainparasize">Find the most affordable book writing and marketing packages under one roof, and choose what suits you the best.</p>
                        </div>
                    </div>
                </div>
                <div class="packagesuit">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="onebox">
                                <div class="textdetails">
                                    <p>100% Content Copyrights</p>
                                    <p>Turnaround Time</p>
                                    <p>Creating & updating the book outline</p>
                                    <p>Pages</p>
                                    <p>Editing + Proofreading</p>
                                    <p>Free Formatting</p>
                                    <p>Unlimited Revisions</p>
                                    <p>A dedicated team of expert writers</p>
                                    <p>Free access to the online portal</p>
                                    <p>Professional Cover design (Front, spine, and back)</p>
                                    <p>Illustrations</p>
                                    <p>Book Publishing</p>
                                    <p>Book Formats</p>
                                    <p>Audio Book</p>
                                    <p>Book Trailer</p>
                                    <p>Author's Website</p>
                                    <p>Social Media Management</p>
                                    <p>Book SEO</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mainbb">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="packagebox">
                                    <div class="packagenameone">
                                        <h3>Basic</h3>
                                        <h4>Much Needed</h4>
                                        <h1>$499</h1>
                                        <p>$1499</p>
                                    </div>
                                    <div class="packdetails">
                                        <ul>
                                            <li><img src="assets/images/redcheck.png" /></li>
                                            <li><p>8 - 10 Weeks</p></li>
                                            <li><img src="assets/images/redcheck.png" /></li>
                                            <li><p>Up to 150</p></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li><img src="assets/images/redcheck.png" /></li>
                                            <li><img src="assets/images/redcheck.png" /></li>
                                            <li><img src="assets/images/redcheck.png" /></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li><p>E-Book</p></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li style="border:none"><img src="assets/images/cross.png" /></li>
                                            <li class="myredli">
                                                <a href="#">Get Started</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="packagebox">
                                    <div class="packagenameone purplebox">
                                        <h3>Classic</h3>
                                        <h4>Most Wanted</h4>
                                        <h1>$1999</h1>
                                        <p>$2499</p>
                                    </div>
                                    <div class="packdetails">
                                        <ul>
                                            <li><img src="assets/images/graycheck.png" /></li>
                                            <li><p>8 - 10 Weeks</p></li>
                                            <li><img src="assets/images/graycheck.png" /></li>
                                            <li><p>Up to 150</p></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li><img src="assets/images/graycheck.png" /></li>
                                            <li><img src="assets/images/graycheck.png" /></li>
                                            <li><img src="assets/images/graycheck.png" /></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li><p>E-Book</p></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li style="border:none"><img src="assets/images/cross.png" /></li>
                                            <li class="mypurpleli">
                                                <a href="#">Get Started</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="packagebox">
                                    <div class="packagenameone orangebox">
                                        <h3>Best Seller</h3>
                                        <h4>Guaranteed Success</h4>
                                        <h1>$3999</h1>
                                        <p>$4999</p>
                                    </div>
                                    <div class="packdetails">
                                        <ul>
                                            <li><img src="assets/images/graycheck.png" /></li>
                                            <li><p>8 - 10 Weeks</p></li>
                                            <li><img src="assets/images/graycheck.png" /></li>
                                            <li><p>Up to 150</p></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li><img src="assets/images/graycheck.png" /></li>
                                            <li><img src="assets/images/graycheck.png" /></li>
                                            <li><img src="assets/images/graycheck.png" /></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li><p>E-Book</p></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li><img src="assets/images/cross.png" /></li>
                                            <li style="border:none"><img src="assets/images/cross.png" /></li>
                                            <li class="myorangeli">
                                                <a href="#">Get Started</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordionss">
            <div class="container">
                <div class="qualityheading">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="mainheadingsize">Frequently Asked <span class="thmecolor">Questions</span></h1>
                            <p class="mainparasize">Reach Out to Us for Further Assistance.</p>
                        </div>
                    </div>
                </div>
                <div class="accordinitem">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="accordion-item">
                                <div class="accordion-item-header">
                                    Reach Out to Us for Further Assistance.
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        Ghostwriting is when an author writes a book for a client but does not claim his rights to the book; rather, the book is published in the client's name.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item-header">
                                    What is Web Development?
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        Web Development broadly refers to the tasks associated with developing functional websites and applications for the Internet. The web development process includes web design, web content development, client-side/server-side scripting and network security configuration, among other tasks.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item-header">
                                    What is Web Development?
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        Web Development broadly refers to the tasks associated with developing functional websites and applications for the Internet. The web development process includes web design, web content development, client-side/server-side scripting and network security configuration, among other tasks.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item-header">
                                    What is Web Development?
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        Web Development broadly refers to the tasks associated with developing functional websites and applications for the Internet. The web development process includes web design, web content development, client-side/server-side scripting and network security configuration, among other tasks.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="accordion-item">
                                <div class="accordion-item-header">
                                    What is Web Development?
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        Web Development broadly refers to the tasks associated with developing functional websites and applications for the Internet. The web development process includes web design, web content development, client-side/server-side scripting and network security configuration, among other tasks.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item-header">
                                    What is Web Development?
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        Web Development broadly refers to the tasks associated with developing functional websites and applications for the Internet. The web development process includes web design, web content development, client-side/server-side scripting and network security configuration, among other tasks.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item-header">
                                    What is Web Development?
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        Web Development broadly refers to the tasks associated with developing functional websites and applications for the Internet. The web development process includes web design, web content development, client-side/server-side scripting and network security configuration, among other tasks.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-item-header">
                                    What is Web Development?
                                </div>
                                <div class="accordion-item-body">
                                    <div class="accordion-item-body-content">
                                        Web Development broadly refers to the tasks associated with developing functional websites and applications for the Internet. The web development process includes web design, web content development, client-side/server-side scripting and network security configuration, among other tasks.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="qualitybtn">
                    <a href="#" class="themeBtn">Get a Quote</a>
                    <a href="#" class="simpleBtn">Chat With Us</a>
                </div>
            </div>
        </div>
        <div class="mytwobooks">
            <div class="container">
                <div class="desiredhead">
                    <div class="mytwobooksleft">
                        <h1 class="mainheadingsize">Become Best-Selling Author Now.</h1>
                        <p class="mainparasize">Get Your Book Written & Publish - All Within 60 Days - Just For $499. The offer ends in the next 48 hours!</p>
                        <a href="#" class="btnChangeThemeOne">Get Consultation</a>
                        <a href="#" class="btnChangeThemeTwo">Chat Now</a>
                    </div>
                    <div class="rightimgbook">
                        <img src="assets/images/twobook.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="achievement">
            <div class="container">
                <div class="mainachiev">
                    <div class="footsidehead">
                        <h1 class="mainheadingsize">Our Recognition & Awards</h1>
                    </div>
                    <div class="logfoot">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="footlogo">
                                    <img src="assets/images/onefooter.png">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="footlogo">
                                    <img src="assets/images/twofooter.png">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="footlogo">
                                    <img src="assets/images/threefooter.png">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="footlogo">
                                    <img src="assets/images/fourfooter.png">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="footlogo">
                                    <img src="assets/images/fiverfooter.png">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="footlogo">
                                    <img src="assets/images/sixfooter.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="footerbottom">
            <div class="container">
                <div class="orangelabel">
                    <div class="boxfotone">
                        <i class="fa-solid fa-phone-volume"></i>
                        <p>661-548-2574</p>
                    </div>
                    <div class="boxfotone">
                        <i class="fa-solid fa-envelope"></i>
                        <p>info@Thebookcompany.com</p>
                    </div>
                    <div class="boxfotone">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>2005 Eye St PMB #551, Bakersfield, CA 93301</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mainfooter">
            <div class="container">
                <div class="footerboxx">
                    <div class="oneshere">
                        <h1>Marketing</h1>
                        <ul>
                            <li><a href="#">Audio Book</a></li>
                            <li><a href="#">Book Cover Design</a></li>
                            <li><a href="#">SEO Blog Writing</a></li>
                            <li><a href="#">Author Website</a></li>
                            <li><a href="#">Social Media Marketing</a></li>
                            <li><a href="#">Content Marketing</a></li>
                            <li><a href="#">Wikipedia Publication</a></li>
                            <li><a href="#">Press Release</a></li>
                            <li><a href="#">Paid Ads</a></li>
                            <li><a href="#">Reputation Management</a></li>
                        </ul>
                    </div>
                    <div class="oneshere">
                        <h1>Publishing</h1>
                        <ul>
                            <li><a href="#">Ingram</a></li>
                            <li><a href="#">Amazon</a></li>
                            <li><a href="#">Barn & Nobel</a></li>
                            <li><a href="#">Lulu Publishing</a></li>
                            <li><a href="#">Printing</a></li>
                            <li><a href="#">Print on Demand</a></li>
                            <li><a href="#">Self-Publishing</a></li>
                            <li><a href="#">Paperback Book</a></li>
                            <li><a href="#">Printing</a></li>
                            <li><a href="#">Hardcover Book Printing</a></li>
                        </ul>
                    </div>
                    <div class="oneshere">
                        <h1>Editing</h1>
                        <ul>
                            <li><a href="#">Proofreading</a></li>
                            <li><a href="#">Book Formatting</a></li>
                            <li><a href="#">Printed Book Formatting</a></li>
                            <li><a href="#">Copy Editing Service</a></li>
                            <li><a href="#">Line Editing Service</a></li>
                            <li><img src="assets/images/godaddy-siteseal.png"></li>
                            <li><img src="assets/images/SSLcertificate.png"></li>
                        </ul>
                    </div>
                    <div class="oneshere myimgs">
                        <h1>The Book Co.</h1>
                        <ul>
                            <li><img src="assets/images/onstar.png"></li>
                            <li><img src="assets/images/twostar.png"></li>
                            <li><img src="assets/images/threestar.png"></li>
                            <li><img src="assets/images/fourstar.png"></li>
                            <li><img src="assets/images/payment.png"></li>
                        </ul>
                    </div>
                </div>
                <div class="footerline">
                    <div class="termss clearfix">
                        <ul>
                            <li><a href="#" class="leftnopadd">Privacy Policy</a></li>
                            <li><a href="#" class="noborder">Terms & Conditions</a></li>
                        </ul>
                    </div>
                    <div class="textworkbottom">
                        <p>© 2023 TheBookCompany. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup" id="popup">
    <div class="discountpopup">
        <div class="container">
            <div class="onemm">
                <div class="leftpop">
                    <img src="assets/images/popup.png">
                    <span class="close" id="close">&times;</span>
                </div>
                <div class="rightpop">
                    <h3>Get Up to</h3>
                    <h1><span class="myspnc">50%</span> off</h1>
                    <h4>on your Sign Up</h4>
                    <form>
                        <div class="form-group">
                            <input type="text" placeholder="Name" class="oneinput">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Phone" class="oneinput">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Email" class="oneinput">
                        </div>
                        <div class="form-group">
                            <button>Submit</button>
                        </div>
                    </form>
                    <p>*Offer is available for limited time!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script src="assets/js/propper.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script>

(function($)  {
var $container = $('.masonry-container');
$container.imagesLoaded( function () {
    $container.masonry({
        columnWidth: '.card',
        itemSelector: '.card'
    });
});
$('a[data-toggle=tab]').each(function () {
    var $this = $(this);

    $this.on('shown.bs.tab', function () {

    $container.imagesLoaded( function () {
        $container.masonry({
            columnWidth: '.card',
            itemSelector: '.card'
        });
    });

}); //end shown
});  //end each

})(jQuery);
</script>
<script>
    // JavaScript for the slider
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const sliderContent = document.querySelector('.slider-content');
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const additionalImage = document.getElementById('additionalImage');
    let currentIndex = 0;

    // Images for the slider
    const images = [
        'assets/images/yellowbook.png',
        'assets/images/yellowbook.png',
        'assets/images/yellowbook.png',
        'assets/images/yellowbook.png'
    ];

    // Event listeners for prev and next buttons
    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        updateSlider();
        updateAdditionalImage();
        updateDots();
    });

    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % slides.length;
        updateSlider();
        updateAdditionalImage();
        updateDots();
    });

    // Event listener for pagination dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentIndex = index;
            updateSlider();
            updateAdditionalImage();
            updateDots();
        });
    });

    // Function to update the slider
    function updateSlider() {
        const translateX = -currentIndex * slides[0].offsetWidth;
        sliderContent.style.transform = `translateX(${translateX}px)`;
    }

    // Function to update the additional image
    function updateAdditionalImage() {
        additionalImage.src = images[currentIndex];
    }

    // Function to update the dots
    function updateDots() {
        dots.forEach((dot, index) => {
            if (index === currentIndex) {
                dot.classList.add('activeslider');
            } else {
                dot.classList.remove('activeslider');
            }
        });
    }
</script>
<script>
const accordionItemHeaders = document.querySelectorAll(
  ".accordion-item-header"
);

accordionItemHeaders.forEach((accordionItemHeader) => {
  accordionItemHeader.addEventListener("click", (event) => {
    // Uncomment in case you only want to allow for the display of only one collapsed item at a time!

    const currentlyActiveAccordionItemHeader = document.querySelector(
      ".accordion-item-header.active"
    );
    if (
      currentlyActiveAccordionItemHeader &&
      currentlyActiveAccordionItemHeader !== accordionItemHeader
    ) {
      currentlyActiveAccordionItemHeader.classList.toggle("active");
      currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
    }
    accordionItemHeader.classList.toggle("active");
    const accordionItemBody = accordionItemHeader.nextElementSibling;
    if (accordionItemHeader.classList.contains("active")) {
      accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
    } else {
      accordionItemBody.style.maxHeight = 0;
    }
  });
});
</script>
<script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }
    
    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
</script>
<script>
const popup = document.getElementById('popup');
const showPopupButton = document.getElementById('showPopupBtn');
const closeButton = document.getElementById('close');

// Function to show the popup
function showPopup() {
    popup.style.display = 'block';
}

function hidePopup() {
    popup.style.display = 'none';
}

window.onload = function() {
    showPopup();
    setTimeout(hidePopup, 10000);
};
showPopupButton.addEventListener('click', showPopup);
closeButton.addEventListener('click', hidePopup);
</script>
<script>
$(document).ready(function() {
    $('.counter').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 4000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });
});
</script>
</body>
</html>