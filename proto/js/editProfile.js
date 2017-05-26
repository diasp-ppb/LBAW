$(document).ready(function() {
    $('#editProfile').on('click', '.add-email', function() {
        var template = $('#email-template');
        template.clone()
        .removeClass('hide')
        .removeAttr('id')
        .insertBefore(template);
    }).on('click', '.remove-email', function() {
        $(this).parents('.form-group').remove();
    });

    $('#editProfile').on('click', '.add-link', function() {
        var template = $('#link-template');
        template.clone()
        .removeClass('hide')
        .removeAttr('id')
        .insertBefore(template);
    }).on('click', '.remove-link', function() {
        $(this).parents('.form-group').remove();
    });

    var maxsize = 500 * 1024; // 500 KB

    $('#upload-check').click(function(){
        $('#git_username').val("");
        $('#git_username').prop('disabled',true);
        $('#upload-image').prop('disabled',false);
        $('#submit-image').prop('disabled',true);
    });

    $('#github-check').click(function () {
        $('#upload-image').val("");
        $('#upload-image').prop('disabled',true);
        $('#git_username').prop('disabled',false);
        $('#submit-image').prop('disabled',true);
    });

    $('#git_username').on('focusout',function () {
        if($(this).val().length>0){
            $('#submit-image').removeAttr("disabled");
        }
    });

    $('#upload-image').change(function() {

        $('#message').empty();

        var file = this.files[0];
        var match = ["image/jpeg", "image/png", "image/jpg"];

        if (!((file.type == match[0]) || (file.type == match[1]) || (file.type == match[2])))
        {
            noPreview();
            $('#message').html('<div class="alert alert-warning" role="alert">Formato inválido. São permitidos apenas os formatos seguintes: JPG, JPEG, PNG.</div>');
            return false;
        }

        if (file.size > maxsize || file.size==0)
        {
            noPreview();
            $('#message').html('<div class=\"alert alert-danger\" role=\"alert\">O tamanho máximo da imagem para fazer o upload é ' + (maxsize/1024).toFixed(2) + ' KB</div>');
            return false;
        }

        $('#submit-image').removeAttr("disabled");

        var reader = new FileReader();
        reader.onload = selectImage;
        reader.readAsDataURL(this.files[0]);
    });
});

function noPreview() {
    $('#image-preview').attr('src', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/22/Turkish_Van_Cat.jpg/700px-Turkish_Van_Cat.jpg');
    $('#submit-image').prop('disabled',true);
}

function selectImage(e) {
    $('#image-preview').attr('src', e.target.result);
}