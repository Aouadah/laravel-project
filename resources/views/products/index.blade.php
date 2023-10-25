<!doctype html>
<html lang="en">
<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>

{{--search--}}
<div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
    <form method="GET" action="#">
        <label for="searching">search
            <input type="text" name="search" placeholder="find something">
        </label>
    </form>
</div>

    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Genre(s)</th>
            </tr>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->title}}</td>
                    <td>{{$product->genre}}</td>
                    <td>
                        <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('product.delete', ['product' => $product])}}">
                            @csrf
                            @method('delete')
                            <div>
                                <input type="submit" value="Delete">
                            </div>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>































{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>index</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--    <h1>list of games</h1>--}}

{{--@foreach($products as $product)--}}
{{--    <article>--}}
{{--        <h1>--}}
{{--            <a href="/products/{{$product->id}}">--}}
{{--                {{$product->title}}--}}
{{--            </a>--}}
{{--        </h1>--}}
{{--    </article>--}}
{{--@endforeach--}}

{{--</body>--}}
{{--</html>--}}
