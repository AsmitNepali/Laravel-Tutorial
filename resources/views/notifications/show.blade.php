<!DOCTYPE html>
<html class="h-full">
<head>
    <title>Send Mail</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center h-full">
    <ul class="list-outside md:list-inside">
        @forelse($notifications as $notification)
            @if($notification->type ==='App\Notifications\PaymentReceived')
                <li>We have received payment of {{ $notification->data['amount'] }} .</li>
            @endif
            @empty
                <li>No, notifications</li>
        @endforelse

    </ul>

</body>
</html>
