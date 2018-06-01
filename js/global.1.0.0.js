$(document).ready(function(){

	$(".popout").on("click" , function(){
		$(this).fadeOut(100);
		$(".popout .centered").removeClass("animate");
	})


	$(".popout").on("click" , ".header .close" , function(){
		$(this).parent().parent().parent().fadeOut(100);
		$(".popout .centered").removeClass("animate");
	});


	$(".popout").on("click" , ".centered" , function(e){
		e.stopPropagation();
	})


	$("#footer").on("click" , "#go-up" , function(){
		$("html , body").animate({scrollTop : "0px"} , 350);
	})


	$("#header").on("click" , "#menu-btn" , function(){
		$("#menu-wrap").fadeIn(200 , function(){
			$(this).addClass("show");
			$("body").css("overflow" , "hidden");
		});
	})

	$("#menu-wrap").on("click" , ".close" , function(){
		$("#menu-wrap").fadeOut(200 , function(){
			$("#menu-wrap").removeClass("show");
			$("body").css("overflow" , "auto");
		})
	})


	$("#header").on("keyup" , "#search-content" , function(){
		var search = $(this).val();
		var content = $("#search-content-box");
		if(search.length){
			content.html("<h3>Buscando ...</h3>").show(1);
			$.ajax({
				url:"php/search-content.php",
				data:{search:search},
				type:"POST",
				success:function(e){
					content.html(e);
				}
			})
		}else{content.hide(1)}
	})


	$(".carousel").carousel({
	    interval: 2500 //changes the speed
	})


	$("#preg-frec").on("click" , function(){
		$(".popout").fadeIn(100);
	})


	$("#preg-frec-mbl").on("click" , function(){
		$(".preguntas-frecuentes .content").slideToggle(100);
	})

	$("#footer").on("submit" , "#register-form" , function(e){
		e.preventDefault();
		var email = $("#footer #register-input").val();
		var button = $("#footer #register-btn");

		button.val("PROCESANDO ...").attr("disabled" , "disabled").css({
			opacity:"0.3",
			cursor:"not-allowed"
		});

		$.ajax({
			type:"GET",
			url:"php/register_process.php",
			data:{email:email},
			success:function(e){

				alert(e);

				button.val("ENVIAR").removeAttr("disabled").css({
					opacity:"1",
					cursor:"default"
				});
			}
		})
	})

})
