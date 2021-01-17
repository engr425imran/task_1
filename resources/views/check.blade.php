<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div>
        <form action="orders.store" method="POST">
            @csrf
            <input type="text" name="price">
            <input type="text" name="customer">
            <input type="text" name="order">
            <input type="text" name="address">
            <
            <input type="submit" value="submit">

        </form>
       
    </div>
    <div>

    </div>

    
</body>
</html>