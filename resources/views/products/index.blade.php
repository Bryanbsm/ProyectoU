@extends('layout2')

@section('content')

   <!-- <div class="banner_bottom_w3ls_agile"> menos espacio--> 
    <div class="banner_bottom_w3ls_info">
      <h3 class="agile_heading">Productos</h3>
      <p>Aca prodremos agregar, eliminar, consultar y borrar productos</p>
     
    </div>
  </div>

<div class="agile_services">
		<div class="col-md-3 agile_services_img_wthree">
		</div>


<div class="col-md-9 agile_inner_grids ">

<h3 class="agile_heading two"><font color="green">Listado</h3>

	<div class="w3ls-markets-grid_top">

				<div class="col-md-7 w3ls-markets-grid">
				
					<div class="agileits-icon-grid">
					<div class="clearfix"> </div>


					<div class="inner">		
							</div>

						<!-- Content -->
						 
							<div class="wrapper">
								<div class="inner">

									
										
										<div class="table-wrapper">
										        <table cellspacing="1" cellspacing="30">
												<thead>
													    <tr>
														<td ><h2><font color="green">ID </font></h2></td>
														<td ><h2><font color="green">&nbsp; Nombre Producto</font></h2></td>
														<a href="{{ route('products.create')}}" class="btn btn-success button small btn-block btn-lg pull-rigth"><i class="fa fa-plus fa-2x" aria-hidden="true"></i>&nbsp; Nuevo</a>
														
													</tr>
												</thead>
												
													
													<tbody>
@foreach($products as $product)
<tr><div text-align="center">
	<h3><td><h4>{{ $product->id}}</h4></td></h3>
	</div>
	<div text-align="center">
	<h3><td><h4>&nbsp;&nbsp;{{ $product->nombre}}</h4></td></h3>
</div>
	<td></font>
   
	<a href="{{ route('products.show',$product->id)}}" class="btn btn-info  button small btn-block pull-rigth"><i class="fa fa-binoculars fa-2x fa-fw" aria-hidden="true"></i>&nbsp; Ver</a>
	 
    </td>


	<td>
	<a class=" btn btn-warning button small btn-block pull-rigth" href="{{ route('products.edit',$product->id)}}"><i class="fa fa-pencil fa-2x fa-fw" aria-hidden="true"></i>&nbsp; Editar</a>
    
	
    
	</td>

	<td>
		<form action="{{ route('products.destroy',$product->id)}}" method="post">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="DELETE">

<button class="btn btn-danger button small  btn-block pull-rigth"><i class="fa fa-trash-o fa-2x fa-fw" aria-hidden="true"></i>&nbsp; Borrar</button>

		
	
		</form>
</td>

</tr>
@endforeach
</tbody>
</table>
{!! $products->render() !!}	
	</div>
						</div>

						</div>
						</div>
						
												</tbody>
												
											</table>
										</div>
											</table>
										</div>
									</section>
</div>
								<div class="clearfix"> </div>
							</div>
</div>
</div></div></div></div>
       @endsection

