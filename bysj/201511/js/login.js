$(function($){
	var WebServiceURL = "http://hejun127.oicp.net:44625/bysj/index.php/webservices/";
	var ServiceURL="http://hejun127.oicp.net:44625/bysj/";
	$('.submit').on('click',function(){
	var studentNo=$('.studentNo').val();
	var password=$('.password').val();
	var url=WebServiceURL+"login"+"?studentNo="+studentNo+"&password="+password;	
	if(studentNo==""){
		alert("学号不能为空!");
		window.location.reload();
	}else{
		if(password==""){
			alert("密码不能为空!");
			window.location.reload();
		}		
		$.ajax({
			url:url,
			type:'POST',
			dataType:'jsonp',
			success:function(data){			
				if(2000==data['code']&&'success'==data['msg']){
					localStorage.setItem("studentNo",studentNo);
					alert("登陆成功");
					window.location.href="home.html"; 
				}
				if(4001==data['code']&&'fail'==data['msg']){
					alert("登陆失败");
					window.location.reload();
					
				}
			}
		});
	}	
});
});