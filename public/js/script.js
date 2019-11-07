

function send() {
    event.preventDefault();

    let monOjet =
    {
        
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
         // console.log(data.commentaire);
         
         $("#list").append('<p class="text-center">'+ data.id +'NOM :'+ data.nom + " EDITEUR :" + data.editeur + "  PRIX:" + data.prix + ' COMMENTAIRE:' + data.commentaire + ' <button onclick="del(' + data.id + ')">Supprimer</button> ' +  '</p>' 
         );

         
        })
        .fail(function (status) {
          if( status.status === 422){
            let error =status.responseJSON.errors;
            console.log(error);

          }
        });
};







function getlist() {
 // event.preventDefault();

  
  $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });


  $.ajax({
      method: "POST",
      url: "/api/jeux/all",
      dataType: "json"
  })
      .done(function (data) {
       console.log(data[0].nom);
       console.log(data[1]);
       console.log(data.length);
        // console.log(data.commentaire);


      
 /*//---------------------
for (i=0;i<data.length;i++)
{
  console.log(data[i].nom);
}
//---------------------*/
var arr = [
  'one',
  'two',
  'three',
  'four',
  'five'
  ];


  $.each(data, function (index, value) {
  affichage(value);
  });


      
       
      })
      .fail(function (status) {
        if( status.status === 422){
          let error =status.responseJSON.errors;
          console.log(error);

        }
      });
};


getlist();


function affichage(data){
  $("#list").append('<p class="text-center">'+ data.id +'NOM :'+ data.nom + " EDITEUR :" + data.editeur + "  PRIX:" + data.prix + ' COMMENTAIRE:' + data.commentaire + ' <button onclick="del(' + data.id + ')">Supprimer</button> ' +  '</p>' 
  );
}

function del(id){
  

$.ajax(
  {
    url: "/api/jeux/del",
    type: "GET",
    data : {
      id: id
    }
  }
).done(function(data){
  console.log(data);
})

}



