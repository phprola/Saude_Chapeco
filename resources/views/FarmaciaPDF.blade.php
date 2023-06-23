<!DOCTYPE html>
<html>
<head>
    <title>Cardápio Da Café|Vip</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>{{ $title }}</h1>
    <p>{{ $date }}</p>
    <p>Lista de Medicamentos na Farmácia</p>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Código</th>
            <th>Nome do Medicamento</th>
            <th>Quantidade</th>
            <th>Valor(R$)</th>
        </tr>
        @foreach($farmacias as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->codigo}}</td>
                <td>{{$item->medicamento}}</td>
                <td>{{$item->quantidade}}</td>
                <td>{{$item->valor}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
