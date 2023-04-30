function isEmail(email) {
    var check = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return check.test(email);
}

$(document).ready(function (){
    var passflag = 0;
    var unameflag = 0;
    var nameflag = 0;
    var mailflag = 0;
    $('#submit-btn').attr('disabled', 'disabled');

    $('#floatingInputUser').keyup(function () {
        let nameLength = $(this).val().length;
        if (nameLength > 0){
            unameflag = 1;
        }
        else {
            unameflag = 0;
        }

        if (passflag === 1 && unameflag === 1 && nameflag === 1 && mailflag === 1){
            $('#submit-btn').removeAttr('disabled');
            $('#signupLabel').removeClass('d-block');
            $('#signupLabel').addClass('d-none');
        }else{
            $('#submit-btn').attr('disabled', 'disabled');
            $('#signupLabel').addClass('d-block');
            $('#signupLabel').removeClass('d-none');
        }
    });

    $('#floatingInputName').keyup(function () {
        let nameLength = $(this).val().length;

        if (nameLength > 0){
            nameflag = 1;
        }
        else {
            nameflag = 0;
        }

        if (passflag === 1 && unameflag === 1 && nameflag === 1 && mailflag === 1){
            $('#submit-btn').removeAttr('disabled');
            $('#signupLabel').removeClass('d-block');
            $('#signupLabel').addClass('d-none');
        }else{
            $('#submit-btn').attr('disabled', 'disabled');
            $('#signupLabel').addClass('d-block');
            $('#signupLabel').removeClass('d-none');
        }
    });

    $('#floatingInputMail').keyup(function () {
        let mailText = $(this).val();
        var isok = isEmail(mailText);

        if (isok){
            $('#mail').removeClass('text-danger');
            $('#mail').addClass('text-success');
            mailflag = 1;
        }
        else {
            $('#mail').addClass('text-danger');
            $('#mail').removeClass('text-success');
            mailflag = 0;
        }

        if (passflag === 1 && unameflag === 1 && nameflag === 1 && mailflag === 1){
            $('#submit-btn').removeAttr('disabled');
            $('#signupLabel').removeClass('d-block');
            $('#signupLabel').addClass('d-none');
        }else{
            $('#submit-btn').attr('disabled', 'disabled');
            $('#signupLabel').addClass('d-block');
            $('#signupLabel').removeClass('d-none');
        }

    });

    $('#floatingPassword').keyup(function () {
        let length = $(this).val().length;
        if (length >= 8){
            $('#floatingPassword').removeClass('border-success');
            $('#floatingPassword').removeClass('border-danger');
            $('#floatingPassword').addClass('border-info');
            $('#number').addClass('text-info');
            $('#number').removeClass('text-danger');
            passflag = 1
        }
        else{
            $('#floatingPassword').removeClass('border-success');
            $('#floatingPassword').removeClass('border-info');
            $('#floatingPassword').addClass('border-danger');
            $('#number').removeClass('text-info');
            $('#number').addClass('text-danger');
            passflag = 0;
        }

        if (passflag === 1 && unameflag === 1 && nameflag === 1 && mailflag === 1){
            $('#submit-btn').removeAttr('disabled');
            $('#signupLabel').removeClass('d-block');
            $('#signupLabel').addClass('d-none');
        }
        else{
            $('#submit-btn').attr('disabled', 'disabled');
            $('#signupLabel').addClass('d-block');
            $('#signupLabel').removeClass('d-none');
        }
    });

})



