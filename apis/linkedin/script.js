$(document).ready(function () {
    $("#form").on("submit", function (e) {
        e.preventDefault();
        let data = $("#floatingTextarea").val();
        jQuery('#form').validate({
            rules: {
                textData: {
                    required: true,
                    maxlength: 3000,
                },
            },
            messages: {
                textData: {
                    required: "Please Enter Some Content Which you want to post",
                    maxlength: "You can add up to 3000 characters in one post, making it more engaging and detailed",
                },
            },
        });
        if ($("#form").valid()) {
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
        }
    })

    $("#articleForm").on("submit", function (e) {
        e.preventDefault();
        jQuery('#articleForm').validate({
            rules: {
                textData: {
                    required: true,
                    maxlength: 3000,
                },
                titledata: {
                    required: true,
                },
                urldata: {
                    required: true,
                },
                description: {
                    required: true,
                }
            },
            messages: {
                textData: {
                    required: "Please Enter Some Content Which you want to post",
                    maxlength: "You can add up to 3000 characters in one post, making it more engaging and detailed",
                },
                titledata: {
                    required: "Please Enter the Title",
                },
                urldata: {
                    required: "Please Enter the Url",
                },
                description: {
                    required: "Please Enter the Description",
                }
            },
            errorPlacement: function (error, element) {
                var name = $(element).attr("name");
                error.appendTo($("#" + name + "_validate"));
            },
        });
        if ($("#articleForm").valid()) {
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
        }
    })

    $("#imageData").on("submit", function (e) {
        e.preventDefault();
        jQuery('#imageData').validate({
            rules: {
                textData: {
                    required: true,
                    maxlength: 3000,
                },
                "image[]": {
                    required: true,
                    accept: "jpg,jpeg,png,gif"
                }
            },
            messages: {
                textData: {
                    required: "Please Enter Some Content Which you want to post",
                    maxlength: "You can add up to 3000 characters in one post, making it more engaging and detailed",
                },
                "image[]": {
                    required: "Please select an image to upload.",
                    accept: "Only Support JPEG/JPG/PNG format"
                }
            },
            errorPlacement: function (error, element) {
                var name = $(element).attr("name");
                error.appendTo($("#" + name + "_validate"));
            },
        });
        if ($("#imageData").valid()) {
            $.ajax({
                type: "POST",
                url: "image.php",
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function (responce) {
                    console.log(responce);
                    $("#successMessage").removeClass('d-none');
                    $("#imageData").trigger('reset');
                    $("#close").on("click", function () {
                        $("#successMessage").addClass('d-none');
                    })
                }
            })
        }
    })
});






