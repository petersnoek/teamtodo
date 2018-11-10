var url = 'http://127.0.0.1:8000';
var input, button, teamId;

var pusher = new Pusher("3d5729d5cc186024fcb6", {
    cluster: 'eu',
    encrypted: false
});
var channel = pusher.subscribe('add-todo');

$(document).ready(function () {
    input = $("#todoInput");
    button = $("#todoSubmit");
        $("#addTodo").click(function () {
            input.prop('type', 'text');
            button.prop('type', 'submit');
        });

        $(button).click(function () {
            var name = input.val();
            teamId = $(this).attr('data-id');
            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'POST',
                url: url + '/team/add/todo/' + teamId,
                data: {
                    name: name
                },
                success: function (response) {
                    input.prop('type', 'hidden');
                    button.prop('type', 'hidden');
                },
                error: function (response) {
                }
            });
        })
    }
);




channel.bind('App\\Events\\AddTodo', function(data) {
    var h2 = document.createElement('h2');
    h2.setAttribute('id', data['todoName']);
    h2.innerHTML = data['todoName'];
    var div = document.createElement('div');
    div.setAttribute('class', 'col-sm-5');
    div.appendChild(h2);
    var team = document.getElementById('teamTodos');
    team.appendChild(div);
});