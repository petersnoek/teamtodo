
$( document ).ready(function() {
    $( "#title" ).click(function() {
        var Input = $(this).text();
        $( this ).replaceWith( "<input id='TitleInput' class='form-control'>" );
        $( "#TitleInput").val(Input);
    });
});

// <input type="text" class="form-control" aria-label="Default">