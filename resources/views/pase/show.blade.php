@extends('layouts.app')

@section('template_title')
    {{ $pase->name ?? 'Show Categoría' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Categoria</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pases.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipo Id:</strong>
                            {{ $pase->tipo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Persona Id:</strong>
                            {{ $pase->persona_id }}
                        </div>
                        <div class="form-group">
                            <strong>Creado:</strong>
                            {{ $pase->creado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
