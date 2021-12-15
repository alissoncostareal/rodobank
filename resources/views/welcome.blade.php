@extends('layouts.main')

@section('title', 'RodoBank')

@section('content')
    

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="/" method="GET" class="d-flex mt-5">
                <input class="form-control me-2" name="search" type="search" placeholder="Pesquisar placa" aria-label="Pesquisar placa">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if ($search)
                <h2 class="mt-3">Pesquisando por: <b>{{$search}}</b></h2>
            @else
                <h2 class="mt-3">Listando todos os cadastros</h2>
            @endif
              <table class="table mt-1">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">Placa</th>
                    <th scope="col">Titular</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Status</th>
                    <th scope="col">Data inicial</th>
                    <th scope="col">Data final</th>
                    <th scope="col" >Ações</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($fretes as $frete) 
                        <tr>
                            <th scope="row">{{$frete->placa}}</th>
                            <td>{{$frete->dono_veiculo}}</td>
                            <td>{{$frete->valor_frete}}</td>
                            <td>
                                @php
                                    $status = $frete->status;
                                @endphp
                                @if ($status == 1)
                                    Iniciado
                                
                                @elseif ($status == 2)
                                    Em trânsito
                                
                                @else 
                                    Concluído
                                @endif
                            </td>
                            <td>{{date('d/m/Y', strtotime($frete->date_ini))}}</td>
                            <td>{{date('d/m/Y', strtotime($frete->date_final))}}</td>
                            <td>
                                <a href="/fretes/edit/{{$frete->id}}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>   Editar</a>
                                <form action="/fretes/{{$frete->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon>Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
              </table>
              @if (count($fretes) == 0 && $search)
                <p>Não foi possível encontrar nenhum frete com a placa: {{$search}}. Volte para a <a href="/">home</a>.</p>
              @elseif(count($fretes) == 0)
              <p>Não há fretes cadastrados</p>
              @endif
        </div>
    </div>
</div>













@endsection