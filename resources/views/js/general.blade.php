<script>
	if($('#pregunta_twitter').val() == 'SI'){
		$('#activar_twitter').css('display','inline');
	}

	if($('#pregunta_facebook').val() == 'SI'){
		$('#activar_facebook').css('display','inline');
	}

	if($('#pregunta_instagram').val() == 'SI'){
		$('#activar_instagram').css('display','inline');
	}

	if($('#pregunta_whatsapp').val() == 'SI'){
		$('#activar_whatsapp').css('display','inline');
	}

	if($('#pregunta_tiktok').val() == 'SI'){
		$('#activar_tiktok').css('display','inline');
	}
	if($('#pregunta_contactanos').val() == 'SI'){
		$('#activar_contactanos').css('display','inline');
	}

	
	$('#pregunta_twitter').change(function() {
		if($(this).val() == 'SI'){
			$('#activar_twitter').css('display','inline');
		}else{
			$('#activar_twitter').css('display','none');
		}
	});

	$('#pregunta_instagram').change(function() {
		if($(this).val() == 'SI'){
			$('#activar_instagram').css('display','inline');
		}else{
			$('#activar_instagram').css('display','none');
		}
	});

	$('#pregunta_whatsapp').change(function() {
		if($(this).val() == 'SI'){
			$('#activar_whatsapp').css('display','inline');
		}else{
			$('#activar_whatsapp').css('display','none');
		}
	});

	$('#pregunta_facebook').change(function() {
		if($(this).val() == 'SI'){
			$('#activar_facebook').css('display','inline');
		}else{
			$('#activar_facebook').css('display','none');
		}
	});

	$('#pregunta_tiktok').change(function() {
		if($(this).val() == 'SI'){
			$('#activar_tiktok').css('display','inline');
		}else{
			$('#activar_tiktok').css('display','none');
		}
	});
	$('#pregunta_contactanos').change(function() {
		if($(this).val() == 'SI'){
			$('#activar_contactanos').css('display','inline');
		}else{
			$('#activar_contactanos').css('display','none');
		}
	});
</script>