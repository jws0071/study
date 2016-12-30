<?php 
include "dbconn.php";
include "string_list.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?clientId=MNfNsRx2XXMncjSCrRc9"></script>
    <meta name="description" content="">
    <meta name="author" content="">
		
    <title>Welcome Hans Study</title>

	

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    



</head>



<body id="page-top" class="index">



    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">Hans Study</a> <!-- 메뉴 이름 -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
      					 <a href="#study_info"><?php echo $han1?></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#teacher_info"><?php echo $han2?></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio"><?php echo $han3?></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#map_view"><?php echo $han4?></a>
                    </li>
					<li class="page-scroll">
                        <a href="#contact"><?php echo $han5?></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" alt="">
                    <div class="intro-text">
                        <span class="name">Start Bootstrap</span>
                        <hr class="star-light">
                        <span class="skills">Web Developer - Graphic Artist - User Experience Designer</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    
     <!-- 공부방 소개 부분 -->
    <section  class="success" id="study_info">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php echo $han1?></h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 ">
                    <img src="upload/1.jpg" class="img-responsive" alt="공부방 전경">
                </div>
                <div class="col-lg-6">
                    <p><?php $study_info = study_info_Select(); $study_info = ICONV("EUC-KR","UTF-8",$study_info); echo $study_info;  ?></p>
                </div>
            </div>
        </div>
    </section>
    
     <!-- 선생님 소개 부분 -->
    <section id="teacher_info">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php echo $han2 ?></h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 ">
                    <img src="upload/2.jpg" class="img-responsive" alt="공부방 전경">
                </div>
                <div class="col-lg-6">
                    <p><?php $teacher_info = teacher_info_Select();$teacher_info = ICONV("EUC-KR","UTF-8",$teacher_info); echo $teacher_info;?></p>
                </div>
            </div>
        </div>
    </section>
    

    <!-- 둘러보기 -->
    <section class="success" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php echo $han3?></h2>
                    <hr class="star-primary">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 portfolio-item">
                    <a class="portfolio-link" id="btn">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="upload/3.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div id="question" style="display:none; "> 
					<img src="upload/3.jpg" class="img-responsive" alt="">
				</div>
                <div class="col-sm-4 portfolio-item">
                    <a class="portfolio-link" id="btn2">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="upload/4.jpg" class="img-responsive" alt="">
                    </a>
                </div>
                <div id="question2" style="display:none; "> 
					<img src="upload/4.jpg" class="img-responsive" alt="">
				</div>
                <div class="col-sm-4 portfolio-item">
                    <a class="portfolio-link" id="btn3">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="upload/5.jpg" class="img-responsive" alt="">
                    </a>
                </div>
				<div id="question3" style="display:none; "> 
					<img src="upload/5.jpg" class="img-responsive" alt="">
				</div>
                <div class="col-sm-4 portfolio-item">
                    <a class="portfolio-link" id="btn4">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="upload/6.jpg" class="img-responsive" alt="">
                    </a>
                </div>
				<div id="question4" style="display:none; "> 
					<img src="upload/6.jpg" class="img-responsive" alt="">
				</div>
                <div class="col-sm-4 portfolio-item">
                    <a class="portfolio-link" id="btn5">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="upload/7.jpg" class="img-responsive" alt="">
                    </a>
                </div>
				<div id="question5" style="display:none; "> 
					<img src="upload/7.jpg" class="img-responsive" alt="">
				</div>
                <div class="col-sm-4 portfolio-item">
                    <a class="portfolio-link" id="btn6">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="upload/8.jpg" class="img-responsive" alt="">
                    </a>
                </div>
				<div id="question6" style="display:none; "> 
					<img src="upload/8.jpg" class="img-responsive" alt="">
				</div>
            </div>
        </div>
    </section>

    <!-- 찾아오시는 길 -->
    <section  id="map_view">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php echo $han4?></h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div id="map" style="width:100%;height:500px;"></div>

						<script>
						var HOME_PATH = window.HOME_PATH || '.';
						
						var map = new naver.maps.Map('map', {
						    center: new naver.maps.LatLng(37.832684, 127.139539),
						    zoom: 10
						});
						
						var marker = new naver.maps.Marker({
						    position: new naver.maps.LatLng(37.832684, 127.139539),
						    map: map
						});
						
						var contentString = [
					        '<div class="iw_inner">',
					        '   <h4>Hans Study Home</h4>',
					        '</div>'
					    ].join('');

					var infowindow = new naver.maps.InfoWindow({
					    content: contentString
					});

					naver.maps.Event.addListener(marker, "click", function(e) {
					    if (infowindow.getMap()) {
					        infowindow.close();
					    } else {
					        infowindow.open(map, marker);
					    }
					});

					infowindow.open(map, marker);
						
						
						
						
						</script>
                </div>
               	<div class="footer-col col-md-12">
                        <h3>Location</h3>
                        <p><?php echo $han7?></p>
                    </div>

            </div>
        </div>
    </section>

    <!-- 문의 -->
    <section class="success" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php echo $han5?></h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
       
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2016
                        <a href="login/login.php" onclick="popupCenter(this.href,800,600);"><?php echo $han6?> </a> 
                    </div>
                </div>
            </div>
        </div>
    </footer>

    
    

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

     <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/freelancer.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.blockUI.js"></script>
	<script>
	$(function(){
		$("#btn").click(function(){
			//잠깐 나타났다가 사라지는 함수
			//$.growlUI('타이틀', '내용'); 
			$.blockUI({ 
				    //html태그를 문자열로 적용해도 무관함
				    //message : "<table><tr><td>태그테스트</td></tr><table>"
					message: $('#question')
					//css 설정
				   ,css: { 
					   left: '35%',
						top: '33%'
						    
					}
					//모달창 외부 클릭시 닫기
				   ,onOverlayClick: $.unblockUI 
			});	
		})
				$("#btn2").click(function(){
			//잠깐 나타났다가 사라지는 함수
			//$.growlUI('타이틀', '내용'); 
			$.blockUI({ 
				    //html태그를 문자열로 적용해도 무관함
				    //message : "<table><tr><td>태그테스트</td></tr><table>"
					message: $('#question2')
					//css 설정
				   ,css: { 
					   left: '35%',
						top: '33%'
						    
					}
					//모달창 외부 클릭시 닫기
				   ,onOverlayClick: $.unblockUI 
			});	
		})
				$("#btn3").click(function(){
			//잠깐 나타났다가 사라지는 함수
			//$.growlUI('타이틀', '내용'); 
			$.blockUI({ 
				    //html태그를 문자열로 적용해도 무관함
				    //message : "<table><tr><td>태그테스트</td></tr><table>"
					message: $('#question3')
					//css 설정
				   ,css: { 
					   left: '35%',
						top: '33%'
						    
					}
					//모달창 외부 클릭시 닫기
				   ,onOverlayClick: $.unblockUI 
			});	
		})
				$("#btn4").click(function(){
			//잠깐 나타났다가 사라지는 함수
			//$.growlUI('타이틀', '내용'); 
			$.blockUI({ 
				    //html태그를 문자열로 적용해도 무관함
				    //message : "<table><tr><td>태그테스트</td></tr><table>"
					message: $('#question4')
					//css 설정
				   ,css: { 
					   left: '35%',
						top: '33%'
						    
					}
					//모달창 외부 클릭시 닫기
				   ,onOverlayClick: $.unblockUI 
			});	
		})
				$("#btn5").click(function(){
			//잠깐 나타났다가 사라지는 함수
			//$.growlUI('타이틀', '내용'); 
			$.blockUI({ 
				    //html태그를 문자열로 적용해도 무관함
				    //message : "<table><tr><td>태그테스트</td></tr><table>"
					message: $('#question5')
					//css 설정
				   ,css: { 
					   left: '35%',
						top: '33%'
						    
					}
					//모달창 외부 클릭시 닫기
				   ,onOverlayClick: $.unblockUI 
			});	
		})
						$("#btn6").click(function(){
			//잠깐 나타났다가 사라지는 함수
			//$.growlUI('타이틀', '내용'); 
			$.blockUI({ 
				    //html태그를 문자열로 적용해도 무관함
				    //message : "<table><tr><td>태그테스트</td></tr><table>"
					message: $('#question6')
					//css 설정
				   ,css: { 
					   left: '35%',
						top: '33%'
						    
					}
					//모달창 외부 클릭시 닫기
				   ,onOverlayClick: $.unblockUI 
			});	
		})

})
	</script>


    
    
    

</body>

</html>
