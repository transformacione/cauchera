<script>
	var cantidad_producto = $('#cantidad_producto').val();

	for (var i = 0; i < cantidad_producto; i++) {

		$('#incrementar_modal_'+i+'').click(function(){ 
		var indice = $(this).attr('data');
		var cantidad = parseFloat($('#cantidad_modal_'+indice+'').val());
		var inventario = parseFloat($('#inventario_modal_'+indice+'').val());
		var nueva_cantidad = cantidad + 1;
		if (nueva_cantidad > inventario) {
			$('#cantidad_modal_'+indice+'').val(inventario);
		}else if(nueva_cantidad < 0){
			$('#cantidad_modal_'+indice+'').val(0);
		}else{
			$('#cantidad_modal_'+indice+'').val(nueva_cantidad);
		}
		

		});

		$('#disminuir_modal_'+i+'').click(function(){
			var indice = $(this).attr('data');
			var cantidad = parseFloat($('#cantidad_modal_'+indice+'').val());
			var inventario = parseFloat($('#inventario_modal_'+indice+'').val());
			var nueva_cantidad = cantidad - 1;
			if (nueva_cantidad > inventario) {
				$('#cantidad_modal_'+indice+'').val(inventario);
			}else if(nueva_cantidad < 0){
				$('#cantidad_modal_'+indice+'').val(0);
			}else{
				$('#cantidad_modal_'+indice+'').val(nueva_cantidad);
			}

		});

		$('#cantidad_modal_'+i+'').change(function(){
			var indice = $(this).attr('data');
			var cantidad = parseFloat($('#cantidad_modal_'+indice+'').val());
			var inventario = parseFloat($('#inventario_modal_'+indice+'').val());
			
			if (cantidad > inventario) {
				$('#cantidad_modal_'+indice+'').val(inventario);
			}else if(cantidad < 0){
				$('#cantidad_modal_'+indice+'').val(0);
			}else{
				$('#cantidad_modal_'+indice+'').val(cantidad);
			}

		});



		$('#incrementar_modal_tablet_'+i+'').click(function(){ 
		var indice = $(this).attr('data');
		var cantidad = parseFloat($('#cantidad_modal_tablet_'+indice+'').val());
		var inventario = parseFloat($('#inventario_modal_tablet_'+indice+'').val());
		var nueva_cantidad = cantidad + 1;
		if (nueva_cantidad > inventario) {
			$('#cantidad_modal_tablet_'+indice+'').val(inventario);
		}else if(nueva_cantidad < 0){
			$('#cantidad_modal_tablet_'+indice+'').val(0);
		}else{
			$('#cantidad_modal_tablet_'+indice+'').val(nueva_cantidad);
		}
		

		});

		$('#disminuir_modal_tablet_'+i+'').click(function(){
			var indice = $(this).attr('data');
			var cantidad = parseFloat($('#cantidad_modal_tablet_'+indice+'').val());
			var inventario = parseFloat($('#inventario_modal_tablet_'+indice+'').val());
			var nueva_cantidad = cantidad - 1;
			if (nueva_cantidad > inventario) {
				$('#cantidad_modal_tablet_'+indice+'').val(inventario);
			}else if(nueva_cantidad < 0){
				$('#cantidad_modal_tablet_'+indice+'').val(0);
			}else{
				$('#cantidad_modal_tablet_'+indice+'').val(nueva_cantidad);
			}

		});

		$('#cantidad_modal_tablet_'+i+'').change(function(){
			var indice = $(this).attr('data');
			var cantidad = parseFloat($('#cantidad_modal_tablet_'+indice+'').val());
			var inventario = parseFloat($('#inventario_modal_tablet_'+indice+'').val());
			
			if (cantidad > inventario) {
				$('#cantidad_modal_tablet_'+indice+'').val(inventario);
			}else if(cantidad < 0){
				$('#cantidad_modal_tablet_'+indice+'').val(0);
			}else{
				$('#cantidad_modal_tablet_'+indice+'').val(cantidad);
			}

		});

		$('#incrementar_modal_tlf_'+i+'').click(function(){ 
		var indice = $(this).attr('data');
		var cantidad = parseFloat($('#cantidad_modal_tlf_'+indice+'').val());
		var inventario = parseFloat($('#inventario_modal_tlf_'+indice+'').val());
		var nueva_cantidad = cantidad + 1;
		if (nueva_cantidad > inventario) {
			$('#cantidad_modal_tlf_'+indice+'').val(inventario);
		}else if(nueva_cantidad < 0){
			$('#cantidad_modal_tlf_'+indice+'').val(0);
		}else{
			$('#cantidad_modal_tlf_'+indice+'').val(nueva_cantidad);
		}
		

		});

		$('#disminuir_modal_tlf_'+i+'').click(function(){
			var indice = $(this).attr('data');
			var cantidad = parseFloat($('#cantidad_modal_tlf_'+indice+'').val());
			var inventario = parseFloat($('#inventario_modal_tlf_'+indice+'').val());
			var nueva_cantidad = cantidad - 1;
			if (nueva_cantidad > inventario) {
				$('#cantidad_modal_tlf_'+indice+'').val(inventario);
			}else if(nueva_cantidad < 0){
				$('#cantidad_modal_tlf_'+indice+'').val(0);
			}else{
				$('#cantidad_modal_tlf_'+indice+'').val(nueva_cantidad);
			}

		});

		$('#cantidad_modal_tlf_'+i+'').change(function(){
			var indice = $(this).attr('data');
			var cantidad = parseFloat($('#cantidad_modal_tlf_'+indice+'').val());
			var inventario = parseFloat($('#inventario_modal_tlf_'+indice+'').val());
			
			if (cantidad > inventario) {
				$('#cantidad_modal_tlf_'+indice+'').val(inventario);
			}else if(cantidad < 0){
				$('#cantidad_modal_tlf_'+indice+'').val(0);
			}else{
				$('#cantidad_modal_tlf_'+indice+'').val(cantidad);
			}

		});


	}


	$('#incrementar_modal_solo').click(function(){ 
		var indice = $(this).attr('data');
		var cantidad = parseFloat($('#cantidad_modal_solo').val());
		var inventario = parseFloat($('#inventario_modal_solo').val());
		var nueva_cantidad = cantidad + 1;
		if (nueva_cantidad > inventario) {
			$('#cantidad_modal_solo').val(inventario);
		}else if(nueva_cantidad < 0){
			$('#cantidad_modal_solo').val(0);
		}else{
			$('#cantidad_modal_solo').val(nueva_cantidad);
		}
		

		});

		$('#disminuir_modal_solo').click(function(){
			var indice = $(this).attr('data');
			var cantidad = parseFloat($('#cantidad_modal_solo').val());
			var inventario = parseFloat($('#inventario_modal_solo').val());
			var nueva_cantidad = cantidad - 1;
			if (nueva_cantidad > inventario) {
				$('#cantidad_modal_solo').val(inventario);
			}else if(nueva_cantidad < 0){
				$('#cantidad_modal_solo').val(0);
			}else{
				$('#cantidad_modal_solo').val(nueva_cantidad);
			}

		});

		$('#cantidad_modal_solo').change(function(){
			var indice = $(this).attr('data');
			var cantidad = parseFloat($('#cantidad_modal_solo').val());
			var inventario = parseFloat($('#inventario_modal_solo').val());
			
			if (cantidad > inventario) {
				$('#cantidad_modal_solo').val(inventario);
			}else if(cantidad < 0){
				$('#cantidad_modal_solo').val(0);
			}else{
				$('#cantidad_modal_solo').val(cantidad);
			}

		});



</script>