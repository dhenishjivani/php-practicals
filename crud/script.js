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
        var url = 'update.php';
    } else {
        var url = 'insert.php';
    }
    $.ajax({
        type: 'POST',
        url: url,
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
            console.log(x);
            var a = JSON.parse(x);
            console.log(a);
            $("#token").val(a[0]["id"]);
            $("#name").val(a[0]["name"]);
            $("#number").val(a[0]["mobile"]);
            console.log(a[1]);
            $("#image").html('');
           
            for(var i=0 ; i < a[1].length ; i++){
                let imgId = a[1][i][0];
                    // console.log(imgId);
                
                let icon = $("<span>").attr({class:"crossIcon", id : imgId}).text("X").click(function(){
                    // console.log(imgId);
                    deleteImage(imgId);
                });
                $("#image").append("<img src='./uploaded/" + a[1][i][1] +" ' style = 'height: 100px; width: 100px;'>",icon);
                // $("#image").append(icon);
            }
        },
    });
}

function deleteImage(imgId){
    const id = imgId;
    $.ajax({
      url : "deleteimage.php",
      type : "POST",
      data : {imgId : id},
      success : function(returnData){
        console.log(returnData);
        $("#"+id).prev().remove();
        $("#"+id).remove(".crossIcon");
        getData();
      }
    });
    // console.log("delete",imgId);
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
