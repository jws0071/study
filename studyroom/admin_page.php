<?php 
include "string_list.php";
include "dbconn.php";
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
                        <span class="name"><?php echo $han?></span>

                        
                        <hr class="star-light">
                         <span class="skills">                   
							<?php
							session_start();
							if(!isset($_SESSION['is_login'])){
								echo("<script> window.alert('login need'); location.href='login/login.php'</script>");
							}else{
							    if(isset($_SESSION['user_id'])){
							        echo 'Welcome to '.$_SESSION['user_id'];
							    }else{
							        echo 'Welcome to blog management';
							    }
							    echo '<form action="login/logout.php" >
							    <input type="submit" value="logout"/>
							    </form>'; 
							}
							?></span>
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
					<form  id="ajaxform" enctype="multipart/form-data" action="test.php" method="post">
						 <!-- 8.클라이언트쪽 업로드 제한용량을 설정함-->
						 <input type="file" name="upload" />
						<div align="center"><input type="button" id="upload_form" value="uplode" /></div>
						<input type="hidden" name="upload_check" value="true" />
						<input type="hidden" name="test" value="1" />
					</form>

                </div>
                <div class="col-lg-6">
                    <input type="text" id ="study_info_text" value ="<?php $study_info = study_info_Select(); $study_info = ICONV("EUC-KR","UTF-8",$study_info); echo $study_info;?>" style="font-size:14pt; color:#000000;"></input>
                    <button id="study_info_update" type="button" >enter</button>
                </div>
            </div>
        </div>
    </section>
    
     <!-- 선생님 소개 부분 -->
    <section id="teacher_info">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?php echo $han2?></h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 ">
                    <img src="upload/2.jpg" class="img-responsive" alt="공부방 전경">
                    <form  id="ajaxform1" enctype="multipart/form-data" action="test.php" method="post">
						 <!-- 8.클라이언트쪽 업로드 제한용량을 설정함-->
						 <input type="file" name="upload1" />
						<div align="center"><input type="button" id="upload_form1" value="uplode" /></div>
						<input type="hidden" name="upload_check1" value="true" />
						<input type="hidden" name="test1" value="2" />
					</form>
                </div>
                <div class="col-lg-6">
                    <input type="text" id ="teacher_info_text" value ="<?php $teacher_info = teacher_info_Select();$teacher_info = ICONV("EUC-KR","UTF-8",$teacher_info); echo $teacher_info;?>" style="font-size:14pt; color:#000000;"></input>
                	<button id="teacher_info_update" type="button" >enter</button>
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
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cabin.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/cake.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/circus.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/game.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/safe.png" class="img-responsive" alt="">
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/submarine.png" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

  

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
    
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript">
	$(function(){
		$('#study_info_update').click(function(){
	
		   	var Temp = $('#study_info_text').val();
			$.post("study_info_update.php",{
				name:Temp,
				}, 
				function(data,status) {
					alert(data);
				}
			);
			$('#index').load("admin_page.php");
			
	});
		$('#teacher_info_update').click(function(){
			
		   	var Temp = $('#teacher_info_text').val();
			$.post("teacher_info_update.php",{
				name:Temp,
				}, 
				function(data,status) {
					alert(data);
				}
			);
			$('#index').load("admin_page.php");
			
	});
	
		$("#upload_form").click(function(){
      	  var formData = new FormData();
      	  formData.append("upload", $("input[name=upload]")[0].files[0]);
      	  formData.append("upload_check", $("input[name=upload_check]").val());
      	  formData.append("test", $("input[name=test]").val());
      	 
      	  $.ajax({
      	    url: 'test.php',
      	    data: formData,
      	    processData: false,
      	    contentType: false,
      	    type: 'POST',
      	    success: function(data){
      	    	alert("EE");
      	    }
      	  });

        });
		$("#upload_form1").click(function(){
	      	  var formData = new FormData();
	      	  formData.append("upload", $("input[name=upload1]")[0].files[0]);
	      	  formData.append("upload_check", $("input[name=upload_check1]").val());
	      	  formData.append("test", $("input[name=test1]").val());
	      	 
	      	  $.ajax({
	      	    url: 'test.php',
	      	    data: formData,
	      	    processData: false,
	      	    contentType: false,
	      	    type: 'POST',
	      	    success: function(data){
	      	    	alert("EE");
	      	    }
	      	  });

	        });





        
	          
	});
	</script>

</body>

</html>
