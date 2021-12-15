@extends('layouts.main')

@section('title', 'Editando frete com placa: '.$frete->placa)

@section('content')


<div id="frete-create-container" class="col-md-6 offset-md-3">
    <h1>Edite seu frete</h1>
    <form action="/fretes/update/{{$frete->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group mt-4">
            <label for="placa">Placa:</label>
            <input type="text" name="placa" id="placa" class="form-control" placeholder="Placa do veículo"  value="{{$frete->placa}}">
        </div>
        <div class="form-group mt-4">
            <label for="date_ini">Data de início:</label>
            <input type="date" name="date_ini" id="date_ini" class="form-control" value="{{$frete->date_ini->format('Y-m-d')}}">
        </div>
        <div class="form-group mt-4">
            <label for="date_final">Data de início:</label>
            <input type="date" name="date_final" id="date_final" class="form-control" value="{{$frete->date_final->format('Y-m-d')}}">
        </div>
        <div class="form-group mt-4">
            <label for="dono_veiculo">Títular:</label>
            <input type="text" name="dono_veiculo" class="form-control" id="dono_veiculo" placeholder="Títular" value="{{$frete->dono_veiculo}}">
        </div>
        <div class="form-group mt-4">
            <label for="valor_frete">Valor:</label>
            <input type="text" name="valor_frete" class="form-control" id="valor_frete" placeholder="Valor" value="{{$frete->valor_frete}}">
        </div>
        <div class="form-group mt-4">
            <label for="status">Status:</label>
            <select class="form-select" name="status" id="status">
                <option value="1" {{$frete->status == 1 ? "Selected='selected" : ""}}>Iniciado</option>
                <option value="2" {{$frete->status == 2 ? "Selected='selected" : ""}}>Em trânsito</option>
                <option value="3" {{$frete->status == 3 ? "Selected='selected" : ""}}>Concluído</option>
              </select>
        </div>
        
        
        <input type="submit" class="btn btn-primary mt-4" value="Editar frete">
    </form>
</div>



@endsection