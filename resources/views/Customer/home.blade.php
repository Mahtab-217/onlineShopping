<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="w-full max-w-6xl mx-auto mt-2">
   
    <div class="flex flex-col gap-4">
        @if ($users->count()>0)
 <h1>All our Customers</h1>
 <table class="text-center border border-collapse">
    <tr>
        <th class="border py-2 px-4">Id</th>
        <th class="border py-2 px-4">Name</th>
        <th class="border py-2 px-4">Last Name</th>
        <th class="border py-2 px-4">Email</th>
        <th class="border py-2 px-4">Gender</th>
    </tr>
    @foreach ($users as $user )
        <tr>
            <td class="border py-1 px-4">{{$user->id}}</td>
            <td class="border py-1 px-4">{{$user->name}}</td>
            <td class="border py-1 px-4">{{$user->lastName}}</td>
            <td class="border py-1 px-4">{{$user->email}}</td>
            <td class="border py-1 px-4">{{$user->gender}}</td>
        </tr>
    @endforeach
 </table>
 @else
 <h1 class="text-center bg-green-900 w-4/12 border rounded text-white py-2 ">No customer currently exists</h1>
 @endif
    </div>
</body>
</html>