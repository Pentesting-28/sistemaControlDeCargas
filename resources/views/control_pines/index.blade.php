@extends('layouts.template')


@section('content')


<div class="container-fluid" >

	@if (session('mensaje'))

        <div class="alert alert-primary" role="alert">
            <center>{{ session('mensaje') }}</center>
        </div>

    @endif

	<form action="{{route('carga.busqueda')}}" method="GET">

        @csrf
        
      <div align="right">

          <div class="btn-group" role="group" aria-label="Basic example">
            <input  type="search" name="Orden" class="form-control" placeholder="Orden">
            <input  type="date"   name="date" class="form-control">
            <button type="submit" class="btn btn-success">Buscar</button>
          </div>

      </div>

    </form><br>
  <div class="table-responsive">
	<table class="table">
	  <thead id="tabl"class="thead text text-white" style="background-color: #ff6501c2;">
	    <tr>

	      <th scope="col">#Orden</th>
	      <th scope="col">Ret_ID</th>
	      <th scope="col">Motivo</th>
	      <th scope="col">Valor Facial</th>
	      <th scope="col">Rango Inicial</th>
	      <th scope="col">Rango Final</th>
	      <th scope="col">Observación</th>
	      <th scope="col">Fecha</th>
	      <th colspan="3">&nbsp;</th>
	                            
	    </tr>
	  </thead>

	  <tbody>

		@foreach($cargas as $carga)

		<tr>

		   <td>{{ $carga->Orden }}</td>
		   <td>{{ $carga->Ret_ID }}</td>
		   <td>{{ $carga->Motivo }}</td>
		   <td>{{ $carga->Valor_Facial }}</td>
		   <td>{{ $carga->Desde }}</td>
		   <td>{{ $carga->Hasta }}</td>
		   <td>{{ $carga->Observacion }}</td>
		   <td>{{ $carga->Fecha }}</td>

		   <td width="10px" >
		                                    
		     <a href="{{ route('carga.edit', $carga->id) }}" class="btn btn-sm btn-outline-primary ">Editar</a>
		                                  
		   </td>

		   <td width="10px" >

		     <form action="{{route('carga.destroy',$carga->id)}}" method="POST">
		   
		        @csrf

		        @method('DELETE')
		      
		        <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar</button>

		     </form>
		                             
		   </td>

		</tr>

		@endforeach                            

    </table>
   </tbody>
  </div>
{{$cargas->render()}} {{--Paginar los datos recuperado de la tabla roles--}}    
</div>

<script>

  $(document).ready(function() {
      setTimeout(function() {
          $(".alert").fadeOut(1500);
      },3000);
  });

</script>

@endsection