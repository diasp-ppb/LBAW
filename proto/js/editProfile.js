$(document).ready(function() {
    var maxsize = 500 * 1024; // 500 KB
    console.log("OLA");

    $('#upload-check').click(function(){
        $('#git_username').val("");
        $('#git_username').prop('disabled',true);
        $('#upload-image').prop('disabled',false);
        $('#submit-image').prop('disabled',true);
        $('#image-preview').attr('src', '../../resources/images/users/profile_default.png');
    });

    $('#github-check').click(function () {
        $('#upload-image').val("");
        $('#upload-image').prop('disabled',true);
        $('#git_username').prop('disabled',false);
        $('#submit-image').prop('disabled',true);
        $('#image-preview').attr('src', '../../resources/images/users/profile_default.png');
    });

    $('#git_username').on('focusout',function () {
        if($(this).val().length>0){
            var userURL="https://api.github.com/users/"+$(this).val();
            $.ajax({
                type: "get",
                url: userURL
            }).done(function(data) {
                $('#github-image-url').val(data.avatar_url);
                $('#image-preview').attr('src',data.avatar_url);
                $('#submit-image').removeAttr("disabled");
            }).fail(function () {
                $('#message').html('<div class="alert alert-warning" role="alert">O utilizador do github que introduziu não existe.</div>');
                $('#submit-image').prop('disabled',true);
            });
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
    $('#image-preview').attr('src', '../../resources/images/users/profile_default.png');
    $('#submit-image').prop('disabled',true);
}

function selectImage(e) {
    $('#image-preview').attr('src', e.target.result);
}