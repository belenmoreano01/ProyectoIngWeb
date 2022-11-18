@extends('layouts.app')

@section('template_title')
    Categorias
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div class="p-1" style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Categorias') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pases.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                        
                       
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        <th>Nombre de la categoría</th>
										<th>Nombre de la subcategoria</th>
                                        <th>Nombre del lugar de entretenimiento</th>			

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pases as $pase)
                                        <tr>
                                            <td>{{ $pase->id }}</td>
                                            <td>{{ $pase->creado }}</td>
                                            <td>{{ $pase->tipo->nombre }}</td>
											<td>{{ $pase->persona->nombre }}</td>

                                            <td>
                                                <form action="{{ route('pases.destroy',$pase->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pases.show',$pase->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pases.edit',$pase->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pases->links() !!}
            </div>
        </div>
    </div>
@endsection