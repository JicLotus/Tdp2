@extends("layouts.base") 

@section("content")
<a  href="{{app()->make('urls')->getUrlClientes()}}" class="btn btn-primary btn-block"><h4><b>CLIENTES</b></h4></a>
<div class="container">
<div class="row row-head">
  <div class="col-md-12">
    <h2><strong>Nuevo Cliente</strong></h2>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif

  </div>
</div>

 
<form action="guardarcliente" method="POST" class="form-horizontal" enctype="multipart/form-data">
	{{ csrf_field() }}
	<input type="hidden" name="idCliente" value="">
	
<div class="row">

  <div class="col-md-4 col-sm-offset-1">
     
	<div class="form-group">
		<label class="control-label col-sm-3" for="nombre">Nombre</label>
          <div class="col-sm-8">
			<input type="Text" name="nombre" value="{{ old('nombre') }}" ><br>
		  </div>
    </div>
    
     <div class="form-group">
		<label class="control-label col-sm-3" for="email">Email</label>
          <div class="col-sm-8">
			<input type="Text" name="email"  value="{{ old('email') }}"><br>
		  </div>
    </div>	
    
    <div class="form-group">
		<label class="control-label col-sm-3" for="direccion">Dirección</label>
          <div class="col-sm-8">
			<input type="Text" name="direccion" value="{{ old('direccion') }}" ><br>
		  </div>
    </div>
 </div>
  
 <div class="col-md-5">
    <div class="form-group">
		<label class="control-label col-sm-4" for="razon_social">Razón Social</label>
          <div class="col-sm-8">
			<input type="Text" name="razon_social" value="{{ old('razon_social') }}"> <br>
		  </div>
    </div>
    
    <div class="form-group">
		<label class="control-label col-sm-4" for="telefono_movil">Teléfono Movil</label>
          <div class="col-sm-8">
			<input type="Text" name="telefono_movil" value="{{ old('telefono_movil') }}"><br>
		  </div>
    </div>
    
    <div class="form-group">
		<label class="control-label col-sm-4" for="marca">Teléfono Laboral</label>
          <div class="col-sm-8">
			<input type="Text" name="telefono_laboral" value="{{ old('telefono_laboral') }}"><br>
		  </div>
    </div>
    
  </div>				
</div>	

                           

  <div class="form-group">
				<div class="col-sm-12">
					
					<button type="submit" class="col-sm-offset-9 btn btn-primary">Publicar</button>
	  				<a href="{{app()->make('urls')->getUrlClientes()}}" class=" btn btn-default">Cancelar</a>
					



				</div>
			</div> 		
</form>
</div> 

@endsection
