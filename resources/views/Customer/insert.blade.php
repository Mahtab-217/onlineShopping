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
   
    <div class="flex h-screen w-full justify-center items-center ">
         @if ($errors->count()>0)
        @foreach ($errors as $error )
       
        
            <div class="py-4 px-2 bg-red-600 text-white">
                <h1>{{$error}}</h1>
            </div>
        @endforeach
        @endif
     <div class="w-9/12 border rounded-lg gap-4">
        <h1 class="w-full text-3xl mb-3 font-bold text-center rounded-md">Add Customer</h1>
        <form class=" flex flex-col w-full gap-3" action="{{ URL("customer/upload") }}" enctype="multipart/form-data" method="POST">
            @csrf

         <input class="border py-2 w-full rounded-md focus:outline-none" type="text" name="name" placeholder="Name">
         <input class="border py-2 w-full rounded-md focus:outline-none" type="text" name="lastName" placeholder="Last Name">
         <input class="border py-2 w-full rounded-md focus:outline-none" type="email" name="email" placeholder="Email">
        <select class="border py-2 w-full rounded-md focus:outline-none"  name="gender">
            <option value="male">Male</option>
            <option value="female">female</option>
         </select>
         <lable>profile picture</lable>
         <input  class="border py-2 w-full rounded-md focus:outline-none" type="file" name="image" accept="image/*" >
         <button type="submit" class="py-2 bg-black/90 text-white rounded-md">Save</button>
        </form>
     </div>
    </div>
</body>
</html>