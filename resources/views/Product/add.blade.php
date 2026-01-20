<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
      <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="w-full bg-gray-200 h-screen p-3 justify-center items-center flex ">
        <div class="border rounded-sm p-6 w-8/12 lg-7/12 md-8/12">
            <h1 class="text-center font-bold text-2xl ">Add new product</h1>
               <form action="{{ URL("products/create") }}" method="POST" class="flex p-4 flex-col gap-3 w-full">
                @csrf
                <input type="text" name="name" placeholder="Producr name" class="border w-full focus:outline-none focus:border-none focus:ring ring-indigo-600 rounded-sm p-2 ">
                <input type="number" name="price" placeholder="Producr price" class="border w-full focus:outline-none focus:border-none focus:ring ring-indigo-600 rounded-sm p-2 ">
                <input type="number" name="quantity" placeholder="Producr quantity" class="border w-full focus:outline-none focus:border-none focus:ring ring-indigo-600 rounded-sm p-2 ">
                <input type="text" name="madein" placeholder="Products of?" class="border w-full focus:outline-none focus:border-none focus:ring ring-indigo-600 rounded-sm p-2 ">
                <input type="file" accept="image/*" name="photo" class="border w-full focus:outline-none focus:border-none focus:ring ring-indigo-600 rounded-sm p-2 ">
                <textarea name="" class="h-24 border focus:outline-none focus:border-none focus:ring ring-indigo-600 rounded-sm p-2 w-full" placeholder="Enter producr's decription"></textarea>
                 <button type="submit" class="px-4 py-2 bg-black/90 text-white rounded-sm">Save</button>
            </form>
        </div>
    </div>
</body>
</html>