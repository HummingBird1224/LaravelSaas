
<!DOCTYPE html>
<html>
<head>
    <title>You registered successfully</title>
</head>
<body>

    <br>
     Hello {{ $details['user_name'] }} !<br>
    <br>
    このサイトへの登録が完了しました。
    <br>
    -------------------------------------------------------------<br>
    <br>
    Site URL : <a href={{ $details['siteUrl'] }}>{{ $details['siteUrl'] }}</a>
    <br>
    <br>
    Email : <strong>😉{{ $details['email'] }}</strong>😉
    <br>
    <br>
    Password : 「 <strong> {{ $details['password'] }} </strong> 」
    <br>
    <br>
    <a href="{{ $details['siteUrl'] }}">このサイトにログインしますか?</a>

</body>
</html>