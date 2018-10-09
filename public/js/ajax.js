
$( document ).ready(function() {
    $( "#title" ).click(function() {
        var name = $(this).text();
        var id = $("#title").attr('data-id');
        console.log(id, name);
        $( this ).replaceWith( "<input id='inputlg' name='name' class='form-control'>");
        $( "#inputlg").val(name);
        var img = $('<img />',
            { id: 'checkimg',
                src: '/imgs/check.png',
            })
            .appendTo($('#foto'));

        $( "#checkimg" ).click(function() {
            $.ajax({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: 'POST',
                    url: 'http://127.0.0.1:8000/todo/ajax/' + id,
                    data: {
                        name: name
                    },
                    success: function (response) {
                        console.log(response);
                    }

                })
        });
    });
});

// <input type="text" class="form-control" aria-label="Default">

// function areyousure() {
//     confirm("Are you sure to delete?");
// }