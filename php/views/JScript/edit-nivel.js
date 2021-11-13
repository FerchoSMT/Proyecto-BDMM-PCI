$(document).ready(function(){

    
    $(function(){

        $("#edit-nivel").validate({
            rules:{
                descripcion:{
                    required:true
                }
    
            },
            messages:{
                descripcion:{
                    required:"<i class='fas fa-exclamation-circle'></i> Por favor ingresa descripcion para el nivel"
                }
            }
        });
    
       
    });
    });
    
    