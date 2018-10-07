
$( document ).ready(function() {
    $( "#title" ).click(function() {
        var Input = $(this).text();
        $( this ).replaceWith( "<input id='inputlg' class='form-control'>");
        $( "#inputlg").val(Input);
        var img = $('<img />',
            { id: 'checkimg',
                src: '/imgs/check.png',
            })
            .appendTo($('#foto'));

        $( "#checkimg" ).click(function() {
            alert( "Handler for .click() called." );
        });
    });





});

// <input type="text" class="form-control" aria-label="Default">

// function areyousure() {
//     confirm("Are you sure to delete?");
// }