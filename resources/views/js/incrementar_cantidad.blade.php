<script>

	var cantidad_producto = $('#cantidad_producto').val();
	
	for (var i = 0; i <= cantidad_producto; i++) { 
		
	
	$('#incrementar_'+i+'').click(function(){ 

		var indice = $(this).attr('data');
		var cantidad = parseFloat($('#cantidad_'+indice+'').val());
		var inventario = parseFloat($('#inventario_'+indice+'').val());
		var nueva_cantidad = cantidad + 1;
		if (nueva_cantidad > inventario) {
			$('#cantidad_'+indice+'').val(inventario);
		}else if(nueva_cantidad < 0){
			$('#cantidad_'+indice+'').val(0);
		}else{
			$('#cantidad_'+indice+'').val(nueva_cantidad);
		}
		

	});

	$('#disminuir_'+i+'').click(function(){

		var indice = $(this).attr('data');
		var cantidad = parseFloat($('#cantidad_'+indice+'').val());
		var inventario = parseFloat($('#inventario_'+indice+'').val());
		var nueva_cantidad = cantidad - 1;
		if (nueva_cantidad > inventario) {
			$('#cantidad_'+indice+'').val(inventario);
		}else if(nueva_cantidad < 0){
			$('#cantidad_'+indice+'').val(0);
		}else{
			$('#cantidad_'+indice+'').val(nueva_cantidad);
		}
		

	});

	$('#cantidad_'+i+'').change(function(){
		var indice = $(this).attr('data');
		var cantidad = parseFloat($('#cantidad_'+indice+'').val());
		var inventario = parseFloat($('#inventario_'+indice+'').text());
		
		if (cantidad > inventario) {
			$('#cantidad_'+indice+'').val(inventario);
		}else if(cantidad < 0){
			$('#cantidad_'+indice+'').val(0);
		}else{
			$('#cantidad_'+indice+'').val(cantidad);
		}

	});

	}
</script>