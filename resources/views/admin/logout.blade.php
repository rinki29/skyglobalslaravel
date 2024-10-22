<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
<li>
    @auth    
    <a href="{{ route('logout.user') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
    @endauth
</li>

</body>
</html>
