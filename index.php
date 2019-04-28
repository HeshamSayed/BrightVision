<!DOCTYPE html>

<html lang="en">

<head>

	<!-- Html Page Specific -->
	<meta charset="utf-8">
	<title>RAYzz - App Landing Page</title>
	<meta name="description" content="RAY - App Landing Page">
	<meta name="author" content="Multifour | multifour.com">

	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

	<!--[if lt IE 9]>
    <script type="text/javascript" src="scripts/html5shiv.js"></script>
<![endif]-->

	<!-- CSS -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" href="css/simple-line-icons.css" />
	<link rel="stylesheet" href="css/icomoon-soc-icons.css" />
	<link rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="css/style.css" />

	<!-- Favicons -->
	<link rel="icon" href="images/favicon.png">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	<style>
		
		.mfp-fade.mfp-bg {
			opacity: 0;
			-webkit-transition: all 0.15s ease-out; 
			-moz-transition: all 0.15s ease-out; 
			transition: all 0.15s ease-out;
		}
		.mfp-fade.mfp-bg.mfp-ready {
			opacity: 0.8;
		}
		.mfp-fade.mfp-bg.mfp-removing {
			opacity: 0;
		}

		.mfp-fade.mfp-wrap .mfp-content {
			opacity: 0;
			-webkit-transition: all 0.15s ease-out; 
			-moz-transition: all 0.15s ease-out; 
			transition: all 0.15s ease-out;
		}
		.mfp-fade.mfp-wrap.mfp-ready .mfp-content {
			opacity: 1;
		}
		.mfp-fade.mfp-wrap.mfp-removing .mfp-content {
			opacity: 0;
		}
	</style>
</head>

<body data-spy="scroll" data-target=".navMenuCollapse">

	<!-- PRELOADER -->
	<div id="preloader">
		<div class="battery inner">
			<div class="load-line"></div>
		</div>
	</div>

	<div id="wrap">

		<!-- NAVIGATION BEGIN -->
		<nav class="navbar navbar-fixed-top navbar-slide">
			<div class="container_fluid">
				<a class="navbar-brand goto" href="index.html#wrap"> <img src="./images/logo_nav.png" alt="Your logo"
						height="27" width="56" /> </a>
				<a class="contact-btn icon-envelope" data-toggle="modal" data-target="#modalContact"></a>
				<button class="navbar-toggle menu-collapse-btn collapsed" data-toggle="collapse"
					data-target=".navMenuCollapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span> </button>
				<div class="collapse navbar-collapse navMenuCollapse">
					<ul class="nav">
						
				
						<li><a href="#news">الاخبار</a></li>
						<li><a style="cursor: pointer;" data-toggle="modal" data-target="#modalContact1">التدريب والتوظيف</a></li>
						<li><a style="cursor: pointer;" data-toggle="modal" data-target="#modalContact">اتصل بنا</a></li>
						<li><a href="#testimonials">فريق العمل</a></li>
						<li><a href="#screenshots">اعمالنا</a></li>
						<li><a href="#benefits1">القسم الفنى</a></li>
						<li><a href="#features">القسم التقنى</a></li>
						<li><a href="#full-intro">الرئيسيه</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- NAVIGAION END -->



		<!-- INTRO BEGIN -->
		<header id="full-intro" class="intro-block bg-color-main">
			<div class="ray ray-vertical y-100 x-50 ray-rotate-135 laser-blink hidden-sm hidden-xs"></div>
			<div class="ray ray-horizontal y-25 x-0 ray-rotate-45 laser-blink hidden-sm hidden-xs"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12">
						<h1 class="logo" src="./images/logo.png" alt="Your Logo" height="70" width="144"></h1>
						<h1 class="slogan">ENGAGE, INTERACT, IMMERSE
						</h1>
					</div>
					<div class="col-md-4 hidden-sm hidden-xs">

					</div>
				</div>
			</div>
			<div class="block-bg" data-stellar-ratio="0.4"></div>
		</header>
		<!-- INTRO END -->



				<!-- FEATURES BEGIN -->
	<section id="features" class="img-block-3col">
		<div class="container">
			<div class="title">
				<h2>خدماتنا</h2>
		
			</div>
			<div class="row">
				<div class="col-sm-4">
					<ul class="item-list-right item-list-big">
						<li class="wow fadeInLeft">
						

							<img class="icon" src="images/icons/gaming.png" style="display:inline-block;" />
							<h4>الواقع المعزز</h4>
							<p>اضافه عناصر ومحتوى رقمى اضافى الى العالم الحقيقى</p>
						</li>
						<li class="wow fadeInLeft">
								<img class="icon" src="images/icons/military.png"  style="display:inline-block;" />
							<h4>استضافه المواقع والدعم الفنى</h4>
							<p>نحن نهتم بموقع الويب الخاص بك حتى بعد انهاء العمل مباشرة</p>
						</li>
						<li class="wow fadeInLeft">
							<img class="icon" src="images/icons/vrgears.png" style="display:inline-block;" />
							<h4>تطوير المواقع الالكترونيه</h4>
							<p>نحن نجمع بين افضل ممارسات المعرفه الرقميه مع خبرتنا فى تصميم المواقع</p>

						</li>
						<li class="wow fadeInLeft">
								<img class="icon" src="images/icons/military.png"  style="display:inline-block;" />
							<h4>استضافه المواقع والدعم الفنى</h4>
							<p>نحن نهتم بموقع الويب الخاص بك حتى بعد انهاء العمل مباشرة</p>
						</li>
					</ul>
				</div>
				<div class="col-sm-4 col-sm-push-4">
					<ul class="item-list-left item-list-big">
						<li class="wow fadeInRight">
								


							<img class="icon" src="images/icons/healthcare.png"  style="display:inline-block;" />
							<h4>الواقع الافتراضى</h4>
							<p>تجسيد بيئه افتراضيه بالكامل مشابهة للحقيقه</p>
						</li>
						<li class="wow fadeInRight">
								


								<img class="icon" src="images/icons/healthcare.png"  style="display:inline-block;" />
								<h4>الواقع الافتراضى</h4>
								<p>تجسيد بيئه افتراضيه بالكامل مشابهة للحقيقه</p>
							</li>
						<li class="wow fadeInRight">
						
							<img class="icon" src="images/icons/reviewed-and-rated.png" style="display:inline-block;" />
								<h4>تصميم المواقع الالكترونيه</h4>
								<p>ان التصميم الجيد هو اساس عمل اى موقع انترنت ﻵنه يشكل عامل الجذب</p>
						</li>
						<li class="wow fadeInRight">
						
							<img class="icon" src="images/icons/education.png"  style="display:inline-block;" />
								<h4>التسويق الالكترونى</h4>
								<p>التسويق الالكترونى هو تسويق خدمه او منتج او موقع عبر الانترنت</p>
						</li>
					</ul>
				</div>
				<div class="col-sm-4 col-sm-pull-4">
					<div class="animation-box wow bounceIn">
					 	<img class="highlight-left wow" src="images/light.png" height="192" width="48" alt="" />
						<img class="highlight-right wow" src="images/light.png" height="192" width="48" alt="" />
						<img class="screen" src="images/imgvr.png" alt="" height="581" width="300" />
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- FEATURES END --> 



		<!-- FEATURES BEGIN -->
		<section id="innovations" class="bg-color2">
			<div class="container">
				<div class="title">
					<h2>Bright vision ما تقدمه </h2>
					<p>
							توفر الرؤيه الساطعه حلولًا تفاعلية، وتستخدم أحدث التقنيات كالواقع الافتراضي والواقع المعزز و غيرها.
						<br>
						كما تعمل على تطوير طرق التواصل ونقل المعرفة في كافة القطاعات والصناعات	
					</p>
				</div>
				<img class="screen wow bounceInUp" src="images/gear-vr_phoneplus_new_vr_img.png" height="387"
					width="800" alt="" />
			</div>
			<div id="ray1" class="ray ray-horizontal"></div>
			<div id="ray2" class="ray ray-horizontal"></div>
			<div id="ray3" class="ray ray-horizontal"></div>
			<div id="ray4" class="ray ray-horizontal"></div>
		</section>
		<!-- FEATURES END -->



		<!-- BENEFITS1 BEGIN -->
		<section id="benefits1" class="img-block-2col">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="title">
							<h2>خطواتنا نحو المستقبل</h2>
						</div>

						<ul class="item-list-left">
							<li>
								<i class="icon icon-picture color"></i>
								<h4 class="color">التعليم</h4>
								<p>يعيش الطالب المنهج التعليمي من خلال بيئة افتراضية بالكامل مشابهة للحقيقة، قائمة على الاكتشاف والتفاعل في جو من المغامرة والترفيه، مما يجعل المعلومة أكثر بساطة وأكثر ثباتا.</p>
							</li>
							<li>
								<i class="icon icon-equalizer color"></i>
								<h4 class="color">التدريب</h4>
								<p>صناعة بيئة متكاملة وآمنة للموظفين الجدد للحصول على تدريب عملي بدرجة عالية من الواقعية لاكتساب الخبرات اللازمة قبل البدء في العمل.</p>
							</li>
							<li>
								<i class="icon icon-bar-chart color"></i>
								<h4 class="color">التسويق</h4>
								<p>نجذب جمهورك لعلامتك التجارية من خلال تجربة تفاعلية من الواقع الافتراضي، يستمتع المعزز بها ويستفيد منها الفئة المستهدفة.</p>
							</li>
							<li>
								<i class="icon icon-equalizer color"></i>
								<h4 class="color">الترفيه</h4>
								<p>تقديم الترفيه بمحتوى فريد من خلال نقل الجمهور إلى تجربة الألعاب الممتعة المليئة بالتجارب والمغامرات بأحدث التقنيات للواقعين الافتراضي
										بدلا من العروض الثابتة المملة (AR) والمعزز  (VR).</p>
							</li>
						</ul>
					</div>






					<div class="col-md-5 col-md-offset-1 col-sm-6">
						<div class="screen-couple-right wow fadeInRightBig">
							<div class="flare">
								<img class="base wow" src="images/flare_base.png" alt="" />
								<img class="shapes wow" src="images/flare_shapes.png" alt="" />
							</div>
							<img class="screen above" src="images/gearside.png" alt="" height="300" width="430" />

						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- BENEFITS1 END -->




		<!-- BENEFITS2 BEGIN -->
		<section id="benefits2" class="img-block-2col bg-color2">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-push-6">
						<div class="title">
							<h2>القلب</h2>
						</div>
						<p>أن تعرض الواقع في شكل افتراضي، وأن تستطيع أن تشعر بالبيئة الافتراضية وكأنك في البيئة الحقيقية، هذا يعني أننا نتحدث عن عالم وتقنيات “الواقع الافتراضي Virtual Reality”. معلوم أن الإنسان يتعرف على البيئة المحيطة به من خلال حواسه الخمس، والتي تتمثل في (النظر، والسمع، واللمس، والشم، والتذوق). وبحسب دراسة نشرت عام 1996م فإن المعلومات التي تمر للدماغ البشري “للبالغين” تتوزع على الحواس الخمس كالتالي: البصر 70%، والسمع 20%، واللمس 4%، والشم 5%، والتذوق 1%.</p>
						<p>وكون أن إنشاء الواقع الافتراضي هو في الحقيقة إنشاء لنظام محوسب تستخدم فيه تقنيات خاصة، يتم من خلالها تكوين بيئة ثلاثية الأبعاد قابلة للتفاعل مع المستخدم في الزمن الحقيقي، فإن توفر الأجهزة والبرامج (مكونات مادية ومكونات برمجية) يعتبر شرط نجاح ذلك الواقع المنشود إفتراضياً، ليحاكي البيئة الحقيقية (الفيزيائية). ومن كل ذلك يمكن تعريف الواقع الافتراضي على أنه “نظام محوسب، يوفر للإنسان بيئة افتراضية، يمكنه الاستغراق فيها والتفاعل معها في الوقت الحقيقي”.</p>
					</div>
					<div class="col-sm-6 col-sm-pull-6">
						<div class="screen-couple-left wow fadeInLeftBig">
							<div class="fog fog-top wow"></div>
							<div class="fog fog-bottom wow"></div>
							<img class="screen above" src="images/" alt="" height="484" width="250" />
							<img class="screen beyond wow fadeInLeft" data-wow-delay="0.5s" src="images/vc-1.png" alt=""
								height="400" width="550" />
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- BENEFITS2 END -->

		<!-- VIDEO BEGIN -->
		<section id="video">
			<div class="container">
				<div class="title">
					<h2>مقدمه عن عملنا</h2>
				</div>
				<div class="video-container">
				<video width="1000" height="540" controls>
					<source src="./video/video_bg.mp4" type="video/mp4">
					<source src="./video/video_bg.ogv" type="video/ogv">
					Your browser does not support the video tag.
				</video>
				</div>
			</div>
		</section>
		<!-- VIDEO END -->

		<!-- SCREENSHOTS BEGIN -->
		<section id="screenshots" class="bg-color2">
			<div class="container-fluid wow fadeIn">
				<h2>Screenshots</h2>
				<div id="screenshots-slider" class="owl-carousel">

					<a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
						<img src="images/intro_screen.png" alt="screen1" width="250" height="444" />
					</a>

					<a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
						<img src="images/intro_screen.png" alt="screen1" width="250" height="444" />
					</a>
					<a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
						<img src="images/intro_screen.png" alt="screen1" width="250" height="444" />
					</a>
					<a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
						<img src="images/intro_screen.png" alt="screen1" width="250" height="444" />
					</a>
					<a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
						<img src="images/intro_screen.png" alt="screen1" width="250" height="444" />
					</a>
					<a class="popup-youtube" href="http://www.youtube.com/watch?v=0O2aH4XLbto">
						<img src="images/intro_screen.png" alt="screen1" width="250" height="444" />
					</a>
				</div>
			</div>
		</section>
		<!-- SCREENSHOTS END -->


		<!-- TESTIMONIALS BEGIN -->
		<section id="testimonials" class="bg-color3">
			<div class="container-fluid">
				<h2>فريقنا</h2>
				<div id="testimonials-slider" class="owl-carousel">
					<div class="item container">
						<div class="talk">مطور ومصمم تقنيه الواقع الافتراضي وحاصل على جائزه من معهد تكنولوجيا المعلومات </div>
						<img class="photo" src="images/araby.jpg" alt="customer"  height="170" width="170"/>
						<div class="name">محمد العربي سالم</div>
						<br>
						<div class="ocupation">araby@gmail.com</div>
					</div>
					<div class="item container">
							<div class="talk">مطور ومصمم تقنيه الواقع الافتراضي وحاصل على جائزه من معهد تكنولوجيا المعلومات </div>
							<img class="photo" src="images/araby.jpg" alt="customer"  height="170" width="170"/>
							<div class="name">محمد العربي سالم</div>
							<br>
							<div class="ocupation">araby@gmail.com</div>
						</div>
						<div class="item container">
							<div class="talk">مطور ومصمم تقنيه الواقع الافتراضي وحاصل على جائزه من معهد تكنولوجيا المعلومات </div>
							<img class="photo" src="images/araby.jpg" alt="customer"  height="170" width="170"/>
							<div class="name">محمد العربي سالم</div>
							<br>
							<div class="ocupation">araby@gmail.com</div>
						</div>
						<div class="item container">
							<div class="talk">مطور ومصمم تقنيه الواقع الافتراضي وحاصل على جائزه من معهد تكنولوجيا المعلومات </div>
							<img class="photo" src="images/araby.jpg" alt="customer"  height="170" width="170"/>
							<div class="name">محمد العربي سالم</div>
							<br>
							<div class="ocupation">araby@gmail.com</div>
						</div>
						<div class="item container">
							<div class="talk">مطور ومصمم تقنيه الواقع الافتراضي وحاصل على جائزه من معهد تكنولوجيا المعلومات </div>
							<img class="photo" src="images/araby.jpg" alt="customer"  height="170" width="170"/>
							<div class="name">محمد العربي سالم</div>
							<br>
							<div class="ocupation">araby@gmail.com</div>
						</div>
						<div class="item container">
							<div class="talk">مطور ومصمم تقنيه الواقع الافتراضي وحاصل على جائزه من معهد تكنولوجيا المعلومات </div>
							<img class="photo" src="images/araby.jpg" alt="customer"  height="170" width="170"/>
							<div class="name">محمد العربي سالم</div>
							<br>
							<div class="ocupation">araby@gmail.com</div>
						</div>
				</div>
			</div>
			<div class="block-bg"></div>
		</section>
		<!-- TESTIMONIALS END -->


		<!-- NEWS BEGIN -->
		<section id="news">
			<div class="container-fluid">
				<div class="title">
					<h2>اخبار الشركه</h2>
					<p style="font-size: 1.7em;">الرؤيه الساطعه هي تلك اللعبة التراثية الشهيرة والممتعة. اسم أصيل نابع من ثقافتنا، يعبر عن هويتنا، ويدعم رسالتنا</p>
				</div>
				<ul class="news-list">
					<li class="wow fadeInUp">
						<h3><a href="#">رؤيتنا</a></h3>
						<div class="news-info">			
							<p>
								.نؤمن بأن لا مستحيل أمام الإبداع .. فخيال الأمس نجعله واقعا اليوم
							</p>			
						</div>
					</li>
					<li class="wow fadeInUp">
						<h3><a href="#">هدفنا</a></h3>
						<div class="news-info">
							<p>
									.أن نكون نافذتك الأولى لتحقيق أحلامك بحلول متكاملة ورؤية مستقبلية واضحة  للتطوير المستمر في مختلف المجالات
							</p>
						</div>
					</li>
					<li class="wow fadeInUp">
						<h3><a href="#">الشعار</a></h3>
						<div class="news-info">
							<p>هويتنا المرئية تمثل مزيجاً مثالياً من الابتكار، التطوير، والاتصال اللامحدود</p>
						</div>
					</li>
					<li class="wow fadeInUp">
						<h3><a href="#"><img src="./images/sitelogo.png" alt="Your logo"
							height="100" width="230" /></a></h3>
					</li>
				</ul>
			</div>
		</section>
		<!-- NEWS END -->

		<!-- DOWNLOAD BEGIN -->
		<section id="download" class="bg-color-main">
			<div class="container-fluid wow fadeInDown">
				<a href="#wrap" class="goto">
					<h2></i>Our visual identity is a perfect mix of innovation,
						development and connection</h2>
				</a>
			</div>
			<div class="block-bg" data-stellar-ratio="0.5"></div>
		</section>
		<!-- DOWNLOAD END -->


		<!-- FOOTER BEGIN -->
		<footer id="footer">
			<div class="container">
				<a href="index.html#wrap" class="logo goto"> <img src="./images/logo_small.png" alt="Your Logo"
						height="35" width="72" /> </a>
				<p class="copyright">&copy; BrightVision 2019 <br>
					Designed by <a href="#" target="_blank">BrightVision</a></p>

				<ul class="soc-list wow flipInX">
					<li><a href="#"><i class="icon soc-icon-twitter"></i></a></li>
					<li><a href="#"><i class="icon soc-icon-facebook"></i></a></li>
					<li><a href="#"><i class="icon soc-icon-linkedin"></i></a></li>
					<li><a href="#"><i class="icon soc-icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon fab fa-snapchat"></i></a></li>
				</ul>
			</div>
		</footer>
		<!-- FOOTER END -->

	</div>


	<!-- MODALS BEGIN-->

	<!-- subscribe modal-->
	<div class="modal fade" id="modalMessage" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"></h3>
			</div>
		</div>
	</div>

	<!-- contact modal-->
	<div class="modal fade" id="modalContact" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title">تواصل معنا</h3>
				<form action="./contact.php" role="form" id="contact_form">
					<div class="form-group">
						<input type="text" class="form-control" id="contact_name" placeholder="الاسم" name="name">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" id="contact_email" placeholder="البريد الالكترونى"
							name="email">
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="3" placeholder="اترك رسالتك هنا"
							id="contact_message" name="message"></textarea>
					</div>
					<button type="submit" id="contact_submit" data-loading-text="&bull;&bull;&bull;"> <i
							class="icon icon-paper-plane"></i></button>
				</form>
			</div>
		</div>
	</div>

	<!-- jobs model -->
	<div class="modal fade" id="modalContact1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h3 class="modal-title">اتصل بنا</h3>
					<form action="./contact1.php" role="form" id="contact_form1">
						<div class="form-group">
							<input type="text" class="form-control" id="contact_name" placeholder="الاسم" name="name">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="contact_email" placeholder="البريدالالكترونى"
								name="email">
						</div>
						<div class="form-group">
							<textarea class="form-control" rows="3" placeholder="اترك رسالتك هنا"
								id="contact_message" name="message"></textarea>
						</div>
						<button type="submit" id="contact_submit1" data-loading-text="&bull;&bull;&bull;"> <i
								class="icon icon-paper-plane"></i></button>
					</form>
				</div>
			</div>
		</div>

		<div class="modal fade" id="modalMessage" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3 class="modal-title"></h3>
					</div>
				</div>
			</div>

	<!-- MODALS END-->

	

	<!-- JavaScript -->
	<script src="scripts/jquery-1.8.2.min.js"></script>
	<script src="scripts/bootstrap.min.js"></script>
	<script src="scripts/owl.carousel.min.js"></script>
	<script src="scripts/jquery.validate.min.js"></script>
	<script src="scripts/wow.min.js"></script>
	<script src="scripts/smoothscroll.js"></script>
	<script src="scripts/jquery.smooth-scroll.min.js"></script>
	<script src="scripts/jquery.superslides.min.js"></script>
	<script src="scripts/placeholders.jquery.min.js"></script>
	<script src="scripts/jquery.magnific-popup.min.js"></script>
	<script src="scripts/jquery.stellar.min.js"></script>
	<script src="scripts/retina.min.js"></script>
	<script src="scripts/custom.js"></script>

	<script>
		//start of popup video
		$(document).ready(function() {
			$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
				disableOn: 0,
				type: 'iframe',
				mainClass: 'mfp-fade',
				removalDelay: 160,
				preloader: false,

				fixedContentPos: false
			});
		});
		//end of popup video

		$("#contact_form").submit(function (e) {
			e.preventDefault(); // avoid to execute the actual submit of the form.
			if ($(this).valid()) {
				var form = $(this);
				var url = form.attr('action');
				$.ajax({
					type: "POST",
					url: url,
					data: form.serialize(), // serializes the form's elements.
					success: function () {
						$('#contact_submit').button('reset');
						$('#modalContact').modal('hide');

						//Use modal popups to display messages
						$('#modalMessage .modal-title').html(
							'<i class="icon icon-envelope-open"></i>رائع<br>تم ارسال رسالتك بنجاح'
							);
						$('#modalMessage').modal('show');
					},
					error: function () {
						$('#contact_submit').button('reset');
						$('#modalContact').modal('hide');

						//Use modal popups to display messages
						$('#modalMessage .modal-title').html(
							'<i class="icon icon-ban"></i>للاسف<br>حدث خطا ما');
						$('#modalMessage').modal('show');
					}
				});
			} else {
				$('#contact_submit').button('reset')
			}
		});

		//---------------------------
		$("#contact_form1").submit(function (e) {
			e.preventDefault(); // avoid to execute the actual submit of the form.
			if ($(this).valid()) {
				var form = $(this);
				var url = form.attr('action');
				$.ajax({
					type: "POST",
					url: url,
					data: form.serialize(), // serializes the form's elements.
					success: function () {
						$('#contact_submit1').button('reset');
						$('#modalContact1').modal('hide');

						//Use modal popups to display messages
						$('#modalMessage .modal-title').html(
							'<i class="icon icon-envelope-open"></i>رائع<br>تم ارسال رسالتك بنجاح'
							);
						$('#modalMessage').modal('show');
					},
					error: function () {
						$('#contact_submit1').button('reset');
						$('#modalContact1').modal('hide');

						//Use modal popups to display messages
						$('#modalMessage .modal-title').html(
							'<i class="icon icon-ban"></i>للاسف<br>حدث خطا ما ');
						$('#modalMessage').modal('show');
					}
				});
			} else {
				$('#contact_submit1').button('reset')
			}
		});


	</script>




	<!--[if lte IE 9]>
	<script src="scripts/respond.min.js"></script>
<![endif]-->
</body>

</html>