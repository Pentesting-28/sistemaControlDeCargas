@extends('layouts.template')

@section('content')

<div class="container">

	{{-- Mensaje de alerta --}}

    @if (count($errors) > 0)

        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="alerta">
          <ul>
            <center><strong><h4>Error al regitrar! Verifique sus datos.</h4></strong></center>
          </ul>
        </div>

    @endif

{{-- <div class="content2" style="display:none;">Hola, soy un nuevo div!</div> --}}
    <div class="jumbotron" style="background: white; box-shadow: #999 1px 1px 20px 2px;">
      <div class="card-header text text-white" style="background-color: #ff6501c2;"><h5 class="display-6">Edición de cargas.</h5></div>
      <hr class="my-4">
        
        <form action="{{route('carga.update', $carga->id)}}" method="POST">

                    @csrf
                    @method('PUT')

                  <div class="form-row">
                    
                    <div class="form-group col-md-3">
                      <b><label for="inputCity">#Orden</label></b>
                      <input type="text" name="Orden" class="form-control @error('Orden') is-invalid @enderror" id="Orden" value="{{ $carga->Orden }}">

                      @error('Orden')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                    </div>
                    
                    <div class="form-group col-md-3">
                      <b><label for="inputState">Ret_ID</label></b>
                      <input type="text" name="Ret_ID" class="form-control @error('Ret_ID') is-invalid @enderror" id="Ret_ID" value="{{ $carga->Ret_ID }}" required>

                      @error('Ret_ID')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                    </div>

                    <div class="form-group col-md-3">
                      <b><label for="inputEmail4">Motivo</label></b>
                      <input type="text" name="Motivo" class="form-control @error('Motivo') is-invalid @enderror" id="Motivo" value="{{ $carga->Motivo }}" required>

                      @error('Motivo')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                    </div>

                    <div class="form-group col-md-3">
                      <b><label for="inputPassword4">Valor Facial</label></b>
                      <input type="text" name="Valor_Facial" class="form-control @error('Valor_Facial') is-invalid @enderror" id="Valor_Facial" value="{{ $carga->Valor_Facial }}" required>

                      @error('Valor_Facial')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror

                    </div>

                  </div><br>

                  <div>

                    <hr>

                      <div class="form-row">

                        <div class="form-group col-md-4">
                            <b><label for="inputPassword4">Fecha</label></b>
                            <input type="date" name="Fecha" class="form-control @error('Fecha') is-invalid @enderror" id="Fecha" value="{{ $carga->Fecha }}" required>

                            @error('Fecha')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="form-group col-md-4">
                          <b><label for="inputEmail4">Desde</label></b>
                          <input type="text" name="Desde" class="form-control @error('Desde') is-invalid @enderror" id="Desde" value="{{ $carga->Desde }}" required>

                          @error('Desde')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror

                        </div>

                        <div class="form-group col-md-4">
                          <b><label for="inputPassword4">Hasta</label>
                          <input type="text" name="Hasta" class="form-control @error('Hasta') is-invalid @enderror" id="Hasta" value="{{ $carga->Hasta }}" required>

                          @error('Hasta')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror

                        </div>
                      </div>
                  </div>

                  <div class="form-row">

                    <div class="col-md-12">
                      <b><label for="inputCity">Observación</label></b>
                      <textarea name="Observacion" id="Observacion" class="form-control @error('Observacion') is-invalid @enderror" rows="5" style="resize:none;"required>{{ $carga->Observacion }}</textarea>

                          @error('Observacion')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror

                    </div>

                  </div>
                  <br>
                  <div class="modal-footer">

                    <a href="{{ route('carga.index', $carga) }}" class="btn btn-danger" data-dismiss="modal">Regresar</a>
                    <button type="reset" class="btn btn-success" data-dismiss="modal">Restaurar</button>
                    <button type="submit" class="btn text text-white" style="background-color:#ff6501c2;">Guardar</button>
                  </div>

                </form>
    </div>
</div>

<script>

  $(document).ready(function() {
      setTimeout(function() {
          $(".alert").fadeOut(1500);
      },3000);
   
      setTimeout(function() {
          $(".content2").fadeIn(1500);
      },6000);
  });

</script>

@endsection