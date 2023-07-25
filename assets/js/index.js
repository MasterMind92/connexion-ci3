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


// initialisation du datatable use

$("#user_table").DataTable();