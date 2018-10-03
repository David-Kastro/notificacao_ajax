function verifyNotification(){
	$.ajax({
		url:"verificar.php",
		type:"POST",
		dataType:"json",
		success:function(json){
			if(json.qtd > 0){
				$('.notification').css("display", "block");
				$('.notification').html(json.qtd);
			}else{
				$('.notification').css("display", "none");
				$('.notification').html('0');
			}
		}
	});
}

$(function(){
	setInterval(verifyNotification, 5000);
});