
$( document ).ready(function() {
    $( "#title" ).click(function() {
        var Input = $(this).text();
        $( this ).replaceWith( "<input id='TitleInput'> </input>" );
        $( "#TitleInput").val(Input);
    });
});