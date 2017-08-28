 $("#login-button").click(function(event){
		 event.preventDefault();
	 
	 $('form').fadeOut(200);
	 $('.wrapper').addClass('form-success');
//window.location.assign("http://www.w3schools.com");
setTimeout("redireccionarPagina()", 3000);
});
function redireccionarPagina() {
var user1=document.getElementById("user").value;
var pass1=document.getElementById("pass").value;
 cadena="";
var datam = { 
            'user'     : user1,
            'pass'     : pass1
        };
                $.ajax({
                        type: "POST",
                        url: 'http://190.24.138.149/mobile/sura/connect_user.php',
                        dataType: 'json',
			data: datam,
                        beforeSend: function() {
                                //$('#summary111').html('checking');
                        },
                        complete: function() {},
                        success: function(html) {
                                if (html=="error"){
                                        $("#result_con").html("Usuario no valido")
                                        $("#reload_login").show();
                                }else{
                                        location.href ="form.html?id="+html;
                                }
                        }
                   });
}
