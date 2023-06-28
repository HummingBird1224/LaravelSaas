
<!DOCTYPE html>
<html>
<head>
    <title>You registered successfully</title>
</head>
<body>

    <br>
     Hello Fatty !<br>
    <br>
    Contact to {{ $details['mail_address'] }}
    <br>
    (-_-)😴 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; I am very Sleepy. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 😴(-_-)
    <br>
    (^_-) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; But it's okay. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 😉
    <br>
    Let's do our best.
    <br>
    -------------------------------------------------------------<br>
    <br>
    Your Password is <strong>{{ $details['password'] }}</strong>
    <br>
    <a href="{{ $details['siteUrl'] }}">このサイトにログインしますか?</a>

</body>
</html>