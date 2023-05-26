$(document).ready(function () {
    $("#form").on("submit", function (e) {
        e.preventDefault();
        let data = $("#floatingTextarea").val();
        $.ajax({
            type: "POST",
            url: "postText.php",
            data: { textData: data },
            success: function (responce) {
                $("#successMessage").removeClass('d-none');
                $("#form").trigger('reset');
                $("#close").on("click", function () {
                    $("#successMessage").addClass('d-none');
                })
            }
        })
    })

    $("#articleForm").on("submit", function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "article.php",
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function (responce) {
                console.log(responce);
                $("#successMessage").removeClass('d-none');
                $("#articleForm").trigger('reset');
                $("#close").on("click", function () {
                    $("#successMessage").addClass('d-none');
                })
            }
        })
    })
});






