
<section class="mkfooter fadeInDown nextfooter">
  <div class="container mt-2 text-center">
<p class="col-12 text-center"> Copyrights &copy; 2021 - Multitech Institute Of Advance Technology All Rights Reserved.</p>
  </div>
</section>



<div id="callbook" class="mobile-call">
  <a id="cb_call" class="actioncall" href="tel:7827235949">
    <span style="padding:0 5px 0 0;" class="callbook-icona-telefono"><i class="fa fa-phone"></i></span>
    <span class="callbook-align" style="margin-right: 34px; font-size: 15px;">Call now</span></a>
  <a id="cb_book" class="actionbook" target="_blank" href="https://api.whatsapp.com/send?phone=917827235949&amp;text=Hello%20Multitech&amp;source=&amp;data=">
    <span class="callbook-align" style="margin-left: 34px; font-size: 15px;">WhatsApp</span>
    <span style="padding:0 0 0 5px;" class="callbook-icona-calendario"><i class="fa fa-whatsapp"></i></span></a>
  <div class="callbook_logo"><a id="cb_mail" class="icon" href="mailto:info@multitechinstitute.com?subject=Hi Multitech institute, I am interested in your courses.">
      <div class="callbook-icona-busta-lettera" style="margin-top:7px; margin-left:-27px;text-align:center;"><i class="fa fa-envelope fa-2x" style="color:#fff;"></i></div>
    </a>
  </div>
  <div class="callbook_under"></div>
</div>
<style>
  @media (min-width: 576px) {
    .modal-dialog {
      max-width: 880px !important;
      margin: 1.75rem auto;
      background: #f5f5f5;
      border: 4px solid red;
      border-radius: 4px;
    }

    .modal-dialog.cs-dialog {
      border: 5px solid red;
    }

  }

  .btn-style-one {
    position: relative;
    padding: 11px 34px;
    line-height: 24px;
    color: #ffffff;
    font-size: 15px;
    font-weight: 500;
    background-color: #001f3f;
    border: 2px solid #001f3f;
    text-transform: uppercase;
    transition: 0.5s;
  }

  .btn-style-one:hover {
    background: #ccc;
    color: #001f3f;
    font-weight: bold;
  }

  .modal-header .close {
    padding: 1rem 1rem;
    margin: -1rem -1rem -1rem auto;
  }

  button.close {
    border: 0;
  }

  .cs-modal {
    border: 7px solid red;
  }

  #callbook {
    background: none repeat scroll 0 0 #b50c23;
    bottom: 0;
    height: 48px;
    left: 0;
    position: fixed;
    display: none;
    right: 0;
    z-index: 100;
    -webkit-box-shadow: 0 2px 15px 0 rgba(51, 51, 51, 1);
    -moz-box-shadow: 0 2px 15px 0 rgba(51, 51, 51, 1);
    box-shadow: 0 2px 15px 0 rgba(51, 51, 51, 1);
  }

  @media only screen and (max-device-width: 736px) and (min-device-width: 320px) {
    #callbook {
      display: inline !important;
    }

  }

  .seocrawler-body * {
    border-color: #e6e6e6;
  }

  #callbook>a {
    z-index: 300;
    float: left;
    height: 48px;
    line-height: 50px;
    text-align: center;
    width: 50%;
    text-decoration: none;
    font-size: 1.2em;
    text-transform: capitalize;
    color: #fff;
  }

  .callbook_logo {
    background-size: 100%;
    bottom: -24px;
    height: 72px !important;
    left: 50%;
    margin-left: -23px;
    position: absolute;
    width: 72px !important;
    z-index: 2;
  }

  .callbook_under {
    background: #185da2;
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
</style>
<style>
  .modal-header {
    border-bottom: 0px;
  }

  .modal-content,
  .form-control {
    border-radius: 0px;
  }

  input::placeholder,
  textarea::placeholder {
    font-size: 16px;
    color: #333333 !important;
  }

  .download-btn {
    background: rgb(226, 20, 22);
    color: rgb(255, 255, 255);
    margin-top: 15px;
    border: 0px;
    padding: 13px 23px;
    border-radius: 50px;
  }

  .download-btn:hover {
    background-color: #ca2b2b;
    color: #ffffff;
  }

  .zoom_ot {
    transition: transform 0.5s ease;

  }
</style>

<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/boostrap/js/all.min.js"></script>
<script src="assets/boostrap/js/jquery.transit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="assets/js/custom.js"></script>
<script type="text/javascript">
  var i = 0;

  function blinker() {
    if (i == 0) {
      $('.zoom_ot').css({
        'transform': 'scale(' + 1.1 + ')'
      });
      i = 1;
    } else {
      $('.zoom_ot').css({
        'transform': 'scale(' + 1 + ')'
      });
      i = 0;
    }
  }
  var model_click = 0
  setInterval(blinker, 700); //Runs every second

  var delayInMilliseconds = 8000; //1 second
  setTimeout(function() {
    $(document).ready(function() {
      model_click = 1
      $('#staticBackdrop').removeClass('show');
      $('#staticBackdrop').fadeOut();
      $('#enqload').addClass('show');
      $('#enqload').css('background-color', '#3336');
      $('#enqload').css('display', 'block');
      $('.close').click(function() {
        $('#enqload').css('display', 'none');
      });
    });

  }, delayInMilliseconds);
  $('.download_prospect').on('click', function(e) {
    e.preventDefault()
    if (model_click == 1) {
      $('#staticBackdrop').addClass('show');
      $('#staticBackdrop').css('display', 'block');
      $('#staticBackdrop').css('background-color', '#3336');
      $('#enqload').removeClass('show');
      $('#enqload').css('display', 'none');
    }
  })
  $('.btn-close').click(function() {
    $('#staticBackdrop').removeClass('show');
    $('#staticBackdrop').css('display', 'none');
    $('#staticBackdrop').css('background-color', 'none');
  });
  $('#donload_prospect_form').submit(
    function(e) {
      e.preventDefault();
      data = $('#donload_prospect_form').serialize()
      $.ajax({
        url: './thankyou/prospect.php',
        type: 'POST',
        data: data,
        beforeSend: function() {
          fileName = "<?= isset($doc) ? $doc : "Laptop-Repairing-syllabus-HO.docx" ?>"
          link2 = './assets/media/docfiles/'.fileName
          var link = document.createElement('a');
          link.href = link2;
          link.download = fileName;
          link.click();
          link.remove();
          $('#donload_prospect_form')[0].reset();
          $('#staticBackdrop').removeClass('show');
          $('#staticBackdrop').css('display', 'none');
          $('#staticBackdrop').css('background-color', 'none');
        },
        success: function(data) {
          $('#recent_blog').html(data);
          // console.log(data);
        }
      })
    }
  )
</script>
<style>
  @media(max-width:768px) {
    .dropdown:hover .dropdown-menu {
      max-height: 350px !important;
      opacity: 1;
    }
  }
</style>

<!-- Modal -->
<div class="modal show" id="enqload" style="padding-right: 17px; " tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog cs-dialog" style="border: 5px solid red">
    <div class="modal-content" style="background: #f5f5f5;">
      <div class="modal-header">
        <div class="col-md-10" style="font-weight:bolder; text-align:center; font-size:15px; color:#003366; letter-spacing:1px; text-decoration:underline" align="center">LAPTOP | MOBILE | PRINTER | LED TV | CCTV</div>
        <button type="button" class="close" data-dismiss="modal" style="background: red;color: #fff;opacity: 1;">×</button>
      </div>
      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
          <div class="col-md-4 for-desktop">
            <div class="align-middle" style="text-align:center;">
              <img src="https://www.multitechinstitute.com/images/logo.webp" style="width:90%; margin-bottom:30px;border-radius:0px;" class="clsmob"><br>
              GET SPECIAL DISCOUNT
              <!--<h2 style="color:#FF0000; font-size:75px;line-height:65px; font-family:fantasy;"><blink>20%</blink></h2>--><br>
              <strong style="color:#cecece; " class="clsmob">*THIS OFFER VALID FOR A LIMITED PERIOD</strong>

            </div>
          </div>
          <div class="col-md-8">

            <div class="row" style="border-left:1px solid #ccc;">

              <div class="col-md-12" style="text-align:justify;">
                Multitech Institute आपके बेहतर भविष्य के लिये Technical Experts के द्वारा लेटेस्ट टेकनिकल मशीनों से
                एडवान्स लेवल का रिपेयरिगं कोर्स कराता है। कोर्स और ट्रेनिंग के बारे में जानें !</div>
              <div class="col-md-12">
                <h5 class="modal-title" style="text-align: left;font-weight:bold; color:#FF0000; letter-spacing:0px;">
                  ENQUIRY NOW</h5>
              </div>

              <div class="modal-body p-0">
                <form action="thankyou/popup.php" method="post" class="contact-form" onsubmit="return validate();">
                  <div class="row clearfix" style="padding-left:15px; padding-right:15px;">
                    <input type="hidden" value="Mail From Common Popup" name="mail_from" />
                      <input type='hidden' name="page" value="<?= $landingpage ?>"/>
                    <div class="col-md-12 col-sm-6 col-xs-12 form-group">
                      <input type="text" name="name" placeholder="Your Full Name" required="" class="form-control">
                    </div>

                    <div class="col-md-12 col-sm-6 col-xs-12 form-group">
                      <input type="number" name="phone" min="6555555555" max="9999999999" placeholder="Mobile No." required="" class="form-control">
                    </div>
                    <div class="col-md-12 col-sm-6 col-xs-12 form-group">
                      <input type="text" name="fcourse" placeholder="Course" required="" class="form-control">
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-group" align="left">
                    <input name="submit" type="submit" value="send message" class="theme-btn btn-style-one">
                    </div><br>
                  </div>
                </form>
              </div>

            </div>

          </div>
        </div>
      </div>


    </div>
  </div>
</div>



<style>
  .vicky-menu {
    min-height: 333px !important;
  }
</style>
<?php
if (isset($_GET['url'])) {
?>
  <script>
    $(document).ready(function() {
      function loadsidebar(ids) {
        var url = window.location.href;
        var filename = url.substring(url.lastIndexOf('/') + 1);
        var cat = "<?php echo $cat ?>";
        $.ajax({
          url: '../common/load_recent_blog.php',
          type: 'POST',
          data: {
            id: ids,
            cat: cat,
            filename: filename
          },
          success: function(data) {
            $('#recent_blog').html(data);
            // console.log(data);
          }
        })
      }
      loadsidebar();
      $('#form1').keyup(function() {
        let id = $('#form1').val();
        loadsidebar(id);
      })



    })
  </script>
<?php } ?>
</body>

</html>