<script src="//js.pusher.com/3.1/pusher.min.js"></script>
<script>
    var pusher = new Pusher("3d5729d5cc186024fcb6", {
        cluster: 'eu',
        encrypted: false
    });

    // Subscribe to the channel we specified in our Laravel Event
    var channel = pusher.subscribe('add-todo');

    channel.bind('App\\Events\\AddTodo', function(data) {
        console.log(data);
    });

</script>