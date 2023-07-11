
<!DOCTYPE html>
<html>
<head>
    <title>Document Download</title>
</head>
<body>
  
    <br>
     Hello {{ $details['email'] }} !<br>
    <br>
    -------------------------------------------------------------<br>
    <br>
    You have requested some documents from <a class="url" href="{{ $details['site_url'] }}"> {{ $details['site_domain'] }} </a>.
    <br>
    <br>
    This is download URL.
    <br>
    <h3>
        <a class="download" href="{{ $details['down_link'] }}"> {{ $details['down_link'] }} </a>
    </h3>

</body>
</html>