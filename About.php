<?php
	if(isset($_GET['r'])){
		$r=$_GET['r'];
		if($r=="success"){
			$message= "<fieldset>";
			$message.= "<div id='success_page'>";
			$message.= "<p class='alert alert-success'>شكرا ، سيتم التواصل معكم لاحقا في حال الموافقة من أجل الحصول على معلومات إضافية</p>";
			$message.= "</div>";
			$message.= "</fieldset>";
		}
		else if($r=="fail"){
			$message= "<fieldset>";
			$message.= "<div id='success_page'>";
			$message.= "<p class='alert alert-danger'>حدث خطأ أثناء إرسال طلبك الرجاء المحاولة مرة أخرى</p>";
			$message.= "</div>";
			$message.= "</fieldset>";
		}
	}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="keywords" content="تثمين تقييم عقاري، تسويق، ادارة املاك، الخبر، الدمام، الشرقية">
<? include("includes/header.php")?>	
	<section class="post-wrapper-top jt-shadow clearfix">
		<div class="container rtl txt-right">
			<div class="col-lg-12">
				<h2>من نحن</h2>
			</div>
		</div>
	</section><!-- end post-wrapper-top -->


	<section class="white-wrapper jt-shadow">
    	<div class="container rtl txt-right">
       	 	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            	<div class="widget">
                    <p>لقد تم تأسيس سدنة الأرض بهدف إيجاد ورسم أقصر الطرق وأيسرها بين العملاء و أهدافهم العقارية من خلال أساليبها المتقدمة في 

مجال التسويق العقاري المدعم بالخبرة والمعرفة التامة بالسوق العقارية .<br/><br/>

سدنة الأرض تساهم بكل طاقتها وبكل كفاءة في دفع عجلة التطوير العقاري في المملكة العربية السعودية من خلال إيجاد الفرص 

للمستثمرين العقاريين والمشاركة في عمل الدراسات والبحوث المتعلقة بتلك الفرص .<br/><br/>

سدنة الأرض تأخد في مقدمة اهتماماتها تطوير وتدعيم المشاريع العقارية والسياحية بالإضافة إلى المساهمات في الشركات التنموية 

والصناعية والمالية المتنوعة.<br/><br/>

كما أن نشاط الإستثمار فيها يرتكز على مبادئ وأسس قوية قادرة على المنافسة والتميز في جميع المجالات العقارية والتي تهدف إلى 

تسهيل جميع الوسائل المؤدية لتحقيق أهداف العملاء على جميع المستويات .<br/><br/><br/><br/></p>
                </div><!-- end widget -->
            </div><!-- end col-lg-6 -->
            

		</div><!-- end container -->
    </section><!-- end white-wrapper -->


<? include("includes/footer.php")?>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.jigowatt.js"></script>
  <script src="js/custom.js"></script>
<script type="text/javascript">
$(function () {
  $('#contactform3').parsley().on('field:validated', function() {
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