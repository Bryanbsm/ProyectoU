@extends('layout3')

@section('content')
<header>

                            <div class="inner">
                                <h2>
 @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Ha iniciado sesion correctamente, Redirigiendo en 3 segundos... 

                    <META HTTP-EQUIV="REFRESH" CONTENT="3;{{ route('products.index')}}"> 
</h2>

                                
                            </div>
                        </header>

                        <!-- Content -->
                            

<body> 

</body> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
