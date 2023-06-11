<div>
    <H1>Criar Loja</H1> <br>

    <label for=""></label>

    <form action="{{route('store.post')}}" method="POST">
    @csrf
   
    <Label>Nome:</Label>
    <input type="text" name="nome"> <br>

    <label >Descrição:</label>
    <input type="text" name="descricao"> <br>

    <label >Telefone:</label>
    <input type="text" name="telefone"> <br>

    <label >Celular:</label>
    <input type="text" name="celular"> <br>

    <label>Slug:</label>
    <input type="text" name="slug"> <br>

    <label>Usuário:</label>
    <select name="" id="">

        @foreach ($users as $user)
            <option value="$user->id">{{$user->name}}</option>
        @endforeach
        
    </select>
    <br>

    <button type="submit">adicionar</button>

    </form>
</div>

