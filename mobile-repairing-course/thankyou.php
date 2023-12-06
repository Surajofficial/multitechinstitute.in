<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- SEO -->

    <meta name="author" content="">

    <meta name="description" content="">

    <meta name="keywords" content="">

    <!-- Favicons -->

    <link rel="shortcut icon" href="https://www.multitechinstitute.com/images/logof.png">

    <!-- Page Title -->

    <title>Multitech Institute</title>

    <!-- Bootstrap -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Google Font : Josefin Sans -->

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet" type="text/css">

    <!-- Plugins -->

    <link href="css/plugins/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/streamline-icons.css" rel="stylesheet">

    <!-- Template Style -->

    <link href="css/health.css" rel="stylesheet">

    <!-- Color Theme -->

    <link href="css/themes/red.css" rel="stylesheet">



    <!-- Global site tag (gtag.js) - Google Ads: 393094461 -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-393094461"></script>

    <script>

      window.dataLayer = window.dataLayer || [];

      function gtag(){dataLayer.push(arguments);}

      gtag('js', new Date());

    

      gtag('config', 'AW-393094461');

    </script>

    

    

    <!-- Event snippet for Leads conversion page -->

    <script>

      gtag('event', 'conversion', {'send_to': 'AW-393094461/VZwvCI27q_4BEL3KuLsB'});

    </script>



    

    

</head>



<body data-spy="scroll" data-target="#navbar" data-offset="100">

    <!-- Preloader div -->

    <div class="preloader"></div>

    <!-- Fixed navbar -->

    <div class="container-fluid top_widgets">

        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-sm-3 col-md-3">

                    <p><i class="fa fa-bed" aria-hidden="true"></i>&nbsp;&nbsp;Hostel Available for Students</p>

                </div>

                <div class="col-lg-5 col-md-5 col-sm-5 hidden-xs">&nbsp;</div>

                <div class="col-lg-4 col-sm-4 col-md-4 col-12  text-center  hidden-xs">

                    <p>Connect with us: <a href="https://www.facebook.com/multitechinstitute/"><i class="fa fa-facebook text-white"></i></a>&nbsp;&nbsp;<a href="https://www.youtube.com/channel/UCoHztc5u7oUnMJiguYdQq6g"><i class="fa fa-youtube-play text-white"></i></a>&nbsp;&nbsp;<a href="https://twitter.com/Multitechdelhi"><i class="fa fa-twitter text-white"></i></a>&nbsp;&nbsp;<a href="https://www.linkedin.com/in/multitechdelhi"><i class="fa fa-linkedin text-white"></i></a>&nbsp;&nbsp;<a href="https://www.instagram.com/multitechdelhi"><i class="fa fa-instagram text-white"></i></a></p>

                </div>

            </div>

        </div>

    </div>

    <nav class="navbar navbar-default " style="margin-bottom:0px">

        <div class="container">

            <div class="navbar-header mobile-center">

                <a class="navbar-brand" href="#"><img src="image/logo.png" alt="Multitech Institute" style="max-width:200px;"> </a>



            </div>



            <div class="click-to-call">

                <a href="tel:+918929250332" target="_blank">

                    <span class="phone-icon"><i class="fa fa-phone"></i></span> <span>Call Us: +91-8929250332</span>

                </a>

            </div>



        </div>

        

    </nav>

   <div class="container-fluid marquee_area">

       <div class="row">

           <div class="col-12 " style="line-height:35px;height:33px;">

               <!--<label>Updates:</label>-->

               <marquee style="color:#fff;">ऑनलाइन एडमिशन लेने पर Rs. 3000/- का Discount | लैपटॉप और मोबाइल रिपेयरिंग के लिए BGA और OCA मशीन पर ट्रेनिंग | 100% प्रैक्टिकल के साथ रिपेयरिंग सीखे|</marquee>

           </div>

       </div>

   </div>

    <!-- // End Fixed navbar -->

    <?php if(isset($_POST['submit']) && $_POST['submit']!=''){ 

    //print_r($_REQUEST);

    session_start();

    include('mail.template.php');

    $name = htmlspecialchars(trim($_POST['name']));

    if($name==''){

        //exit;

        $_SESSION['ERROR_MSG']="

        <div class='alert alert-danger' role='alert'>

          Please enter your name.

        </div>

        ";

        ?>

        <script>

            window.location.href = "http://www.multitechinstitute.in/mobile-repairing-course/";

        </script>

        <?php

        header("location: http://www.multitechinstitute.in/mobile-repairing-course/");

    }

    $mobile = htmlspecialchars(trim($_POST['phone']));

    if($mobile ==''){

        $_SESSION['ERROR_MSG']="

        <div class='alert alert-danger' role='alert'>

          Please enter your mobile number.

        </div>

        ";

        ?>

        <script>

            window.location.href = "http://www.multitechinstitute.in/mobile-repairing-course/";

        </script>

        <?php

        header("location: http://www.multitechinstitute.in/mobile-repairing-course/");

    }

    $email = htmlspecialchars(trim($_POST['email']));

    if($email ==''){

        $_SESSION['ERROR_MSG']="

        <div class='alert alert-danger' role='alert'>

          Please enter your e-mail.

        </div>

        ";

        ?>

        <script>

            window.location.href = "http://www.multitechinstitute.in/mobile-repairing-course/";

        </script>

        <?php

        header("location: http://www.multitechinstitute.in/mobile-repairing-course/");

    }

    $department = htmlspecialchars($_POST['department']);

    $city = htmlspecialchars($_POST['city']);

    

    $userdaat = array('name'=>$name,'email'=>$email,'mobile'=>$mobile,'department'=>$department,'city'=>$city);

    $uname = $userdaat['name'];

    $mailMsg = getEnquiredMessage($userdaat);

    //echo $mailMsg;

    $args = array("to"=>'multitechtilaknagar@gmail.com',"subject"=>"$uname, Booked Demo Class - Mobile Repairing Course- on your website.","msg"=>$mailMsg);

    if(mks_sendMail($args )){ ?>

    

    <section class="thankyou_area" style="height:53vh">

        <div class="container">

            <div class="row" style="text-align:center">

                <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                    <h3>Thankyou! Your request has been successfully submitted.</h3>

                    <p>One of our executive will get in touch with you soon.</p>

                    <a href="http://www.multitechinstitute.in/mobile-repairing-course/" class="btn btn-success">Go to home</a>

                </div>

            </div>

        </div>

    </section>

    <?php }  } else { header("Location: http://www.multitechinstitute.in/mobile-repairing-course/");} ?>

    


    

    <style>

#callbook{background: none repeat scroll 0 0 #b50c23;

    bottom: 0;

    height: 40px;

    left: 0;

    position: fixed;

    display: none;

    right: 0;

    z-index: 100;

    -webkit-box-shadow: 0 2px 15px 0 rgba(51, 51, 51, 1);

    -moz-box-shadow: 0 2px 15px 0 rgba(51, 51, 51, 1);

    box-shadow: 0 2px 15px 0 rgba(51, 51, 51, 1);

}

@media only screen and (max-device-width: 736px) and (min-device-width: 320px){

#callbook {

    display: inline !important;

}



}



.seocrawler-body * {

    border-color: #e6e6e6;}

	#callbook > a{z-index: 300;

    float: left;

    height: 48px;

    line-height: 50px;

    text-align: center;

    width: 50%;

    text-decoration: none;

    font-size: 18px;

    text-transform: capitalize; color:#fff;}

	.callbook_logo{background-size: 100%;

    bottom: -24px;

    height: 72px!important;

    left: 50%;

    margin-left: -23px;

    position: absolute;

    width: 72px!important;

    z-index: 2;}

	.callbook_under{background:#185da2;

    bottom: -3px;

    height: 60px;

    left: 50%;

    margin-left: -32px;

    position: absolute;

    width: 61px;

    border-radius: 5000px;

    -webkit-border-radius: 5000px;

    z-index: 1;

    -webkit-box-shadow: 0 2px 15px 0 rgba(51, 51, 51, 1);

    -moz-box-shadow: 0 2px 15px 0 rgba(51, 51, 51, 1);

    box-shadow: 0 2px 15px 0 rgba(51, 51, 51, 1);

}



}

.thankyou-footer{

    position: fixed;

    bottom: 0px;

    width: 100%;

    text-align: center;

    background-color: #e6e6e6;

}

</style>

      <div id="callbook" class="mobile-call"><a id="cb_call" class="actioncall" href="tel:8929250332"><span style="padding:0 5px 0 0;" class="callbook-icona-telefono"><i class="fa fa-phone"></i></span><span class="callbook-align" style="margin-right:15px;">Call now</span></a><a id="cb_book" class="actionbook" target="_blank" href="https://api.whatsapp.com/send?phone=918929250332&amp;text=Hello%20Multitech&amp;source=&amp;data="><span class="callbook-align" style="margin-left:15px;">WhatsApp</span><span style="padding:0 0 0 5px;" class="callbook-icona-calendario"><i class="fa fa-whatsapp"></i></span></a><div class="callbook_logo"><a id="cb_mail" class="icon" href="mailto:info@multitechinstitute.in?subject=Hi Multitech institute, I am interested in your courses."><div class="callbook-icona-busta-lettera" style="margin-top:7px; margin-left:11px;"><i class="fa fa-envelope" style="color:#fff;"></i></div></a></div><div class="callbook_under"></div></div>

    <!--fix footer for mobile ends-->





    <footer class="thankyou-footer">

        

        <p> <small class="">Copyright © 2021. All rights reserved Multitech. <!--Designed & Developed by <a href="https://www.acnosoft.com/">Acnosoft</a> --></small></p>

    </footer>

    <a href="#top" class="back_to_top"><img src="images/back_to_top.png" alt="back to top"></a>



    <!-- 

     Javascripts : Nerd Stuff :)

     ====================================== -->

    <!-- jQuery Library -->

    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap JS -->

    <script src="js/bootstrap.min.js"></script>

    <!-- 3rd party Plugins -->

    <script src="js/plugins/validate.js"></script>

    <script src="js/plugins/sugar-date.js"></script>

    <script src="js/plugins/nicescroll.js"></script>



    <!-- JS Includes -->

    <script src="js/includes/contact_form.js"></script>

    <!-- Main Script -->

    <script src="js/main.js"></script>

    <script src="https://use.fontawesome.com/d9b2666389.js"></script>

</body>



</html>

