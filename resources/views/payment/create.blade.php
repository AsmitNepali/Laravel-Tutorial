<!DOCTYPE html>
<html class="h-full">
<head>
    <title>Send Mail</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-full">
    <form class="bg-white p-6 rounded shadow-md" style="width: 300px" action="/payment" method="POST">
        @csrf
        <button type="submit" class="bg-blue-500 py-2 text-white rounded-full text-sn w-full">Make Payment</button>
    </form>

</body>
</html>
