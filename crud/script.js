function getData() {
    $.ajax({
        type: 'GET',
        url: 'get.php',
        success: function (data) {
            $('#display').html(data);
        }
    })
}
getData();


$("#form_data").submit(function (e) {
    e.preventDefault();
    var token = $("#token").val();
    if(token != 'null') {
        var up = 'update.php';
    } else {
        var up = 'insert.php';
    }
    $.ajax({
        type: 'POST',
        url: up,
        data: new FormData(this),
        processData: false,
        contentType: false,
        success: function (data) {
            console.log(data);
           getData();
           document.getElementById('form_data').reset();
           $("#token").val("null");
           $("#image").attr("src",'');
           $("#image").html('');
        },
        error: function(xhr){
            console.log('Request Status: ' + xhr.status + ' Status Text: ' + xhr.statusText + ' ' + xhr.responseText);
        }
    })
});


function deleterow(idrow){
    $.ajax({
        type: 'POST',
        url: 'delete.php',
        data: {idrutul:idrow},
        success: function (data) {
           getData();
        }
    })
}

function updaterow(id){
    $.ajax({
        type: 'POST',
        url: 'fetch.php',
        data: {
            uid: id
        },
        success: function (x) {
            var a = JSON.parse(x);
            console.log(a);
            $("#token").val(a[0]["id"]);
            $("#name").val(a[0]["name"]);
            $("#number").val(a[0]["mobile"]);
            console.log(a[1]);
            $("#image").html('');
            for(var i=0 ; i < a[1].length ; i++){
                $("#image").append("<img src='./uploaded/" + a[1][i][0] +" ' style = 'height: 100px; width: 100px;'>");
            }
        },
    });
}


// $("#form_data").submit(function (e) {
//     e.preventDefault();
//     $.ajax({
//         type: 'POST',
//         url: 'insert.php',
//         data: new FormData(this),
//         processData: false,
//         contentType: false,
//         success: function (data) {
//            getData();
//            document.getElementById('form_data').reset();
//         },
//         error: function(xhr){
//             console.log('Request Status: ' + xhr.status + ' Status Text: ' + xhr.statusText + ' ' + xhr.responseText);
//         }
//     })
// });
