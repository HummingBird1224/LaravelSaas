
<!DOCTYPE html>
<html>
<head>
    <title>Your Password changed successfully</title>
</head>
<body>

    <br>
     Hello {{ $details['name'] }} !<br>
    <br>
    パスワードが成果的に変更されました。
    <br>
    -------------------------------------------------------------<br>
    <br>
    Site URL : <a href="{{ $details['siteUrl'] }}">{{ $details['siteUrl'] }}</a>
    <br>
    <br>
    Email : <strong>😉{{ $details['email'] }}</strong>😉
    <br>
    <br>
    新しいパスワード : 「 <strong> {{ $details['password'] }} </strong> 」
    <br>
    <br>
    <a href="{{ $details['siteUrl'] }}">このサイトにログインしますか?</a>

</body>
</html>