
$("#add_dispositivo").click(function(e){
  e.preventDefault();
  var dis_marca = $('#txt_dis_marca').val();
  var dis_modelo = $('#txt_dis_modelo').val();
  var action = 'addDispositivo';
    $.ajax({
      url: "createDispositivo",
      type: "POST",
      async : true,
      dataType: "json",
      data: {action:action, dispositivo:dis_marca, dispositivo:dis_modelo},
      success: function(response){
        console.log(response);
      }
    });
});