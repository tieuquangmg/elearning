<!DOCTYPE html>
<head>
    <title>Pusher Test</title>
    <script src="https://js.pusher.com/3.2/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('c421ca21aa9a393ebfec', {
            cluster: 'ap1',
            encrypted: true
        });
        var channel = pusher.subscribe('test_channel');
        channel.bind('pusher:subscription_succeeded', function() {
            console.log('ket noi thanh cong');
        });
        channel.bind('App\\Events\\HelloPusherEvent', function(data) {
            alert(data);
        });
    </script>
</head>