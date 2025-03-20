

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('user') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="name">
    <input type="email" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <input type="text" name="address" placeholder="address">
    <input type="text" name="gender" placeholder="gender">
    <input type="file" name="photo" placeholder="photo">

    <button type="submit">Send</button>
</form>

</body>
</html>
