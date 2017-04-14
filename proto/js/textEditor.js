 var converter = Markdown.getSanitizingConverter();
 var editor = new Markdown.Editor(converter);
 editor.run();

 $("#wmd-redo-button").addClass("hidden-xs");
 $("#wmd-undo-button").addClass("hidden-xs");
 $("#wmd-spacer3").addClass("hidden-xs");
 $("#wmd-button-row").append("<li class='wmd-spacer hidden-xs' style='left:370'></li>");
 $("#wmd-button-row").append("<li class='wmd-button hidden-xs' id='help-button'  title='Heading <h1>/<h2> Ctrl+Shift+H' style='left: 385px;'><span style='background-position: -240px 0px;'></span></li>");
 $("#help-button").click(function() {
     $("#squarespaceModal").modal('toggle');
 });