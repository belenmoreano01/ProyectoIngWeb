@extends('layouts.app')

@section('template_title')
    {{ $uso->name ?? 'Show Uso' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Uso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre del lugar:</strong>
                            {{ $uso->usado }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $uso->created_at }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $uso->updated_at }}
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
