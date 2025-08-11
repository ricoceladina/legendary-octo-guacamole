f<!doctype html>
<html class="no-js" lang="en">

<?php
//include "db2\db2.php";
session_start();
if(isset($_SESSION["uid"])){

    header("location:Customer_profile.php");
}
?>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Auto Spare Parts</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- CSS 
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
   
    <!--header area start-->
       
    <?php  
include'header.php';
?>
    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">
                
    </div>
  
    <!--offcanvas menu area end-->
  

<?php  
include'header_area_menu.php';
?>
    <!--header area end-->

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>contact us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <div class="contact_page_bg">
        <!--contact map start-->
        <div class="contact_map">
           <div class="map-area">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15442.62473204727!2d121.04685428573745!3d14.618651522972007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b7eadd63a1df%3A0xa6f6a02c480fc32c!2sCubao%2C%20Quezon%20City%2C%20Kalakhang%20Maynila!5e0!3m2!1sfil!2sph!4v1753591720694!5m2!1sfil!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>
        </div>
        <!--contact map end-->
        <div class="container">
            <!--contact area start-->
            <div class="contact_area">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                       <div class="contact_message content">
                            <h3>contact us</h3>    
                             <p>📞 Contact Us
Have questions or need assistance? We’re here to help!

📍 Visit Us:
Cubao, Quezon City, Philippines

📧 Email:ricoceladina34@gmail.com
📱 Phone:09616232708
💬 Business Hours: Monday to Saturday, 9:00 AM – 6:00 PM

You can also reach us on Facebook / Messenger for quick responses!</p>
                            <ul>
                                <li><i class="fa fa-fax"></i>  Address : Cubao Quezon City.</li>
                                <li><i class="fa fa-phone"></i> <a href="#">ricoceladina34@gmail.com</a></li>
                                <li><i class="fa fa-envelope-o"></i> 09616232708</li>
                            </ul>             
                        </div> 
                    </div>
                    <div class="col-lg-6 col-md-12">
                       <div class="contact_message form">
                            <h3>Tell us your project</h3>   
                            <form id="contact-form" method="POST"  action="https://htmldemo.hasthemes.com/mazlay/mazlay/assets/mail.php">
                                <p>  
                                   <label> Your Name (required)</label>
                                    <input name="name" placeholder="Name *" type="text"> 
                                </p>
                                <p>       
                                   <label>  Your Email (required)</label>
                                    <input name="email" placeholder="Email *" type="email">
                                </p>
                                <p>          
                                   <label>  Subject</label>
                                    <input name="subject" placeholder="Subject *" type="text">
                                </p>    
                                <div class="contact_textarea">
                                    <label>  Your Message</label>
                                    <textarea placeholder="Message *" name="message"  class="form-control2" ></textarea>     
                                </div>   
                                <button type="submit"> Send</button>  
                                <p class="form-messege"></p>
                            </form> 

                        </div> 
                    </div>
                </div>   
            </div>
            <!--contact area end-->
        </div>
    </div>
    
     <!--brand area start-->
     <?php  
include'brandarea.php';
?>
    <!--brand area end-->
    
     <!--footer area start-->
     <?php  
include'footer.php';
?>
   
    
<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="assets/js/plugins.js"></script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>



</body>


</html>