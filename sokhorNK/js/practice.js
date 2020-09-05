$(document).ready(function () {
    $('#login').on('click', function () {
        var username = $('#user').val();
        $('.alert-success').html(username);
        var password = $('#pass').val();
        $('.alert-danger').html(password);
    });
});
