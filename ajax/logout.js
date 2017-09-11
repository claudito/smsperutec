var path  = "http://localhost/sms/";


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