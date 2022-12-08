 <!-- Modal -->
 <div class="modal fade" id="modalAgregar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAgregar" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Realizar Venta</h5>
        </div>
        <div class="modal-body">

          <div  class="container mt-2 col-md-12">
            @if ($errors->any())
    
                @foreach ($errors->all() as $error)
             
                <div class="alert alert-danger alert-dimissible fade show" role="alert">
                 <strong> {{$error}} </strong>
                 <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="Close"></button>
               </div>
    
                @endforeach
    
            @endif
    
            <div class="card mb-4">
            
                <div class="card-header fw-bold text-center">
                    Querido Diario
                </div>
                
                <div class="card-body">
    
                    <form action="{{route('recuerdo.store')}}" method="post" class="border">
                     @csrf
                        
                        <div class="mt-3">
                            <div><label class="form">Título:</label></div>
                            <input class="form-control" type="text" placeholder="Título" name="txtTitulo" value="{{old('txtTitulo')}}">
                            <p class="text-primary"> {{$errors->first('txtTitulo')}}</p>
                           
                        </div>
    
                        <div class="mb-3">
                            <div><label class="form">Recuerdo:</label></div>
                            <input class="form-control" type="text" placeholder="Recuerdo" name="txtRecuerdo" value="{{old('txtRecuerdo')}}">
                            <p class="text-primary">{{$errors->first('txtRecuerdo')}}</p>
                        </div>
    
                 </div>
                 
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Guardar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>

                  </form>
   
            </div>
    
        </div>
        </div>
        </div>
      </div>
    </div>
  </div>