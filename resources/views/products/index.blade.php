<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
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
                            <input type="submit" value="Delete">
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
