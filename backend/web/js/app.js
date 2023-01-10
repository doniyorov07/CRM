$('#payments').on('click', function (event){
    event.preventDefault();
    var url = $(this).attr('href');
    $('myModal').modal('show');
    save(url);
});

function save(_url, formData = null){
    $.ajax({
       url: _url,
       type: "POST",
       dataType: "json",
        data: formData,
        success:function (data){
           console.log(data);
        }
    });
}