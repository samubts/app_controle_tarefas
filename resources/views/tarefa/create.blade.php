@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Adicionar tarefa</div>

                <div class="card-body">
                    <form method="post" action="{{ route('tarefa.store') }}">
                        @csrf
                        <div class="form-group">
                            <label class="form-label">Tarefa</label>
                            <input type="text" class="form-control" placeholder="Descrição" name="tarefa">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Data limite conclusão</label>
                            <input type="date" class="form-control" name="data_limite_conclusao">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
