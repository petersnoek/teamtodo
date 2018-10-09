
$( document ).ready(function() {
    var myHtml = $('#title')[0].outerHTML;
    $( "#foto" ).on('click', '#title', function() {
        var name = $(this).text();
        var id = $("#title").attr('data-id');
        console.log(id, name);
        var typen = $( this ).replaceWith( "<input id='newName' name='name' class='form-control'>");
        $( "#newName").val(name);
        var img = $('<img />',
            { id: 'checkimg',
                src: '/imgs/check.png',
            })
            .appendTo($('#foto'));

        $( "#checkimg" ).click(function() {
            var newName = $("#newName").val();
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
                        $("#newName").replaceWith(myHtml);
                        $("#title").text(response['name']);
                    },
                    error: function (response) {
                        console.log(response)
                    }

                })
        });
    });
});