<script>
	var cantidad_carrito = $('#cantidad_producto').val();

	for (var i = 0; i < cantidad_carrito; i++) {

		$('#enviar_'+i+'').click(function(){

		    var indice = $(this).attr('data');	

		    	$('#actualizar_'+indice+'').submit();
		    	
			
		});
	}
</script>


