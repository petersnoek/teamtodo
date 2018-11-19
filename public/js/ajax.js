var url = 'http://127.0.0.1:8000';


$( document ).ready(function() {
    var myHtml = $('#title')[0].outerHTML;
    $( "#foto" ).on('click', '#title', function() {
        var name = $(this).text();
        var id = $("#title").attr('data-id');
        console.log(id, name);
        var typen = $( this ).replaceWith( "<input id='inputlg' name='name' class='form-control'>");
        $( "#inputlg").val(name);
        var img = $('<input />',
            { id: 'checkimg',
                src: '/imgs/check.png',
                type: 'image',
                value: 'submit'
            })
            .appendTo($('#foto'));

        $('#inputlg').on('keypress', (event)=> {
            if(event.which === 13){
                saveToDatabase();
            }
        });

        $( "#checkimg" ).click(saveToDatabase);


        function saveToDatabase() {
            var newName = $("#inputlg").val();
            console.log(newName);
            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'POST',
                url:  url + '/todo/ajax/' + id,
                data: {
                    name: newName
                },
                success: function (response) {
                    console.log(response);
                    img.remove();
                    $("#inputlg").replaceWith(myHtml);
                    $("#title").text(response['name']);
                },
                error: function (response) {
                    console.log(response)
                }

            })
        }
    });

    $('.customcheck').on('click', '.custom-checkbox',function() {
        var idDone = $(this).attr('data-task-id');
        var checked = $(this).prop('checked');
        console.log(idDone, checked);
        if (checked) {
            done = 1;
            console.log('checked', done);
        } else if (!checked) {
            done = 0;
            console.log("!checked", done);
        }
            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: "POST",
                url: url +  '/task/ajax/' + idDone,
                data: {
                    done: done
                },
                success: function(response) {
                    console.log(response);

                },
                error: function(response) {
                    console.log(response);

                },
            });

    });

    $('.task-content').click(function () {
        var send;
        var taskId = $(this).attr('data-id-task');
        var taskContent = $(this).text();
        console.log(taskContent, taskId);
        $(this).attr('data-toggle', 'modal');
        $(this).attr('data-target', '#exampleModal');
        $("#task-content-input").val(taskContent);
        var close = $("#close");
        var save = $("#save");
        close.click(function () {
            send = false;
            console.log(send);
        });
        save.click(function () {
            send = true;
            console.log(send);
            var newTask = $("#task-content-input").val();

            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                type: 'POST',
                url: url + '/task/edit/ajax/' + taskId,
                data: {
                    id: taskId,
                    name: newTask
                },
                success: function (response) {
                    console.log(response);
                    $("#" + response['id']).text(response['content']);
                },
                error: function (response) {
                    console.log(response)
                }
            })
        });



    });
});

//data-toggle="modal" data-target="#exampleModal"