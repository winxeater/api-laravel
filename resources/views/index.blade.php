@extends('main')

@section('content')
<h1>Proprietarios!</h1>


<div id="table">
    
    <table class="table table-hover table-dark">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">N. Fantasia</th>
            <th scope="col">Celular</th>
            <th scope="col">Forma de Pagamento</th>
            <th scope="col">RG</th>
            <th scope="col">Flag</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proprietario as $p)
            <tr>
                <th scope="row">1</th>
                <td>{{$p->name}}</td>
                <td>{{$p->fantasy_name}}</td>
                <td>{{$p->cel}}</td>
                <td>{{$p->forma_pag}}</td>
                <td>{{$p->rg}}</td>
                <td>{{$p->flag}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop
