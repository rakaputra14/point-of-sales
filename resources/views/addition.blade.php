<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Laravel</title>
</head>

<body>
    <h1>Form Addition</h1>
    <form action="/actionAddition" method="post">
        @csrf
        <label for="">Number 1</label>
        <input type="number" name="number1">
        <br><br>
        <label for="">Number 2</label>
        <input type="number" name="number2">
        <br>
        <button type="submit">Process</button>
    </form>
    <br><br>
    <h3>The Sum Are : {{ $total }}</h3>
</body>

</html>
