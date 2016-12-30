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
					   left: '15%',
						top: '5%'
						    
					}
					//모달창 외부 클릭시 닫기
				   ,onOverlayClick: $.unblockUI 
			});	
		})
		$("#closebtn").click(function(){
			 //모달창 닫기
			 $.unblockUI(); 
		})
})
	</script>

	
	
	<input type="button" id="btn" value="show"/>
<div id="question" style="display:none; "> 
<img src="img/portfolio/cabin.png" class="img-responsive" alt="">
</div>

	