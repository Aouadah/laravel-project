<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit</title>
</head>
<body>

<h1>dit is de edit pagina</h1>

<div>
    <form method="post" action="{{route('product.update', ['product' => $product])}}">
        @csrf
        @method('put')

        <div class="mb-6">
            <label for="title">title</label>
            <input type="text" name="title" id="title" value="{{$product->title}}" required>
            @error('title')
            <p>{{$message}}</p>
            @enderror

            <label for="creators">creators</label>
            <input type="text" name="creators" id="creators" value="{{$product->creators}}" required>
            @error('creators')
            <p>{{$message}}</p>
            @enderror

            <label for="year_of_release">year of release</label>
            <input type="text" name="year_of_release" id="year_of_release" value="{{$product->year_of_release}}" required>
            @error('year_of_release')
            <p>{{$message}}</p>
            @enderror

            <label for="genre">genre</label>
            <input type="text" name="genre" id="genre" value="{{$product->genre}}" required>
            @error('genre')
            <p>{{$message}}</p>
            @enderror

            <label for="description">description</label>
            <input type="text" name="description" id="description" value="{{$product->description}}" required>
            @error('description')
            <p>{{$message}}</p>
            @enderror

            <input type="submit" name="submit" id="submit" value="update">

            <!--als er errors zijn tijdens het invullen van de gegevens, dan komen ze onder elkaar tevoorschijn op het scherm-->

            @if($errors->any())
                <ul>
                    @foreach($errors->all as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </div>

    </form>
</div>

</body>
</html>
