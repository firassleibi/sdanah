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
<meta name="keywords" content="تثمين تقييم عقاري، تسويق، ادارة املاك، الخبر، الدمام، الشرقية، التسويق العقاري">
<meta name="description" content="لدينا فريق عمل احترافي يقوم بحصر جميع الطلبات والعروض وتصنيفها ومن ثم عرضها على العملاء حسب رغباتهم .">
<? include("includes/header.php")?>	
	<section class="post-wrapper-top jt-shadow clearfix">
		<div class="container rtl txt-right">
			<div class="col-lg-12">
				<h2>التسويق العقاري</h2>
			</div>
		</div>
	</section><!-- end post-wrapper-top -->


	<section class="white-wrapper jt-shadow">
    	<div class="container rtl txt-right">
       	 	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            	<div class="widget">
                    <p>يعتبر التسويق العقاري النواة الفعلية للبيع والشراء وهو العامل الرئيسي للنمو ، حيث أنه وبدون التسويق الإحترافي الجيد لا يمكن 

التمييز بين مزايا وعيوب العقار المراد شراؤه أو استئجاره  .ونحن هنا في سدنة الأرض نفخر بتقديم خدماتنا التسويقة مدعمة 

بالأمكانيات البشرية من خلال وجود فريق عمل احترافي يقوم بحصر جميع الطلبات والعروض وتصنيفها ومن ثم عرضها على العملاء 

حسب رغباتهم ، وكذلك الإمكانيات التقنية من خلال العمل بواسطة برامج متقدمة للوصول إلى رغبات العميل في أقصر وقت ممكن مع 

العلم أن فريق سدنة الأرض لا يكترث بما يتطلبه البحث من جهد .
<br/><br/>
لقد كان لسدنة الأرض الفضل بعد فضل الله تعالى في إتمام العديد من الصفقات العقارية في المنطقة الشرقية ومنطقة الرياض على 

مستوى الأفراد وكذلك الشركات والمؤسسات .</p>
                </div><!-- end widget -->
            </div><!-- end col-lg-6 -->
            
        	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            	<div class="widget">
                	<h3>لتقديم الطلب املأ بياناتك <span>هنا</span>   وللإستفسار الإتصال على الأرقام     0569565333          0534477443</h3>
                    <div id="message"></div>
                
                <div class="bs-callout bs-callout-warning hidden">
  
  <p class="alert alert-warning">الرجاء ملأ الحقول المحددة.</p>
</div>
	<? if(isset($message)) echo $message; else{ ?>
      				<form  id="contactform3" action="contact3.php" name="contactform3" method="post" data-parsley-validate="" enctype="multipart/form-data">
                    				<div class="form-group">
                                    <select name="type" id="type" class="form-control" required>
                                    	<option disabled selected>اختر النوع</option>
                                    	<option>بيع</option>
                                        <option>شراء</option>
                                        <option>تأجير</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    
                                    <input name="name" type="text" class="form-control" id="name" placeholder="الاسم" required>
                                  </div>
                                  <div class="form-group">
                                    
                                    <input name="phone" type="text" class="form-control" id="phone" placeholder="رقم الهاتف" required>
                                  </div>
                                  <div class="form-group">
                                   
                                    <input name="email" type="email" class="form-control" id="email" placeholder="البريد الإلكتروني" required>
                                  </div>
            						<div class="form-group">
                                 
                                    <input name="ptype" type="text" class="form-control" id="ptype" placeholder="نوع العقار" required>
                                  </div>
                                  <div class="form-group">
                               
                                    <input name="ltype" type="text" class="form-control" id="ltype" placeholder="موقع العقار" required>
                                  </div>
                                  <div class="form-group">
                                  <input name="price" type="text" class="form-control" id="price" placeholder="السعر" required>
                                  </div>
                                  <div class="form-group">
                               
                                    <textarea name="description" type="text" class="form-control" id="description" style="height:200px" placeholder="وصف العقار" data-parsley-minlength="30" required></textarea>
                                  </div>
                                  <div class="form-group">
                               		<label>ملفات مرفقة (اختياري)</label>
                                    <input type="file" class="filestyle" name="attach[]" id="attach[]" multiple>
                                    <label style="font-size:14px;margin-top:6px;font-weight:100;width:100%" class="alert alert-warning">الملفات المسموحة : <span style="font-weight:bold;" >pdf, doc, docx, gif, jpeg, jpg, png, rtf, txt</span></label>
                                  </div>
                                  <button type="submit" value="SEND" id="submit" class="btn btn-lg btn-primary pull-right">إرسال الطلب</button>
                                </form>
                                <? } ?>
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