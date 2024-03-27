$(document).ready(function () {
    $('#contact-form').submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function (response) {
                $('#response').html(response);
            }
        });
    });
});