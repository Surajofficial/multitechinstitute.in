 <style>
    /*@media(max-width: 650px){ #menu .dropdown-menu li{ background:#081f4f!important;}*/
    /*    #menu { height:100vh!important; background:#d02e1e!important;}*/
    /*}*/
    
    
     
 </style>
 
  <style>


    @media(max-width: 650px){ 
        #menu .dropdown-menu li{
            background:#081f4f!important;
            
        }

        #menu { height:84vh!important; background:#d02e1e!important;}

    }
    .mobile_enquiry {
    text-decoration: none;
    color: #fff!important;
    position: relative;
     top: 0px; 
    right: 13px;
    border: 1px solid white;
    border-radius: 5px;
    width: 111px;
    text-align: center;
    font-size: 12px;
    float: right;
}

     .sidenav {
  height: 100%;
  width: 100%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #b50c23;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
  overflow-x: hidden;
}

.sidenav a {
  padding: 15px;
  text-decoration: none;
  font-size: 16px !important;
  color: #ffffff;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
   position: absolute;
    margin-left: 76%;
    color: #002063 !important;
    font-size: 36px !important;
    margin-top: 2px;
    top: 0;
}
/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 16px !important;
  color: #ffffff;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  transition: .5s !important;
  cursor: pointer;
  outline: none;
}
.sidenav a, .dropdown-btn{
  color: #ffffff;
}
.open-button{
    width: 100%;
    background-color: #b50c23;
    height: 50px;
    padding: 8px;
    color: white;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
  background-color: #002063 !important;
}
.closebtn:hover{
  background-color: transparent !important;
}


/* Add an active class to the active dropdown button */
.active {
  background-color: #002063 #002063;
  /*color: white;*/
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #002063;
  padding-left: 0px;
}
.dropdown-container a {
   border-bottom: .5px solid white;
   width: 100%;
}
.dropdown-container a:nth-last-child(1){
   border-bottom: 0px white;
   width: 100%;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
    float: right;
    font-size: 28px !important;
    padding-right: 8px !important;

}
.mobile-nav{
  background-color: white;
  padding: 10px;
  position: relative;
}
.mobile-nav img{
  width: 120px;
}

/* Some media queries for responsiveness */


@media screen and (max-height: 450px) {
  .sidenav {
    padding: 0;
    width: 0;
    transition: .5s;
  }
  .mobile-nav{
    transition: .5s;
  }
  .slide{ 
    top: 0px !important;
  }
  .sidenav .closebtn{
    margin-left: 76%;
    color: black !important;
    margin-top: 9px;
    transition: .5s;
  }
  .sidenav a {font-size: 18px; padding-top: 10px;
    transition: .5s;}
}

@media only screen and (max-width: 800px) {
  .sidenav {
    padding: 0;
    width: 0;
    transition: .5s;
  }
  .mobile-nav{
    transition: .5s;
  }
  .slide{ 
    top: 0px !important;
  }
  .sidenav .closebtn{
 position: absolute;
    margin-left: 76%;
    color: black;
    margin-top: 9px;
    transition: .5s;
  }
  .open-button{
    width: 100%;
    background-color: #b50c23;
    height: 50px;
    padding: 8px;
    color: white;
}
}

 </style>
 
 
 <div id="mySidenav" class="sidenav d-block d-md-none">
  <div class="mobile-nav">
       <img src="assets/media/logo.png">
       <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  </div>
  <a href="#home"></i> Home</a>
  <a href="#about">ABOUT</a>
   <button class="dropdown-btn">COURSES
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <!-- <a href="#">Link 1</a> -->
            <a class="dropdown-item" href="<?=URL;?>laptop-repairing-course.php">Laptop Repairing Course</a>
            <a class="dropdown-item" href="<?=URL;?>mobile-repairing-course.php">Mobile Repairing Course</a>
            <a class="dropdown-item" href="<?=URL;?>led-tv-repairing-course.php">LED TV Repairing Course</a>
            <a class="dropdown-item" href="<?=URL;?>printer-repairing-course.php">Printer Repairing Course</a>
            <a class="dropdown-item" href="<?=URL;?>cctv-training-institute.php">CCTV Repairing Course</a>
            <a class="dropdown-item" href="<?=URL;?>e-vehicle-repairing-course.php">E-Vehicle Repairing Course</a>
            <a class="dropdown-item" href="<?=URL;?>ac-repairing-course.php">AC PCB Repairing Course</a>
            <a class="dropdown-item" href="<?=URL;?>fridge-and-washing-machine.php">Fridge And Washing Machine Repairing Course</a>
            <a class="dropdown-item" href="<?=URL;?>inverter-repairing-course.php">Inverter Repairing Course</a>
  </div>

   <button class="dropdown-btn">ONLINE COURSES
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
            <a class="dropdown-item" href="<?=URL;?>online-laptop-repairing-course.php">Online Laptop Repairing Course</a>
            <a class="dropdown-item" href="<?=URL;?>online-mobile-repairing-course.php">Online Mobile Repairing Course</a>
            <a class="dropdown-item" href="<?=URL;?>online-led-tv-repairing-course.php">Online LED TV Repairing Course</a>
            <a class="dropdown-item" href="<?=URL;?>online-printer-repairing-course.php">Online Printer Repairing Course</a>
            <a class="dropdown-item" href="<?=URL;?>online-cctv-training-institute.php">Online CCTV Repairing Course</a>
            <a class="dropdown-item" href="<?=URL;?>online-e-vehicle-repairing-course.php">Online E-Vehicle Repairing Course</a>
  </div>

  <!-- <button class="dropdown-btn">ONLINE REGISTRATION-->
  <!--  <i class="fa fa-caret-down"></i>-->
  <!--</button>-->
  <!--<div class="dropdown-container">-->
  <!--  <a href="<?=URL;?>https://microchipexpert.com/">Student Registration Details</a>-->
  <!--  <a href="<?=URL;?>franchise.html">Franchise Proposal & Registration</a>-->
  <!--</div>-->

  <!-- <button class="dropdown-btn">PRODUCTS-->
  <!--  <i class="fa fa-caret-down"></i>-->
  <!--</button>-->
  <!--<div class="dropdown-container">-->
  <!--  <a href="<?=URL;?>bgamachine.html">Bga Machine</a>-->
  <!--  <a href="<?=URL;?>bios-programmer.html">BIOS Programmer</a>-->
  <!--  <a href="<?=URL;?>dc-power-supply.html">DC Power Supply</a>-->
  <!--  <a href="<?=URL;?>cro-machine.html">CRO Machine</a>-->
  <!--  <a href="<?=URL;?>smd-hot-gun.html">smd-hot-gun.html</a>-->
  <!--  <a href="<?=URL;?>soldering-iron.html">Soldering Iron</a>-->
  <!--  <a href="<?=URL;?>laptop-toolkit.html">Repairing Tools</a>-->
  <!--</div>-->
  <a class="nav-link" href="<?=URL;?>gallery.php">Gallery</a>
  <a class="nav-link" href="<?=URL;?>blog/">Blog</a>
  <a class="nav-link" href="contact.php">Contact Us</a>
  


</div>

<!-- <h2>Animated Sidenav Example</h2>
<p>Click on the element below to open the side navigation menu.</p> -->
<div class="open-button d-block d-md-none">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    <a href="contact.php" class="enquiry mobile_enquiry"><i class="fas fa-envelope"></i> ENQUIRY NOW</a>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "305px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>

<script>
$(document).ready(function(){
$(".dropdown-btn").click(function(){
if($(this).hasClass('active')){
    $(this).removeClass('active');
    $(this).next('div.dropdown-container').css('display','none');
  } else {
      $(".dropdown-btn").removeClass('active'); 
      $("button.dropdown-btn").next('div.dropdown-container').css('display','none');
    $(this).addClass('active');
      $(this).next('div.dropdown-container').css('display','block');
  }
    
});
});


</script>
 
<!-- <div class="content mobile_section bg-red sticky">-->
          
<!--          <nav role="navigation" style=" width:45%;">-->
<!--            <div id="menuToggle">-->
<!--              <input type="checkbox" />-->
<!--                <span></span>-->
<!--                <span></span>-->
<!--                <span></span>-->
<!--            <ul id="menu">-->
<!--              <li class="nav-item">-->
<!--              <a class="nav-link active" aria-current="page" href="<?=URL;?>"><i class="fas fa-home"></i></a>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--              <a class="nav-link" href="<?=URL;?>about.php">ABOUT US</a>-->
<!--            </li>-->
<!--            <li class="nav-item dropdown">-->
<!--              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"-->
<!--                aria-expanded="false">-->
<!--                courses-->
<!--              </a>-->
<!--              <ul class="dropdown-menu " aria-labelledby="navbarDropdown" style="height:500px!important;">-->
<!--                <li><a class="dropdown-item" href="<?=URL;?>laptop-repairing-course.php">Laptop Repairing Course</a></li>-->
<!--                <li><a class="dropdown-item" href="<?=URL;?>mobile-repairing-course.php">Mobile Repairing Course</a></li>-->
<!--                <li><a class="dropdown-item" href="<?=URL;?>led-tv-repairing-course.php">LED TV Repairing Course</a></li>-->
<!--                <li><a class="dropdown-item" href="<?=URL;?>printer-repairing-course.php">Printer Repairing Course</a></li>-->
<!--                <li><a class="dropdown-item" href="<?=URL;?>cctv-training-institute.php">CCTV Repairing Course</a></li>-->
<!--                <li><a class="dropdown-item" href="<?=URL;?>e-vehicle-repairing-course.php">E-Vehicle Repairing Course</a></li>-->
<!--                <li><a class="dropdown-item" href="<?=URL;?>ac-repairing-course.php">AC Repairing Course</a></li>-->
<!--                <li><a class="dropdown-item" href="<?=URL;?>fridge-and-washing-machine.php">Fridge And Washing Machine Repairing Course</a></li>-->
<!--                <li><a class="dropdown-item" href="<?=URL;?>inverter-repairing-course.php">Inverter Repairing Course</a></li>-->
<!--              </ul>-->
<!--</li>-->
<!--<li class="nav-item dropdown">-->
<!--              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"-->
<!--                aria-expanded="false">-->
<!--                online courses-->
<!--              </a>-->
<!--              <ul class="dropdown-menu " aria-labelledby="navbarDropdown" style="height:360px!important;">-->
<!--                <li><a class="dropdown-item" href="<?=URL;?>online-laptop-repairing-course.php">Online Laptop Repairing Course</a></li>-->
<!--                <li><a class="dropdown-item" href="<?=URL;?>online-mobile-repairing-course.php">Online Mobile Repairing Course</a></li>-->
<!--                <li><a class="dropdown-item" href="<?=URL;?>online-led-tv-repairing-course.php">Online LED TV Repairing Course</a></li>-->
<!--                <li><a class="dropdown-item" href="<?=URL;?>online-printer-repairing-course.php">Online Printer Repairing Course</a></li>-->
<!--                <li><a class="dropdown-item" href="<?=URL;?>online-cctv-training-institute.php">Online CCTV Repairing Course</a></li>-->
<!--                <li><a class="dropdown-item" href="<?=URL;?>online-e-vehicle-repairing-course.php">Online E-Vehicle Repairing Course</a></li>-->
<!--              </ul>-->
<!--</li>-->
<!--<li class="nav-item">-->
<!--              <a class="nav-link" href="<?=URL;?>online-laptop-repairing-course.php">Online Courses</a>-->
<!--            </li>-->

<!-- <li class="nav-item">-->
<!--              <a class="nav-link" href="<?=URL;?>gallery.php">Gallery</a>-->
<!--            </li>-->
            
<!--            <li class="nav-item">-->
<!--              <a class="nav-link" href="<?=URL;?>blog.php">Blog</a>-->
<!--            </li>-->
           
<!--            <li class="nav-item">-->
<!--              <a class="nav-link" href="contact.php">Contact Us</a>-->
<!--            </li>-->
<!--            </ul>-->
  
<!--           </div>-->
<!--          </nav>-->
<!--          <a href="contact.php" class="enquiry mobile_enquiry"><i class="fas fa-envelope"></i> ENQUIRY NOW</a>-->
<!--        </div>-->
      <style>
            /*.dropdown-menu{*/
            /* min-height:222px!important;   */
            /*}*/
        </style>
        <script>
            // $(document).ready(function(){
            //     $('.dropdown-menu').css('height','222px');
            // });
        </script>