$(function($){
	var WebServiceURL = "http://hejun127.oicp.net:44625/bysj/index.php/webservices/";
	var ServiceURL="http://hejun127.oicp.net:44625/bysj/";
	var arr=location.href.split('.').pop().split('?');
	var url=WebServiceURL+"course_list?"+arr[1];
	//console.log(url);	
	$.ajax({
		url:url,
		type:'POST',
		dataType:'jsonp',
		success:function(data){
			if(2000==data['code']&&'success'==data['msg']){
			var courseData= data["data"];
			for(var i=0;i<courseData.length;i++)
				addList(courseData[i],i);
			}
		}
	});
	var addList=function(course,index){
		var href="course_detail.html?courseNo="+course["courseNo"];
		var contextHead="<a class=\"list\" href=\""+href+"\">";
		var contextFoot="</a>";
		var part1="<div class=\"list_img\"><img src=\""+ServiceURL+"attachments"+course["thumb"]+"\"></div>";
		var part2="<div class=\"list_datial\"><div class=\"list_tit\">"+course["courseName"]+"</div>";
		var part3="<div class=\"list_cont\">"+course["courseContent"]+"</div></div>";
		context=contextHead+part1+part2+part3+contextFoot;
		$('#courseList').append(context);
	}
});