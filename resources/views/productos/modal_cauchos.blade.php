
<!-- Modal -->
<div class="modal fade" id="modal_accesorios_{{$acce}}" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Accesorios y Autopartes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="card mb-3" style="width: 100%;">
            <div class="row no-gutters">
              <div class="col-md-6">

                <div id="carouselExampleIndicators_{{$acce}}" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators_{{$acce}}" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators_{{$acce}}" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators_{{$acce}}" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="{{asset('img/'.$p->imagen_1)}}" class="d-block" alt="" width="500" height="300">
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('img/'.$p->imagen_2)}}" class="d-block" alt="" width="500" height="300">
                    </div>
                    <div class="carousel-item">
                      <img src="{{asset('img/'.$p->imagen_3)}}" class="d-block" alt="" width="500" height="300">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators_{{$acce}}" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators_{{$acce}}" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Siguiente</span>
                  </a>
                </div>

              </div>
              <div class="col-md-6 justify-content-center">
                <div class="card-body">
                  <h5 class="card-title justify-content-center">{{$p->nombre}}</h5>
                  <h5 class="card-title justify-content-center">{{formato_numero($p->precio_dolar)}} $</h5>
                  <p class="card-text" style="white-space: pre-line; text-align: justify;">{{$p->descripcion}}</p>

                  {!! Form::open(array('url'=>'agregar_carrito_cauchos', 'method'=>'POST', 'autocomplete'=>'off','id'=>'agregar_carrito_modal_'.$acce, 'files'=>'true')) !!}

                      {{Form::token()}} 
                    <div class="input-group justify-content-center mb-2">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="incrementar_modal_{{$acce}}" data="{{$acce}}">                  
                          <i class="fas fa-plus" style="color: #4169E1;" data-container="body" data-toggle="popover" data-placement="top" data-content="1.Haz click e incrementa tu pedido" id="plus_modal_{{$acce}}"></i>                
                        </span>
                      </div>

                      
                      <input type="number" class="text-center" name="cantidad" id="cantidad_modal_{{$acce}}" data="{{$acce}}" value="0" style="width: 60px;">
                      <input type="hidden" id="producto_id_modal_{{$acce}}" name="producto_id"  value="{{$p->id}}">
                      <input type="hidden" id="inventario_{{$acce}}" name="inventario"  value="{{$p->inventario}}">
                      <input type="hidden" id="precio_dolar{{$acce}}" name="precio_dolar"  value="{{$p->precio_dolar}}">
                      <div class="input-group-append">
                        <span class="input-group-text" id="disminuir_modal_{{$acce}}" data="{{$acce}}">                   
                          <i class="fas fa-minus" style="color: #d9534f;"></i>
                        </span>
                      </div>



                      
                    </div>




                </div>

                <div class="text-center" style="width: 100%;">
                  <button type="button" id="add_carrito_modal_{{$acce}}" class="btn btn-danger"  data-container="body" data-toggle="popover" data-placement="bottom" data-content="agrega un producto." data="{{$acce}}">Agregar al carrito</button>
                </div>

                {{Form::close()}}
              </div>
            </div>
          </div>                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

