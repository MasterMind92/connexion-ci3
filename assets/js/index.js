console.log("index script ok");

// script de connexion

// declaration formulaire
var formId = document.getElementById("login-form") ;
var formObj = new FormData(formId);
// console.log($(this));
console.log(formObj);



$(formId).submit(function (e) { 
    e.preventDefault();
    // definition des options d'execution
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





// demande de confirmation
// si c'est ok 

var table = $('#user_table').DataTable({});

var btn_delete = $("#delete_user");

btn_delete.click(function(e) {
    e.preventDefault();

    var response = confirm("Voulez vous bloquer l'utilisateur pour de bon ?");
    var host = location.hostname;

    var id = btn_delete.attr("data-id");


    if (response == true) {
        setTimeout(() => {
            window.location = "bloc_user/" + id;
        }, 3000);
    }
});

$('#with-input').on('click', function() {
    swal({
        title: "An input!",
        text: "Write something:",
        input: "text",
        showCancelButton: true,
        closeOnConfirm: false,
        inputPlaceholder: "Write something"
    }).then(function(inputValue) {
        if (inputValue === false) return false;

        if (inputValue === "") {
            return false;
        }

        swal("Awesome!", "You wrote: " + inputValue, "success");
    });
});


// initialisation du datatable use
// $("#user_table").DataTable();

// var fileInputElement = formId.files[0];

// formData.append("username", "Groucho");
// formData.append("accountnum", 123456); 

// HTML file input, chosen by user
// formData.append("userfile", fileInputElement.files[0]);
// soumettre le formulaire a l'operation d'affichage
// mise en place des options
var btn_preview = $("#show_file");

btn_preview.click(function (e){
    // declaration formulaire
    var formId = document.getElementById("import-form") ;
    var formObj = new FormData(formId);
    // console.log($(this));
    console.log(formObj);

    var options = {
        headers: {
            'X-CSRF-TOKEN':  $('meta[name="csrf-token"]').attr('content')
        },
        type: "POST",
        url: "/index.php/userctrl/read_file",
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

// execution requete
$("#data-preview").DataTable({
    responsive:true
})
// let table = new DataTable('#data-preview');
