var path  = "http://sms.perutec.com.pe/";


function logout(){
	$.ajax({
		url:path+'procesos/logout.php',
		type:'POST',
		async:true,
		data:{accion:'logout'},
		success:function(){self.location=path;},
		error:function(xhr,status,error){alert('ERROR: '+error);}
	});
}