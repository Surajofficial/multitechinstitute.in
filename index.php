<?php

$metaData = array(
'title'		  =>'Multitech Institute | Mobile Repairing Training Institute',
'description' =>'Multitech Institute is the best Laptop repairing institute in Delhi. We give practical-based classes for Smart Tv,Laptop and Mobile repairing courses.',
'keywords'	  =>'laptop repairing course, laptop repairing institute, mobile repairing institute, mobile repairing course, smart tv repairing course, mobile repairing course in delhi, mobile repairing institute in delhi, mobile repairing institute in tilaknagar, mobile repairing course in tilaknagar, laptop repairing course in delhi, laptop repairing institute in delhi, smartphone repairing course, smartphone repairing institute, macbook repairing course, macbook repairing institute, iphone repairing course, iphone repairing institute',
'canonical'	=> 'https://www.multitechinstitute.in'	,
);
$Course_Json = file_get_contents('data/home_course.json');
$Courses =  json_decode($Course_Json,true);
include('common/header.inc.php');
include('common/slider.inc.php');
?>
<section class="bg-service pt-md-5 pb-1">
    <center class="pb-md-5"> <h1 class="whychoose">Our Course<!--<span>Featured Courses</span>--></h1>
  	  <!--<div class="sep_mks"></div>-->
    </center>
    <div class="container">
        <div class="row">
			<?php foreach($Courses as $cours){?>
                <div class="col-md-4 pb-5 pb-3 px-3">
               	 <?php include("common/course-card.inc.php"); ?>
                </div>
            <?php } ?>
        </div>
    </div>
    <!--<div class="btns mb-5">
        <button type="button" class="btn btn-default" style="background: #e21416;
        color: #fff;"><a href="<?php echo URL;?>courses.php" style="text-decoration:none; color:#fff;">VIEW ALL COURSES <i class="fas fa-arrow-alt-circle-right"></i></a></button>
    </div>-->
</section>
<?php include('common/whychoose.inc.php'); ?>
<div class="container py-md-4 pt-md-5">
        <div class="row">
          <div class="col-lg-8 content wow fadeInUp pt-md-4">
            <h1 align="left"> LAPTOP REPAIRING INSTITUTE MULTITECH </h1>
            <p style="text-align:justify;">
              Multitech institute of advance technology is a service provider of quality based training and best
              education for electronic devices like Laptops, Desktop, Mobile Phone, printers, CCTV, Led TV etc. We give
              faulty laptops, mobiles, printers and other devices to our students for practice of repairing in our smart
              lab. With an emphasis on giving super training and full time support, our training institute experts are
              focused on reliability and trust with all students. After completing your schooling if you are looking for
              institute to join Laptop repairing courses then don’t get tensed and contact us now to join laptop
              repairing course. As we all know how that computer is combination of hardware and software but what if
              it’s one part stops working suddenly. This can be happen anytime as electronic devices are prone to get
              damaged.
            </p>
            <h2>LAPTOP REPAIRING COURSE</h2>
            <p style="text-align:justify;">Training structure of the Multitech institute is dedicated for the promotion
              of excellence in the technical sector like laptop repairing course. Students are well placed in reputed
              company after completing laptop repairing course program and also started their own business in low
              investment. The vision of Multitech is to establish so many chip level, hardware and software engineers in
              IT sector. We provide best education and training for Chip level repairing courses.
            </p>

          </div>
    <div class="col-lg-4 about-img wow fadeInUp">
 	   <?php include("common/enquiry.inc.php");?>
    </div>
</div>
</div>
<section class="bgmk">
    <div class="container mt-0 mt-md-5">
		<div class="row">
        	<div class="col-md-6 text-left">
            	 <h2 class="whychoose color-red" style="font-weight:400;">Enroll now for our<br><span class="color-white" style="font-weight:400;">Featured Courses</span></h2>
      <div class="sep_mks border-white" style="margin-left:0px;"></div>
      <p class="color-white">Multitech Institute believes in quality not in quantity. So we focus on total practical based training for our students. We arrange always seminars and doubts classes for our students by technical experts. Multitech Institute always tries to create technical engineers network in India. We repair all types of LED TV and Smart TV in our Lab. We give training to our students for laptop chip level repairing course. In our Lab you will get latest and advance machine for repairing. We provide training to our students on these leatest machine.</p>
      <div class="btn-section">
      <a href="tel:+91-8800485390" class="btn btn-default2"><i class="fas fa-phone-alt"></i> CALL NOW</a>&nbsp;&nbsp;&nbsp;<a href="https://www.multitechinstitute.in/contact.php" class="btn btn-default"><i class="fas fa-paper-plane"></i> ENQUIRY NOW</a></div>
      
            </div>
            <div class="col-md-6 text-center">
             <a href="https://bit.ly/multitechinstitute" target="_blank"><img src="assets/media/videothumbnail.jpg" style="width:100%;"></a>
 <!-- <iframe class="lazy" height="409" width="727" src="https://www.youtube.com/embed/e0W5zzjZW68" frameborder="0" style="width:90%; margin-top:65px;" allowfullscreen></iframe>
              <iframe width="727" height="409" src="https://www.youtube.com/embed/e0W5zzjZW68" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" style="width:90%; margin-top:65px;" allowfullscreen></iframe>-->
            </div>
        </div>    
    </div>
</section>

      
</div>
<?php include("common/award.inc.php");?>
<?php include("common/testimonial.inc.php");?>
<?php include("common/subscribe.inc.php");?>
<?php include('common/footer.inc.php');?>