(function($){

$('#form').submit(function(e){
	e.preventDefault();
	var form = {
	    name: $("#name").val(),
	    email: $("#email").val(),
	    numero: $("#phone").val()
	};
	$('#form').addClass('d-none');
	$('.mensaje').addClass('d-block');

	$.ajax({
		type: "POST",
		url: "mail.php",
		data: form
	});
});

}(jQuery));