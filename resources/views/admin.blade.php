@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard - Administrador </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3>Você está logado como ADMINISTRADOR</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<iframe src="https://datastudio.google.com/embed/u/0/reporting/1ZjL0TpR3bR16r0Sc_-OorT7gBJtxigrU/page/xQOQB" width="100%" height="900" style="border:none;">
</iframe>
@endsection
