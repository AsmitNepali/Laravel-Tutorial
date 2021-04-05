<!DOCTYPE html>
<html class="h-full">
<head>
    <title>Send Mail</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-full">
    <form class="bg-white p-6 rounded shadow-md" style="width: 300px">
        @csrf
        <div class="mb-5">
            <label for="email" class="block text-xs upercase font-semibold mb-1">
                Email Address
            </label>
            <input type="text" id="email" name="email" class="border px-2 py-1 text-sm w-full">
        </div>
        <button type="submit" class="bg-blue-500 py-2 text-white rounded-full text-sn w-full">Email Me</button>
    </form>

</body>
</html>
