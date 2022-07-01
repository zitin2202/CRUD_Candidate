yii.confirm = function (message, okCallback, cancelCallback) {
    Swal.fire({
        title: message,
        type: "warning",
        showCancelButton: true,
        closeOnConfirm: true,
        allowOutsideClick: true
    }
    )
.then(function (isOkay){
    if(isOkay.isConfirmed){
            okCallback();
    }
    });
};
