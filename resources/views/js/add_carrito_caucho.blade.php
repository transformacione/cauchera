<script>

	$('.modal ').insertAfter($('body'));

	var cantidad = $('#cantidad_producto').val();  
	for (var i = 0; i < cantidad; i++) {

	
	$('#add_carrito_'+i+'').click(function() {	
		var indice = $(this).attr('data');
	  
	    if ($('#cantidad_'+indice+'').val() > 0) {
	    	$('#agregar_carrito_'+indice+'').submit();
	    }else{
	    	$('#plus_'+indice+'').popover('show');
  			$('#add_carrito_'+indice+'').popover('show');
	    }	
		
	});



	$('#add_carrito_modal_'+i+'').click(function() {	
		var indice = $(this).attr('data');     
	  
	    if ($('#cantidad_modal_'+indice+'').val() > 0) {
	    	$('#agregar_carrito_modal_'+indice+'').submit();
	    }else{
	    	$('#plus_modal_'+indice+'').popover('show');  
  			$('#add_carrito_modal_'+indice+'').popover('show');
	    }	
		
	});



	}






	
</script>