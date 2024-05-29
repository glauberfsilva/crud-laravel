<!DOCTYPE html>
<html>
<head>
    <title>View Name</title>
</head>
<body>
    <h1>View Name</h1>
    <a href="{{ route('names.index') }}">Back to Names List</a>
    <p>Name: {{ $name->name }}</p>
</body>
</html>
