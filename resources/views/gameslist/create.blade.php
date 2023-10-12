<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testpage</title>
</head>
<body>

<div>
    <form method="POST" action="/gameslist">
        @csrf

        <div class="mb-6">
            <label for="title">title</label>
            <input type="text" name="title" id="title" required>

            <label for="creators">creators</label>
            <input type="text" name="creators" id="creators" required>

            <label for="year_of_release">year of release</label>
            <input type="text" name="year_of_release" id="year_of_release" required>

            <label for="genre">genre</label>
            <input type="text" name="genre" id="genre" required>

            <label for="description">description</label>
            <input type="text" name="description" id="description" required>

            <input type="submit" name="submit" id="submit">
        </div>

    </form>
</div>

</body>
</html>
