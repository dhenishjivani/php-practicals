var flag, url;
const changeInput = function (e) {
    const obj = {
        inputval: $("#data").val(),
        inputFrom: $("#from").val(),
        inputTo: $("#to").val(),
        getValue: true
    };
    if ((obj.inputval < 0) && (flag !== 'tempature')) {
        $("#Msg").show().html("Please Enter Positive Number");
    } else {
        if (((obj.inputval == "") || (isNaN(obj.inputval)))) {
            $("#resultData").html(0);
            $("#Msg").show().html("Please Enter Number");
        } else {
            $("#Msg").hide();
            $.ajax({
                type: "POST",
                url: url,
                data: obj,
                success: function (returnData) {
                    $("#resultData").html(returnData);
                }
            });
        }
    }
}

$("#to").add("#from").on("change", changeInput);
$(document).on("input", "#data", function () {
    flag = $(this).attr('data-flag');
    url = "./" + flag + "test.php";
    changeInput();
})
