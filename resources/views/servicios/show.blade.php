@extends ('layouts.users')

@section ('content')


<div class="row justify-content-center mt-5 mb-2">
  <h2 class="ml-2 font-weight-bold">
    Servicios
</h2>    
</div>       
  
<div class="row" style="background-color: #968F8F;">
	@foreach($servicios as $s)
		<div class="col-lg-4 col-md-4 col-sm-12 mt-3" style="background-color: #968F8F">	
	<div class="card" style="width: 100%; height: 100%;">
		<img src="{{asset('img/'.$s->imagen)}}" alt="" style="width: 100%; max-height: 170px;">
		<div class="card-body" style="background-color: #f9f800;">
			<h5 class="card-title" style="color: #000;">{{$s->nombre}}</h5>
			<p class="card-text" style="color: #000;text-align: justify;">{{$s->descripcion}}</p>
		</div>
	</div>
</div>
	@endforeach

</div>
   



 @push('scripts')
 
 @endpush
@endsection