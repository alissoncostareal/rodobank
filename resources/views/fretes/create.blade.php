@extends('layouts.main')

@section('title', 'Criar um Frete')

@section('content')


<div id="frete-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu frete</h1>
    <form action="/fretes" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mt-4">
            <label for="placa">Placa:</label>
            <input type="text" name="placa" id="placa" class="form-control" placeholder="Placa do veículo">
        </div>
        <div class="form-group mt-4">
            <label for="date_ini">Data de início:</label>
            <input type="date" name="date_ini" id="date_ini" class="form-control">
        </div>
        <div class="form-group mt-4">
            <label for="date_final">Data de início:</label>
            <input type="date" name="date_final" id="date_final" class="form-control">
        </div>
        <div class="form-group mt-4">
            <label for="dono_veiculo">Títular:</label>
            <input type="text" name="dono_veiculo" class="form-control" id="dono_veiculo" placeholder="Títular">
        </div>
        <div class="form-group mt-4">
            <label for="valor_frete">Valor:</label>
            <input type="text" name="valor_frete" class="form-control" id="valor_frete" placeholder="Valor">
        </div>
        <div class="form-group mt-4">
            <label for="status">Status:</label>
            <select class="form-select" name="status" id="status">
                <option value="1">Iniciado</option>
                <option value="2">Em trânsito</option>
                <option value="3">Concluído</option>
              </select>
        </div>
        
        
        <input type="submit" class="btn btn-primary mt-4" value="Criar frete">
    </form>
</div>



@endsection