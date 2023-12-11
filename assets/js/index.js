console.log("index script ok");

// demande de confirmation
// si c'est ok 
// rediriger vers la fonction de suppression

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
$("#user_table").DataTable();

// declaration formulaire
const formId = document.getElementById("import-form") ;
const formObj = new FormData(formId);

// soumettre le formulaire a l'operation d'affichage
// mise en place des options
var options = {
    type: "POST",
    url: "/UserCtrl/read_file",
    data: formObj,
    dataType: "json",
    success: function (response) {
        console.log(response);
    }
}

// execution requete
$.ajax(options);
