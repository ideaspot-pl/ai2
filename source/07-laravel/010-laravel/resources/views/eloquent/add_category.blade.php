{{-- resources/views/eloquent/getting_data.blade.php --}}

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eloquent: adding data</title>
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
            <li>
                {{ $category->name }}
                <form action="{{ route('deleteCategory') }}" method="post">
                    @csrf
                    <input type="hidden" name="categoryId" value="{{ $category->id }}">
                    <input type="submit" value="Delete">
                </form>
            </li>
        @endforeach
    </ul>
</div>
<div>
    <form action="{{ route('addCategory') }}" method="post">
        @csrf
        New category name:
        <input type="text" name="categoryName">
        <input type="submit" value="Save">
    </form>
</div>

</body>
</html>
