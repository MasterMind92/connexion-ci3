
var formId = document.getElementById("login-form") ;


$(formId).submit(function (e) { 
    e.preventDefault();
    // definition des options d'execution

    // declaration formulaire
    
    var formObj = new FormData(formId);
    // console.log($(this));
    console.log(formObj);

    var options = {
        headers: {
            'X-CSRF-TOKEN':  $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: "/index.php/ShopCtrl/connexion",
        data: formObj,
        processData: false,
        contentType: false,
        dataType: "json",
        success: function (response) {
            console.log(response);
        }
    }
    
    $.ajax(options);
});