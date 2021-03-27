$('#fizzform').submit(function(e) {
    $('#validate').css('display', 'none');
    const sendData = {
        number: $('#fizznumber').val()
    }
    let resp = "";
    $.post('fizzbuzz.php', sendData, function(response) {
        if(response === "Please, Enter a lower number than 2046" || response === "Please, Enter a number in the field"){
            $('#validate').html(response);
            $('#validate').css('display', 'block');
        } else {
            $('#fizzresp').html(response);
        }
    });
    e.preventDefault();
});


$('#fileform').submit(function(e) {
    $('#validate').css('display', 'none');
    const sendData =  $('#filetest').prop("files")[0];
    var form_data = new FormData();
    form_data.append("file", sendData);
    $.ajax({
        url: "filetest.php",
        dataType: "text",
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: "post",
        success: function(response){
            console.log(response)
            var resp = JSON.parse(response);
            $('#path').html(resp.path);
            $('#extension').html(resp.extension);
        },
        error: function(response){
            console.log(response);
        }
    })
    e.preventDefault();
});