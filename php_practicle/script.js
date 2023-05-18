// $(document).ready(function () {
// $("#fromSpeed").on("change", function () {
//     var data = $("#fromSpeed").val();
//     alert($("#data").val());
//     console.log($("#data").val());
//     $("#resultData").html($("#data").val() * (5/18));
//     // $("#resultData").html = echo '$("#data").val()';
//     console.log($("#resultData").val());
// })

var flag, url;
const changeInput = function (e) {
    // alert(url);
    const obj = {
        inputval: $("#data").val(),
        inputFrom: $("#from").val(),
        inputTo: $("#to").val(),
        getValue: true
    };
    if ((obj.inputval !== "")) {
        $("#Msg").hide();
        $.ajax({
            type: "POST",
            url: url,
            data: obj,
            success: function (returnData) {
                $("#resultData").html(returnData);
            }
        });
    } else {
        $("#resultData").html(0);
        $("#Msg").show().html("Please Enter Number");
    }
}

$("#to").add("#from").on("change", changeInput);
// $("#data").on("input", );

$(document).on("input", "#data", function () {
    flag = $(this).attr('data-flag');
    // alert(flag);
    url = "./" + flag + "test.php";
    changeInput();
})
// });