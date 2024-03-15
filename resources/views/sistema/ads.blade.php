<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ads-list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Hello, world!</h1>
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">titulo</th>
                            <th scope="col">status</th>
                            <th scope="col">visita</th>
                            <th scope="col">created_at</th>
                            <th scope="col">updated_at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ads as $key => $ad)
                        <tr>
                            <th scope="row">{{$key + 1}}</th>
                            <td>{{$ad->titulo}}</td>
                            <td>{{$ad->status}}</td>
                            <td>{{$ad->visita}}</td>
                            <td>{{$ad->created_at }}</td>
                            <td>{{$ad->updated_at }}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col">
                    {{$ads->links()}}
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
