<table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>Loja</th>
            <th>Ações</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($stores as $store)
        <tr>
            <td>{{$store->id}}</td>
            <td>{{$store->nome}}</td>
            <td>botao</td>
        </tr>
            
        @endforeach
    </tbody>
</table>

{{ $stores->render()}}  {{$stores->total()}}