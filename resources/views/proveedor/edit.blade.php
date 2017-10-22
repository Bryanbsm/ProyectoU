@extends('layout2')

@section('content')



    <div class="banner_bottom_w3ls_info">
      <h3 class="agile_heading">Proveedores</h3>
      <p>Aca prodremos agragar, eliminar, consultar y borr proveedores</p>
     
    </div>
  </div>

<div class="agile_services">
		<div class="col-md-3 agile_services_img_wthree">
		</div>


<div class="col-md-7 agile_inner_grids ">

<h3 class="agile_heading two"><font color="green">EDITAR PROVEEDOR</h3>

	<div class="w3ls-markets-grid_top">

				<div class="col-md-10 w3ls-markets-grid">
				
					<div class="agileits-icon-grid">
					
<!-- Content -->
				
								<div class="inner">
									
								</div>
				
						
    <!-- Main -->
  <div class="wrapper">

							
								

<a href="{{ route('proveedor.index')}}" class="btn btn-success button small btn-block btn-lg pull-rigth" pull-rigth><i class="fa fa-reply fa-2x" aria-hidden="true"></i>&nbsp;  Listado</a>


	


@include('proveedor.fragment.error')


{!! Form::model($prov,['route'=> ['proveedor.update', $prov->id] , 'method' => 'PUT'])  !!}

@include('proveedor.fragment.form')

{!! Form::close() !!}


<script>
function myFunction() {

	
    alert("Se ha editado el proveedor");
}

</script>


</div>





</div>
</div>
</div>

</div>
<div class="clearfix"> </div>
</div>
</div>

    <!-- Footer -->
       
    <!-- /Footer -->

    <!-- Copyright -->
      
      @stop





