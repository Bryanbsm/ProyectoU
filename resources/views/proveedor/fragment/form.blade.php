


<div class="form-group" ">



{!! Form::label('id','ID')!!}
{!! Form::text('id',null,['class '=> 'form-control '])!!}
</div>



<div class="form-group">



{!! Form::label('Nombre','Nombre')!!}
{!! Form::text('Nombre',null,['class'=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::label('Telefono','Telefono')!!}
{!! Form::text('Telefono',null,['class '=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::label('Direccion','Direccion')!!}
{!! Form::text('Direccion',null,['class '=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::label('Correo','Correo')!!}
{!! Form::text('Correo',null,['class '=> 'form-control'])!!}
</div>

<div class="form-group">

{!! Form::submit('ENVIAR',['class onclick="myFunction()"'=> ' btn btn-primary'])!!}
</div>



