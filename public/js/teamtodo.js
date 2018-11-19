var url = 'http://127.0.0.1:8000';
var input, button, teamId;

var pusher = new Pusher("3d5729d5cc186024fcb6", {
    cluster: 'eu',
    encrypted: false
});

var addTodo = pusher.subscribe('add-todo');
var deleteTodo = pusher.subscribe('delete-todo');

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




addTodo.bind('App\\Events\\AddTodo', function(data) {
    location.reload();
    console.log(data);
    // var h2 = document.createElement('h2');
    // var a = document.createElement('a');
    // var div = document.createElement('div');
    // var divtodo = document.getElementById('todoName' + data['todoId']);
    // var team = document.getElementById('teamTodos');
    // h2.setAttribute('id', data['todoName']);
    // h2.innerHTML = data['todoName'];
    // a.innerHTML = 'x';
    // a.href = '/detele/team/todo/' + data['todoId'];
    // div.setAttribute('class', 'col-sm-6');
    // team.appendChild(div);
    // div.appendChild(divtodo);
    // divtodo.appendChild(h2);
    // divtodo.appendChild(a);
});

deleteTodo.bind('App\\Events\\DeleteTodo', function (data) {
    location.reload();
    console.log(data);
});