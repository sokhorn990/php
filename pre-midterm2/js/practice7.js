$(document).ready(function () {
    $('#re').on('click', function () {
        var usernaem = $('#user').val();
        var password = $('#pass').val();
        var email = $('#email').val();
        isUsername(usernaem);
        isPassword(password);
        isEmail(email);
    });
});
function setSuccess(success,icons) {
    $('#' + success).addClass('border-success').removeClass('border-danger');
    $('#'+icons).addClass('text-success').removeClass('text-danger');
}

function setError(error,icons) {
    $('#' + error).addClass('border-danger').removeClass('border-success');
    $('#'+icons).addClass('text-danger').removeClass('text-success');
}

var isUsername = (u) => {
    u == "" ? setError('user','u-label') : setSuccess('user','u-label');
}
var isPassword = (p) => {
    p == "" ? setError('pass','p-label') : setSuccess('pass','p-label');
}
var isEmail = (e) => {
    e == "" ? setError('email','e-label') : setSuccess('email','e-label');
}