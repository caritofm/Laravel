<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Users List</h1>
   
    <ul>
        @forelse($users as $user)
            <li>{{$user->email}}</li>
        @empty
            <li>List Empty</li>
        @endforelse
    </ul>

</body>
</html>