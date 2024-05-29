<!DOCTYPE html>
<html>
<head>
    <title>Edit Name</title>
</head>
<body>
    <h1>Edit Name</h1>
    <a href="{{ route('names.index') }}">Back to Names List</a>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{ route('names.update', $name->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $name->name }}">
        <button type="submit">Update</button>
    </form>
</body>
</html>
