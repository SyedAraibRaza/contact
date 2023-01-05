<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
</head>
<body>
    <h1>Contact us any time</h1>

    <form action="{{route('contact')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Your Name"><br>
        <input type="email" name="email" placeholder="Your Email"><br>
        <textarea name="message" id="" cols="30" rows="10" placeholder="Your Query"></textarea><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>

