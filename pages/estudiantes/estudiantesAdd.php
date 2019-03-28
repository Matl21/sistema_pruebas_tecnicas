<?php

if(!empty($_POST)) {

  $nombre = $_POST['nombre'];
  
  //Conversion de los datos a arreglo
  //$arreglo= EntityArray::estudianteArray(null,$_POST['nombre'],$_POST['apellido'],$_POST['email'],$_POST['sexo'],$_POST['fecha_nacimiento'],null,true);
  //Insertar un registro
  //$estudianteController->create($arreglo);
  //Llenado del arreglo
  //$estudientes= $estudianteController->read();
}

?>

<script>
$('#insert_form').on("submit", function(event){  
           event.preventDefault();  
           if($('#nombre').val() == "")  
           {  
                alert("Name is required");  
           }  
           else if($('#apellido').val() == '')  
           {  
                alert("Address is required");  
           }  
           else if($('#email').val() == '')  
           {  
                alert("Designation is required");  
           }  
           else if($('#fecha_nacimiento').val() == '')  
           {  
                alert("Age is required");  
           }  
           else  
           {  
                $.ajax({  
                     url:"estudiantesAdd.php",  
                     method:"POST",  
                     data:$('#insert_form').serialize(),  
                     beforeSend:function(){  
                          $('#insert').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#insert_form')[0].reset();  
                          $('#add_data_Modal').modal('hide');  
                          $('#employee_table').html(data);  
                     }  
                });  
           }  
      });  
</script>