$(document).ready(function() {
    $('.status-toggle').change(function() {
        let userId = $(this).data('id');
        let status = $(this).is(':checked') ? 1 : 0;

        $.ajax({
            url: updateuser,
            method: 'POST',
            data: {
                _token: csrfToken,
                id: userId,
                status: status
            },
            success: function(response) {
                if(response.success) {
                    alert(response.message);
                } else {
                    alert(response.message);
                }
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
                alert("An error occurred while updating the status.");
            }
        });
    });
});
