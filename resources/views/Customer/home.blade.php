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
 <h1 class="text-center text-bold text-2xl bg-green-800 py-2 text-gray-200 rounded-sm mb-0">All our Customers</h1>
 <table class="text-center border border-collapse rounded-md">
    <tr>
        <th class="border rounded-md py-2 px-4">Id</th>
        <th class="border rounded-md py-2 px-4">Name</th>
        <th class="border rounded-md py-2 px-4">Last Name</th>
        <th class="border rounded-md py-2 px-4">Email</th>
        <th class="border rounded-md py-2 px-4">Gender</th>
        <th>Profile Picture</th>
    </tr>
    @foreach ($users as $customer )
        <tr>
            <td class="border py-1 rounded-md px-4">{{$customer->id}}</td>
            <td class="border py-1 rounded-md px-4">{{$customer->name}}</td>
            <td class="border py-1 rounded-md px-4">{{$customer->lastName}}</td>
            <td class="border py-1 rounded-md px-4">{{$customer->email}}</td>
            <td class="border py-1 rounded-md px-4">{{$customer->gender}}</td>
            <td>
                <img class="h-12 w-18 rounded-full" src="storage/{{ $customer->img_url }}" alt="">
            </td>
        </tr>
    @endforeach
 </table>
 @else
 <h1 class="text-center bg-green-900 w-4/12 border rounded text-white py-2 ">No customer currently exists</h1>
 @endif
    </div>
</body>
</html>