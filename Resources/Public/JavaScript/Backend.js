
require(["jquery"], function($)
{
    var textAreaExists = $('textarea').attr('name').indexOf('highlight_js');
    if (textAreaExists != -1) {
       $("textarea").wrapInner("<code class='css hljs'></code>").wrapInner("<pre></pre>");
        alert('found')
    } else {
        alert('doesnt exists');
    }
});



/*function hallo(text){
    alert(text);
}
hallo("Tag auch");*/
