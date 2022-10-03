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


	$('#add_carrito_tablet_'+i+'').click(function() {	
		var indice = $(this).attr('data');
	  
	    if ($('#cantidad_tablet_'+indice+'').val() > 0) {
	    	$('#agregar_carrito_tablet_'+indice+'').submit();
	    }else{
	    	$('#plus_tablet_'+indice+'').popover('show');
  			$('#add_carrito_tablet_'+indice+'').popover('show');
	    }	
		
	});



	$('#add_carrito_modal_tablet_'+i+'').click(function() {	
		var indice = $(this).attr('data');     
	  
	    if ($('#cantidad_modal_tablet_'+indice+'').val() > 0) {
	    	$('#agregar_carrito_modal_tablet_'+indice+'').submit();
	    }else{
	    	$('#plus_modal_tablet_'+indice+'').popover('show');  
  			$('#add_carrito_modal_tablet_'+indice+'').popover('show');
	    }	
		
	});


	$('#add_carrito_tlf_'+i+'').click(function() {	
		var indice = $(this).attr('data');
	  
	    if ($('#cantidad_tlf_'+indice+'').val() > 0) {
	    	$('#agregar_carrito_tlf_'+indice+'').submit();
	    }else{
	    	$('#plus_tlf_'+indice+'').popover('show');
  			$('#add_carrito_tlf_'+indice+'').popover('show');
	    }	
		
	});



	$('#add_carrito_modal_tlf_'+i+'').click(function() {	
		var indice = $(this).attr('data');     
	  
	    if ($('#cantidad_modal_tlf_'+indice+'').val() > 0) {
	    	$('#agregar_carrito_modal_tlf_'+indice+'').submit();
	    }else{
	    	$('#plus_modal_tlf_'+indice+'').popover('show');  
  			$('#add_carrito_modal_tlf_'+indice+'').popover('show');
	    }	
		
	});


	}

	$('#add_carrito_solo').click(function() {	
		var indice = $(this).attr('data');
	  
	    if ($('#cantidad_solo').val() > 0) {
	    	$('#agregar_carrito_solo').submit();
	    }else{
	    	$('#plus_solo').popover('show');
  			$('#add_carrito_solo').popover('show');
	    }	
		
	});



	$('#add_carrito_modal_solo').click(function() {	
		var indice = $(this).attr('data');     
	  
	    if ($('#cantidad_modal_solo').val() > 0) {
	    	$('#agregar_carrito_modal_solo').submit();
	    }else{
	    	$('#plus_modal_solo').popover('show');  
  			$('#add_carrito_modal_solo').popover('show');
	    }	
		
	});






	
</script>