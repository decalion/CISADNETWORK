$(document).ready(function () {
    $('#sendComment').click( function (data) {
        if ($('#newCommentTextArea').val().length == 0) {
            return;
        }
        var test = $.post("./models/addComment.php", { id: $('#id').val(), type: $('#type').val(), comment: $('#newCommentTextArea').val() });
        test.done(function(data) {
            $('#innerCommentsDiv').append(data);
        });
        $('#newCommentTextArea').val('');
    });
});