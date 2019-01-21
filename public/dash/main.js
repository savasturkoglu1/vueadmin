(function(window, document, $) {
    'use strict';

    var heightLeft = $('.nav-left + .tab-content').height();
    $('ul.nav-left').height(heightLeft);
    var heightRight = $('.nav-right + .tab-content').height();
    $('ul.nav-right').height(heightRight);
})(window, document, jQuery);


function kayitS(formId) {
    var form = $('#'+formId);
    var button = form.find('.btn');
    var currentText = button.html();
    button.html('<i class="la la-spinner spinner"></i>');

    $.ajax({
        type: 'POST',
        data: form.serialize(),
        url: form.attr('action'),
        success:function (aa) {
            if(aa != 0){
                swal('Başarılı', 'Kayıt Başarı ile eklendi', 'success');
            } else {
                swal('Hata','Kayıt Eklenemdi Lütfen Tekrar Deneyiniz', 'error')
            }

            button.html(currentText)
        }
    });
}

function updateS(formId) {
    var form = $('#'+formId);
    var button = form.find('.btn');
    var currentText = button.html();
    button.html('<i class="la la-spinner spinner"></i>');

    $.ajax({
        type: 'POST',
        data: form.serialize(),
        url: form.attr('action'),
        success:function (aa) {
            if(aa != 0){
                swal('Başarılı', 'Kayıt Başarı Güncellendi', 'success');
            } else {
                swal('Hata','Kayıt Güncellenemedi Lütfen Tekrar Deneyiniz', 'error')
            }

            button.html(currentText)
        }
    });
}


function kayitR(formId) {
    var form = $('#'+formId);
    var button = form.find('.btn');
    var currentText = button.html();
    button.html('<i class="la la-spinner spinner"></i>');

    $.ajax({
        type: 'POST',
        data: form.serialize(),
        url: form.attr('action'),
        success:function (aa) {
            button.html(currentText);

        }
    });


}




function Delete(formId) {
   var form = '#'+formId;
    swal({
        title: "Bu Kayıt Silinecek",
        text: "Bu kayıdı silmek istediğinizden emin misiniz? ",
        icon: "warning",
        showCancelButton: true,
        buttons: {
            cancel: {
                text: "Hayır!",
                value: null,
                visible: true,
                className: "btn-warning",
                closeModal: false,
            },
            confirm: {
                text: "Evet Silinsin!",
                value: true,
                visible: true,
                className: "",
                closeModal: false
            }
        }
    }).then(isConfirm => {
        if (isConfirm) {
            $(form).trigger('submit');
        } else {
            swal("Vazgeçildi", "Kayıt Silinmedi", "error");
}
});
}

function test(){
    swal('main','main','error');
}
