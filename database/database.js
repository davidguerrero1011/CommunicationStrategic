$(document).ready(function () {
    contactFormDataBase = [];
    $('#namesInput').val('');
    $('#lastNamesInput').val('');
    $('#exampleInputEmail1').val('');
    $('#phoneInput').val('');
    $('#messageFormControlTextarea').val('');

});

let contactFormDataBase = [];
function storeInfoContact() {
    
    let name = document.getElementById('namesInput').value;
    let lastName = document.getElementById('lastNamesInput').value;
    let email = document.getElementById('exampleInputEmail1').value;
    let phone = document.getElementById('phoneInput').value;
    let description = document.getElementById('messageFormControlTextarea').value;
    contactFormDataBase.push(name);  
    contactFormDataBase.push(lastName);  
    contactFormDataBase.push(phone);  
    contactFormDataBase.push(description);
    
    if (contactFormDataBase.length > 0) {
        $('#contactUsModal').modal('hide');
        $('#message').removeClass('d-none');
        document.getElementById('success').innerHTML = 'Se envio de manera exitosa tu información de contacto, lo mas pronto se comunicaran contigo.';
    } else {
        contactFormDataBase = [];
        $('#namesInput').val('');
        $('#lastNamesInput').val('');
        $('#exampleInputEmail1').val('');
        $('#phoneInput').val('');
        $('#messageFormControlTextarea').val('');
    }

}