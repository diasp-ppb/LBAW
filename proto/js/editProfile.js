$(document).ready(function() {
    $('#editProfile').on('click', '.add-email', function() {
        console.log("Add Email");
        var template = $('#email-template');
        template.clone()
        .removeClass('hide')
        .removeAttr('id')
        .insertBefore(template);
    }).on('click', '.remove-email', function() {
        console.log("Remove Email");
        $(this).parents('.form-group').remove();
    })

    $('#editProfile').on('click', '.add-link', function() {
        console.log("Add Link");
        var template = $('#link-template');
        template.clone()
        .removeClass('hide')
        .removeAttr('id')
        .insertBefore(template);
    }).on('click', '.remove-link', function() {
        console.log("Remove Link");
        $(this).parents('.form-group').remove();
    })
});
