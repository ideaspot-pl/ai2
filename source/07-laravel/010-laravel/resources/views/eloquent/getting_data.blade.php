{{-- resources/views/eloquent/getting_data.blade.php --}}

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eloquent: getting data</title>
    <style>
        div {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<div>
    Categories:
    <ul>
        @foreach($categories as $category)
            <li>{{ $category->name }}</li>
        @endforeach
    </ul>
</div>
<div>
    Funny posts:
    <dl>
        @foreach($funnyPosts as $funnyPost)
            <dt>{{ $funnyPost->title }}</dt>
            <dd>{{ $funnyPost->content }}</dd>
        @endforeach
    </dl>
</div>
<div>
    Post1: {{ $post1->title }}
</div>
<div>
    Last Post: {{ $lastPost->title }}
</div>
<div>
    Not first posts:
    <dl>
        @foreach($notFirstPosts as $notFirstPost)
            <dt>{{ $notFirstPost->id }}: {{ $notFirstPost->title }}</dt>
            <dd>{{ $notFirstPost->content }}</dd>
        @endforeach
    </dl>
</div>

</body>
</html>
