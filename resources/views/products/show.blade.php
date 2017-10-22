@extends('layout2')

@section('content')

 
    <div class="banner_bottom_w3ls_info">
      <h3 class="agile_heading">Productos</h3>
      <p>Aca prodremos agregar, eliminar, consultar y borrar productos</p>
     
    </div>
  </div>

<div class="agile_services">
		<div class="col-md-3 agile_services_img_wthree">
		</div>


<div class="col-md-9 agile_inner_grids ">

<h3 class="agile_heading two"><font color="green">Mostrar</h3>

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
											    <table>
											 	<thead>
													<tr>
														<th><h2><font color="green">ID </font></h2></th>
														<th><h2><font color="green">&nbsp; Producto&nbsp;&nbsp;</font></h2></th>
														<th><h2><font color="green">Precio&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></h2></th>
														<th><h2><font color="green"> Cantidad</font> </h2></th>
</tr>
<a href="{{ route('products.index')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" pull-rigth><i class="fa fa-reply fa-2x " aria-hidden="true"></i>&nbsp;  Listado</a>

								
							
									<div class="table-wrapper">
<a href="{{ route('products.edit', $product->id)}}" class="btn btn-warning pull-rigth button small btn-block"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i>&nbsp; Editar</a>
														
													
												</thead>
												
												<tbody>


												<tr><div text-align="center">
	<h3><td><h4>{{ $product->id}}</h4></td></h3>
	</div>
	<div text-align="center">
	<h3><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $product->nombre}}</h4></td></h3>
	<h3><td><h4>&nbsp;&nbsp;{{ $product->precio}}</h4></td></h3>
	<h3><td><h4>&nbsp;&nbsp;{{ $product->cantidad}}</h4></td></h3>
	</td>
	</tr>
	</table>
	</tbody>
	{!! $product->body !!}
	</div>
						</div>
						</div>
						</div>
						<div class="clearfix"> </div>
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




@stop


        
    <!-- /Main -->

    <!-- Footer -->
       
    <!-- /Footer -->

    <!-- Copyright -->




