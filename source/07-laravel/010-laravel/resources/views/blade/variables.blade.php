{{-- resources/views/blade/variables.blade.php --}}

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade Variables</title>
</head>
<body>
<div>
    Foo: <pre>{{ $foo }}</pre>
</div>
<div>
    Arr: <pre>{{ print_r($arr, true) }}</pre>
</div>
<div>
    date('Y-m-d H:i:s'): <pre>{{ date('Y-m-d H:i:s') }}</pre>
</div>
<div>
    json_encode: <pre>{{ json_encode($arr) }}</pre>
</div>
<div>
    Js::from: <pre>{{ \Illuminate\Support\Js::from($arr) }}</pre>
</div>
</body>
</html>
