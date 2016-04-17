@extends("layouts.base")

@section("head")



  <script type="text/javascript">
    $(document).ready(function(){
      $(document).keypress(
          function(event){
            if (event.which == '13') {
              event.preventDefault();
            }
      });
    });
  </script>

@endsection

@section("content")
    <section id="search-section">
		
<form action="{{app()->make('urls')->getUrlPedidoVendedor()}}" method="GET" class="form-horizontal"   enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="form-group">
			<label class="control-label col-sm-2" for="ListaVendedores">Lista de vendedores:</label>
			  <div class="col-sm-8">
				<select id="idVende" name="idVendedor" onchange= "this.form.submit()" >
					@foreach($vendedores as $vendedor)
					<option value= {{$vendedor->id}} > {{$vendedor->nombre}}</option>  
					@endforeach
					 <option selected = "selected" value = {{$nombre[0]->id}} >{{$nombre[0]->nombre}}   </option>                   
				</select>
			  </div> 
		</div>	
</form>

<hr width=75%"/>
	
	<div class="form-group">
		<label class="control-label col-sm-2" for="VendedorSeleccionado">Vendedor Seleccionado:</label>
        <div class="control-group">
              <span class="control-label dimgray">{{$nombre[0]->nombre}}</span>
         </div>
              
			</div>	
		
    
                @foreach($pedidos as $pedido)
                        <p>
                            <div class="well">
								
								<form action="{{app()->make('urls')->getUrlEditarPedido($pedido->id)}}" method="GET" class="form-horizontal"   enctype="multipart/form-data">
								{{ csrf_field() }}
									<div class="form-group">
										<label class="control-label" for="Estado">Estado del pedido:</label>
											<select id="estado" name="estado" onchange= "this.form.submit()" >
												
												
												<option value="entregado"  <?php If ($pedido->estado == "entregado"){?> selected = 'selected'<?php } ?> >Entregado</option>
												<option value="en_proceso" <?php If ($pedido->estado == "en_proceso"){?> selected = 'selected'<?php } ?>>En Proceso</option>
												<option value="cancelado" <?php If ($pedido->estado == "cancelado"){?> selected = 'selected'<?php } ?>>Cancelado</option>
            
											</select>
									</div>	
									<input type="hidden" name="idVendedor" value={{$nombre[0]->id}}>
									
								</form>

                                <div class="control-group">
                                    <span class="control-label dimgray">Producto: {{$pedido->nombreProducto}}</span>
                                </div>
                                
                                <div class="control-group">
                                    <span class="control-label dimgray">Cantidad: {{$pedido->id}}</span>
                                </div>
                                
                                <div class="control-group">
                                    <span class="control-label dimgray">Precio: {{$pedido->precio}}</span>
                                </div>

                                <div class="control-group">
                                    <span class="control-label dimgray">Cliente: {{$pedido->id_cliente}}</span>
                                </div>
                                


                            </div>
                        </p>
                @endforeach
        
    </section>

@endsection
