$(document).ready(function(){  
  $(document).on('click', '.btn_modal_editar', function(){
    $('#editarModal').modal('show');
    $tr = $(this).closest('tr');
    
    var data = $tr.children("td").map(function(){
      return $(this).text();
    }).get();
    console.log(data);
    $('#edit_id_estudiante').val(data[0]);
    $('#edit_nombre').val(data[1]);
    $('#edit_apellido').val(data[2]);
    $('#edit_email').val(data[3]);
    $('#edit_sexo').val(data[4]);
    $('#edit_fecha_nacimiento').val(data[5]);
  });  
 });