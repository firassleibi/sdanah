<!DOCTYPE html>
<html lang="en">
<head>
<meta name="description" content="أهلا وسهلا بك في صفحة تواصل معنا، نهدف من هذه الصفحة تسهيل التواصل بين زوار سدنة الأرض و إدارة الموقع، إذا كان لديك أسئلة أو استفسارات أو اقتراحات تطوير ، أو أمور إدارية فيمكنك أن تراسلنا على هذا الاستمارة.">
<meta name="keywords" content="تثمين تقييم عقاري، تسويق، ادارة املاك، الخبر، الدمام، الشرقية ، اتواصل معنا">
<? include("includes/header.php")?>	
	<section class="post-wrapper-top jt-shadow clearfix">
		<div class="container">
			<div class="col-lg-12 txt-right rtl">
				<h2>تواصل معنا</h2>
			</div>
		</div>
	</section><!-- end post-wrapper-top -->

    <section class="white-wrapper">
        <div class="container rtl">
            <div class="general-title">
                <p class="lead">أهلا وسهلا بك في صفحة تواصل معنا، نهدف من هذه الصفحة تسهيل التواصل بين زوار سدنة الأرض و إدارة الموقع، إذا كان لديك أسئلة أو استفسارات أو اقتراحات تطوير ، أو أمور إدارية فيمكنك أن تراسلنا على هذا الاستمارة.</p>
                <p style="font-size:16px;color:#841416">أو بإمكانك الاتصال على أحد الأرقام التالية: 0569565333 - 0534477443</p>
            </div><!-- end general title -->    
            <div class="contact_form">
                <div id="message"></div>
                
                <div class="bs-callout bs-callout-warning hidden">
  
  <p class="alert alert-warning">الرجاء ملأ الحقول المحددة.</p>
</div>


            <form id="contactform" action="contact.php" name="contactform" method="post" data-parsley-validate="">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 rtl">
					<input type="text" name="name" id="name" class="form-control" placeholder="الاسم" required> 
					<input type="text" name="phone" id="phone" class="form-control" placeholder="رقم الهاتف" required>
					<input type="email" name="email" id="email" class="form-control" placeholder="البريد الإلكتروني" required> 
                    <input type="text" name="city" id="city" class="form-control" placeholder="المدينة" required>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					  
                    <select class="form-control" name="ctype" id="ctype" required>
                    	<option selected disabled>نوع التواصل</option>
                        <option>استفسار</option>
                        <option>اقتراح</option>
                        <option>طلب</option>
                        <option>شكوى</option>
                        <option>الدعم الفني</option>
                        <option>أخرى</option>
                    </select> 
					<textarea class="form-control" name="comments" id="comments" rows="15" placeholder="نص الرسالة" style="height:206px !important" data-parsley-minlength="30" required></textarea>
					<button type="submit" value="SEND" id="submit" class="btn btn-lg btn-primary pull-right">إرسال</button>
				</div>
            </form>    
            </div><!-- end contact-form -->
        </div><!-- end container -->
	</section><!-- end map wrapper -->

        <div class="clearfix"></div>
    	<div id="map"></div>
        <div class="clearfix"></div>

	<section id="one-parallax" class="parallax" style="background-image: url('images/bg2.jpg');" data-stellar-background-ratio="1" data-stellar-vertical-offset="20">
		<div class="overlay">
            <div class="container">
                <div class="row padding-top margin-top">
                    <div class="contact_details">
                        <div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
                            <div class="text-center">
                                <div class="wow swing">
                                    <div class="contact-icon">
                                        <a href="#" class=""> <i class="fa fa-map-marker fa-3x"></i> </a>
                                    </div><!-- end dm-icon-effect-1 -->
                                     <p>العقربية، شارع 16<br>
                                    الخبر، المملكة العربية السعودية</p>
                                </div><!-- end service-icon -->
                            </div><!-- end miniboxes -->
                        </div><!-- end col-lg-4 -->
                        
                        <div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
                            <div class="text-center">
                                <div class="wow swing">
                                    <div class="contact-icon">
                                        <a href="#" class=""> <i class="fa fa-phone fa-3x"></i> </a>
                                    </div><!-- end dm-icon-effect-1 -->
                                     <p style="direction:rtl !important" class="english"><strong>966569565333+<br>
                                    966534477443+</p>
                                </div><!-- end service-icon -->
                            </div><!-- end miniboxes -->
                        </div><!-- end col-lg-4 -->  
        
                        <div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
                            <div class="text-center">
                                <div class="wow swing">
                                    <div class="contact-icon">
                                        <a href="#" class=""> <i class="fa fa-envelope-o fa-3x"></i> </a>
                                    </div><!-- end dm-icon-effect-1 -->
                                     <p class="english">master@sdanah.com</p>
                                </div><!-- end service-icon -->
                            </div><!-- end miniboxes -->
                        </div><!-- end col-lg-4 -->                  
                    </div><!-- end contact_details -->
                </div><!-- end margin-top --><br><br>
            </div><!-- end container -->
        </div><!-- end overlay -->
    </section><!-- end map wrapper -->
<? include("includes/footer.php")?>
        

  <script src="js/wow.min.js"></script>
  <script src="js/jquery.jigowatt.js"></script>
  <script src="js/custom.js"></script>

  <!-- Google Map -->
  <script type="text/javascript">
	(function($) {
	  "use strict";
		var locations = [
		['<div class="infobox"><h3 class="title"><a href="about1.html">OUR USA OFFICE</a></h3><span>NEW YORK CITY 2045 / 65</span><br>+90 555 666 77 88</p></div></div></div>', 26.293085, 50.1944927, 2]
		];
	
		var map = new google.maps.Map(document.getElementById('map'), {
		  zoom: 16,
			scrollwheel: false,
			navigationControl: true,
			mapTypeControl: false,
			scaleControl: false,
			draggable: true,
			styles: [ { "stylers": [ { "hue": "#000" },  {saturation: -100},
                {gamma: 0.50} ] } ],
			center: new google.maps.LatLng(26.293085, 50.1944927),
		  mapTypeId: google.maps.MapTypeId.ROADMAP
		});
	
		var infowindow = new google.maps.InfoWindow();
	
		var marker, i;
	
		for (i = 0; i < locations.length; i++) {  
	  
			marker = new google.maps.Marker({ 
			position: new google.maps.LatLng(locations[i][1], locations[i][2]), 
			map: map ,
			icon: 'images/marker.png'
			});
	
	
		  google.maps.event.addListener(marker, 'click', (function(marker, i) {
			return function() {
			  infowindow.setContent(locations[i][0]);
			  infowindow.open(map, marker);
			}
		  })(marker, i));
		}
	})(jQuery);
  </script>
  
<script type="text/javascript">
$(function () {
  $('#contactform').parsley().on('field:validated', function() {
    var ok = $('.parsley-error').length === 0;
    $('.bs-callout-info').toggleClass('hidden', !ok);
    $('.bs-callout-warning').toggleClass('hidden', ok);
  })
  .on('form:submit', function() {
    return true; // Don't submit form for this demo
  });
});
</script>

  </body>
</html>

<!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
_atrk_opts = { atrk_acct:"p7QWm1a4KM+2uP", domain:"sdanah.com",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=p7QWm1a4KM+2uP" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->  