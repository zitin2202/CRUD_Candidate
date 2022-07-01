$("#select-delete").on("click", function(e){
    e.preventDefault();
    var keys = $("#grid").yiiGridView("getSelectedRows");
    var text = $(this).data("data-confirm");
    var url = $(this).data("url");
    if(keys.length>0){
    Swal.fire({
        title: text,
        type: "warning",
        showCancelButton: true,
        closeOnConfirm: true,
        allowOutsideClick: true
            })
        .then(function (isOkay){
            if(isOkay.isConfirmed){
                $.ajax({
                url: url,
                type: "POST",
                data: {id: keys},
                success: function(res){
                    window.console.log(res);
                }
            });
            }
    });}
});