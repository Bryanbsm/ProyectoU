
<div class="form-group" ">
{!! Form::label('id','ID')!!}
{!! Form::text('id',null,['class'=> 'form-control '])!!}
</div>

<div class="form-group" ">
{!! Form::label('cantidad','Cantidad')!!}
{!! Form::text('cantidad',null,['class '=> 'form-control '])!!}<p id="demo"></p>
</div>

<div class="form-group" ">
{!! Form::label('producto','producto')!!}
<select id="producto" class="form-control" name="producto" onchange="myFunction()">
<option value="producto" selected disabled="true">---Escoja el producto ----</option>
@foreach($producto as $product)

<option value="{{$product['cantidad']}}">{{$product['nombre']}} </option>



@endforeach
</div>



<script type="text/javascript">

function myFunction() {
    var x = document.getElementById("producto").value;
    document.getElementById("demo").innerHTML = "Cantidad maxima de productos: " + x;
}
</script>







{!! Form::submit('ENVIAR',['class '=> ' btn btn-primary'])!!}
</div>