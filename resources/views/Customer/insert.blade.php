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
     <div class="w-9/12 border rounded-lg gap-4">
        <form class=" flex flex-col w-full gap3" action="">
         <input class="border py-2 w-full rounded-md focus:outline-none" type="text" name="name" placehoder="Name">
         <input class="border py-2 w-full rounded-md focus:outline-none" type="text" name="lastName" placehoder="Last Name">
         <input class="border py-2 w-full rounded-md focus:outline-none" type="email" name="email" placehoder="Email">
        <select class="border py-2 w-full rounded-md focus:outline-none"  name="gender">
            <option value="male">Male</option>
            <option value="female">female</option>
         </select>
         <lable>profile picture</lable>
         <input  class="border py-2 w-full rounded-md focus:outline-none" type="file" name="image" accept="image/*" >
         <button type="submit" class="py-2 bg-green-900 text-white">Save</button>
        </form>
     </div>
    </div>
</body>
</html>