//FormControl Login Modal
$('#frmLogin').submit(function(e) {
    var formControl = true;

    var frmGrpUsername = $('#frmGrpUsername');
    var frmGrpPassword = $('#frmGrpPassword');
    var frmAlert = $('#loginAlert');

    frmGrpUsername.removeClass('has-error');
    frmGrpPassword.removeClass('has-error');

    var username = $('#username');
    var password = $('#password');

    if(username.val() == '') {
        frmGrpUsername.addClass('has-error');
        formControl = false;
    }

    if(password.val() == '') {
        frmGrpPassword.addClass('has-error');
        formControl = false;
    }

    if(formControl) {
        $.ajax({
            type: 'POST',
            url: 'php/login.php',
            data: { username:username.val(), password:password.val() }
        })
            .done(function(msg) {
                if(msg == 'success') {
                    $('#login').modal('toggle');
                    location.reload();
                } else {
                    frmAlert.html('');
                    frmAlert.removeClass('alert-info');
                    frmAlert.addClass('alert-danger');
                    frmAlert.html(msg);
                }
            });
    }

    return false;
});