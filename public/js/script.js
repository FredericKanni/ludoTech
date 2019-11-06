

function send() {
    event.preventDefault();

    let monOjet =
    {
        id:"",
        nom: $("#nom").val(),
        editeur: $("#editeur").val(),
        console: $("#console").val(),
        prix: $("#prix").val(),
        nombre: $("#nombre").val(),
        commentaire: $("#commentaire").val(),

    }
    $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });


    $.ajax({
        method: "POST",
        url: "/api/jeux/add",
        data: monOjet,
        dataType: "json"
    })
        .done(function (data) {
          console.log(data);
          console.log(data.commentaire);
         
          $("#list").append('<p class="text-center">' + data.nom + " " + data.editeur + "  " + data.prix + ' ' + data.commentaire + '</p>'
          );

         
        })
        .fail(function (status) {
          if( status.status === 422){
            let error =status.responseJSON.errors;
            console.log(error);

          }
        });
};




