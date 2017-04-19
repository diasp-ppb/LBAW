$(document).ready(function() {
    $('#editProfile').on('click', '.add-email', function() {
        var template = $('#email-template');
        template.clone()
        .removeClass('hide')
        .removeAttr('id')
        .insertBefore(template);
    }).on('click', '.remove-email', function() {
        $(this).parents('.form-group').remove();
    })

    $('#editProfile').on('click', '.add-link', function() {
        var template = $('#link-template');
        template.clone()
        .removeClass('hide')
        .removeAttr('id')
        .insertBefore(template);
    }).on('click', '.remove-link', function() {
        $(this).parents('.form-group').remove();
    })
});
