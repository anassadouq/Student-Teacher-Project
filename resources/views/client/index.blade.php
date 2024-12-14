<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Laravel</title>
</head>
<body>
    <a href="{{ route('client.create') }}">Create</a>
    <table width="100%" class="text-center">
        <thead>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Tel</th>
            <th>Actions</th>
        </thead>
        @foreach($clients as $client)
            <tbody>
                <td>{{ $client->nom }}</td>
                <td>{{ $client->adresse }}</td>
                <td>{{ $client->tel }}</td>
                <td>
                    <form action="{{ route('client.destroy', $client) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('client.show', $client) }}">Show</a>
                        <a href="{{ route('client.edit', $client) }}">Update</a>
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tbody>
        @endforeach
    </table>
</body>
</html>