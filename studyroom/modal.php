	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.blockUI.js"></script>
	<script>
	$(function(){
		$("#btn").click(function(){
			//��� ��Ÿ���ٰ� ������� �Լ�
			//$.growlUI('Ÿ��Ʋ', '����'); 
			$.blockUI({ 
				    //html�±׸� ���ڿ��� �����ص� ������
				    //message : "<table><tr><td>�±��׽�Ʈ</td></tr><table>"
					message: $('#question')
					//css ����
				   ,css: { 
					   left: '15%',
						top: '5%'
						    
					}
					//���â �ܺ� Ŭ���� �ݱ�
				   ,onOverlayClick: $.unblockUI 
			});	
		})
		$("#closebtn").click(function(){
			 //���â �ݱ�
			 $.unblockUI(); 
		})
})
	</script>

	
	
	<input type="button" id="btn" value="show"/>
<div id="question" style="display:none; "> 
<img src="img/portfolio/cabin.png" class="img-responsive" alt="">
</div>

	