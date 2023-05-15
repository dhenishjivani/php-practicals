$(document).ready(function(){
    $("#login").submit(function(e){
        e.preventDefault();
        const user_data = {
            name : $("#username").val(),
            pass : $("#upass").val()
        }
        $.ajax({
            type: 'POST',
            url: 'home.php',
            data: user_data,    // aakhu form ke aevu pass karava mate this or document.getElementById karine
            datatype: JSON,
            success: function(data){
                $(".show_data").html(data);
            },
            // error: function()
        })
    })
});