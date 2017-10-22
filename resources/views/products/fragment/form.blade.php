<div class="form-group">



{!! Form::label('id','ID')!!}
{!! Form::text('id',null,['class placeholder="Ej 12345"'=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::label('nombre','Nombre del producto')!!}
{!! Form::text('nombre',null,['class placeholder="Nombre del produco"'=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::label('precio','Precio')!!}
{!! Form::text('precio',null,['class placeholder="Precio uniatrio"'=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::label('cantidad','cantidad')!!}
{!! Form::text('cantidad',null,['class placeholder="Cantidad del producto"	'=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::submit('ENVIAR',['class '=> ' btn btn-warning button small btn-block pull-rigth'])!!}
</div>	