
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

        $( "#checkimg" ).click(function() {
            var newName = $("#inputlg").val();
            console.log(newName);
            $.ajax({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: 'POST',
                    url: 'http://127.0.0.1:8000/todo/ajax/' + id,
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
        });
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
                url: 'http://127.0.0.1:8000/task/ajax/' + idDone,
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
});