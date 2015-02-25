function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function isBDate(datestring) {
    var re = /^([0-9]{2})\.([0-9]{2})\.([0-9]{4})$/;
    return re.test(datestring);
}

$('#frmRegister').submit(function(e) {
    var formControl = true;
    var illegalChars = /\W/;

    //FormGroups
    var frmGrpUsername = $('#frmGrpUsername');
    var frmGrpEmail = $('#frmGrpEmail');
    var frmGrpPassword1 = $('#frmGrpPassword1');
    var frmGrpPassword2 = $('#frmGrpPassword2');
    var frmGrpCity = $('#frmGrpCity');
    var frmGrpBirthday = $('#frmGrpBirthday');
    var frmGrpProfilePicture = $('#profilepicturelabel');

    //FormGroups reset
    frmGrpUsername.removeClass('has-error');
    frmGrpEmail.removeClass('has-error');
    frmGrpPassword1.removeClass('has-error');
    frmGrpPassword2.removeClass('has-error');
    frmGrpCity.removeClass('has-error');
    frmGrpBirthday.removeClass('has-error');
    $('#usernameInfo').remove();
    $('#emailInfo').remove();
    frmGrpProfilePicture.removeClass('has-error');

    //FormInputs
    var username = $('#username');
    var email = $('#email');
    var password1 = $('#password1');
    var password2 = $('#password2');
    var city = $('#city');
    var birthday = $('#birthday');
    var profilepicture = $('#profilepicture');

    if(username.val() == '') {
        frmGrpUsername.addClass('has-error');
        formControl = false;
    } else {
        if(illegalChars.test(username.val())) {
            frmGrpUsername.addClass('has-error');
            frmGrpUsername.append('<p class="help-block" id="usernameInfo">Bitte verwende nur Buchstaben und Zahlen, keine Leerzeichen!</p>');
            formControl = false;
        } else {
            $.ajax({
                type: 'POST',
                url: 'php/check_username.php',
                data: { username:username.val() },
                async: false
            })
                .done(function(msg) {
                    if(msg != 'unique') {
                        frmGrpUsername.addClass('has-error');
                        frmGrpUsername.append('<p class="help-block" id="usernameInfo">Benutzername ist bereits vergeben!</p>');
                        formControl = false;
                    }
                });
        }
    }

    if(email.val() == '') {
        frmGrpEmail.addClass('has-error');
        formControl = false;
    } else {
        if(validateEmail(email.val()) == false) {
            frmGrpEmail.addClass('has-error');
            formControl = false;
        } else {
            $.ajax({
                type: 'POST',
                url: 'php/check_email.php',
                data: { email:email.val() },
                async: false
            })
                .done(function(msg) {
                    if(msg != 'unique') {
                        frmGrpEmail.addClass('has-error');
                        frmGrpEmail.append('<p class="help-block" id="emailInfo">Es gibt bereits einen User mit dieser E-Mail Adresse</p>');
                        formControl = false;
                    }
                });
        }
    }

    if(password1.val().length < 6) {
        frmGrpPassword1.addClass('has-error');
        frmGrpPassword2.addClass('has-error');
        formControl = false;
    } else {
        if(password1.val() != password2.val()) {
            frmGrpPassword1.addClass('has-error');
            frmGrpPassword2.addClass('has-error');
            formControl = false;
        }
    }

    if(city.val() == '') {
        frmGrpCity.addClass('has-error');
        formControl = false;
    }

    if(profilepicture.val() == '') {
        frmGrpProfilePicture.addClass('has-error');
        formControl = false;
    }

    if(birthday.val() == '') {
        frmGrpBirthday.addClass('has-error');
        formControl = false;
    } else {
        if(isBDate(birthday.val()) == false) {
            frmGrpBirthday.addClass('has-error');
            formControl = false;
        }
    }

    return formControl;
});