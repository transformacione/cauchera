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


	$('#incrementar_tablet_'+i+'').click(function(){ 

		var indice = $(this).attr('data');
		var cantidad = parseFloat($('#cantidad_tablet_'+indice+'').val());
		var inventario = parseFloat($('#inventario_tablet_'+indice+'').val());
		var nueva_cantidad = cantidad + 1;
		if (nueva_cantidad > inventario) {
			$('#cantidad_tablet_'+indice+'').val(inventario);
		}else if(nueva_cantidad < 0){
			$('#cantidad_tablet_'+indice+'').val(0);
		}else{
			$('#cantidad_tablet_'+indice+'').val(nueva_cantidad);
		}
		

	});

	$('#disminuir_tablet_'+i+'').click(function(){

		var indice = $(this).attr('data');
		var cantidad = parseFloat($('#cantidad_tablet_'+indice+'').val());
		var inventario = parseFloat($('#inventario_tablet_'+indice+'').val());
		var nueva_cantidad = cantidad - 1;
		if (nueva_cantidad > inventario) {
			$('#cantidad_tablet_'+indice+'').val(inventario);
		}else if(nueva_cantidad < 0){
			$('#cantidad_tablet_'+indice+'').val(0);
		}else{
			$('#cantidad_tablet_'+indice+'').val(nueva_cantidad);
		}
		

	});


	$('#cantidad_tablet_'+i+'').change(function(){
		var indice = $(this).attr('data');
		var cantidad = parseFloat($('#cantidad_tablet_'+indice+'').val());
		var inventario = parseFloat($('#inventario_tablet_'+indice+'').text());
		
		if (cantidad > inventario) {
			$('#cantidad_tablet_'+indice+'').val(inventario);
		}else if(cantidad < 0){
			$('#cantidad_tablet_'+indice+'').val(0);
		}else{
			$('#cantidad_tablet_'+indice+'').val(cantidad);
		}

	});



	$('#incrementar_tlf_'+i+'').click(function(){ 

		var indice = $(this).attr('data');
		var cantidad = parseFloat($('#cantidad_tlf_'+indice+'').val());
		var inventario = parseFloat($('#inventario_tlf_'+indice+'').val());
		var nueva_cantidad = cantidad + 1;
		if (nueva_cantidad > inventario) {
			$('#cantidad_tlf_'+indice+'').val(inventario);
		}else if(nueva_cantidad < 0){
			$('#cantidad_tlf_'+indice+'').val(0);
		}else{
			$('#cantidad_tlf_'+indice+'').val(nueva_cantidad);
		}
		

	});

	$('#disminuir_tlf_'+i+'').click(function(){

		var indice = $(this).attr('data');
		var cantidad = parseFloat($('#cantidad_tlf_'+indice+'').val());
		var inventario = parseFloat($('#inventario_tlf_'+indice+'').val());
		var nueva_cantidad = cantidad - 1;
		if (nueva_cantidad > inventario) {
			$('#cantidad_tlf_'+indice+'').val(inventario);
		}else if(nueva_cantidad < 0){
			$('#cantidad_tlf_'+indice+'').val(0);
		}else{
			$('#cantidad_tlf_'+indice+'').val(nueva_cantidad);
		}
		

	});


	$('#cantidad_tlf_'+i+'').change(function(){
		var indice = $(this).attr('data');
		var cantidad = parseFloat($('#cantidad_tlf_'+indice+'').val());
		var inventario = parseFloat($('#inventario_tlf_'+indice+'').text());
		
		if (cantidad > inventario) {
			$('#cantidad_tlf_'+indice+'').val(inventario);
		}else if(cantidad < 0){
			$('#cantidad_tlf_'+indice+'').val(0);
		}else{
			$('#cantidad_tlf_'+indice+'').val(cantidad);
		}

	});


	

	}

	$('#incrementar_solo').click(function(){ 

		var indice = $(this).attr('data');
		var cantidad = parseFloat($('#cantidad_solo').val());
		var inventario = parseFloat($('#inventario_solo').val());
		var nueva_cantidad = cantidad + 1;
		if (nueva_cantidad > inventario) {
			$('#cantidad_solo').val(inventario);
		}else if(nueva_cantidad < 0){
			$('#cantidad_solo').val(0);
		}else{
			$('#cantidad_solo').val(nueva_cantidad);
		}
		

	});

	$('#disminuir_solo').click(function(){

		var indice = $(this).attr('data');
		var cantidad = parseFloat($('#cantidad_solo').val());
		var inventario = parseFloat($('#inventario_solo').val());
		var nueva_cantidad = cantidad - 1;
		if (nueva_cantidad > inventario) {
			$('#cantidad_solo').val(inventario);
		}else if(nueva_cantidad < 0){
			$('#cantidad_solo').val(0);
		}else{
			$('#cantidad_solo').val(nueva_cantidad);
		}
		

	});


	$('#cantidad_solo').change(function(){
		var indice = $(this).attr('data');
		var cantidad = parseFloat($('#cantidad_solo').val());
		var inventario = parseFloat($('#inventario_solo').text());
		
		if (cantidad > inventario) {
			$('#cantidad_solo').val(inventario);
		}else if(cantidad < 0){
			$('#cantidad_solo').val(0);
		}else{
			$('#cantidad_solo').val(cantidad);
		}

	});
</script>