$(document).ready(function(){

    
    $.validator.addMethod('strongPassword',function(value,element){
        return this.optional(element) || value.length>=8
        && /^.(?=.{8,})(?=.[a-z])(?=.[A-Z])(?=.[\d])(?=.*[\W]).*$/.test(value);
    }, "<i class='fas fa-exclamation-circle'></i> La contraseña debe contener al menos 8 caracteres, una mayuscula, un digito y un caracter especial");
        
    $.validator.addMethod("roles", function(value, elem, param) {
        return $(".roles:checkbox:checked").length > 0;
    },"You must select at least one!");
    
    $.validator.addMethod("letras", function(value, element) {
    
        return this.optional(element)  ||/^[ñÑa-zA-ZÀ-ÿ\s]+$/i.test(value);
      }, "<i class='fas fa-exclamation-circle'></i> El campo solo debe contener letras");
    
    
    $.validator.addMethod("FormatDate", function(value, element) {
        let currentTime = new Date(); 
        let valueDate = new Date(value + " 00:00:00");
        return this.optional(element)||  valueDate.getTime() < currentTime.getTime();
       }, "<i class='fas fa-exclamation-circle'></i> Escoja una fecha pasada");
    
    $.validator.addMethod('tokenize', function (value, element){
    
        if ($("#"+element.attr('id')).val() != null && ($("#"+element.attr('id')).val() != ""))
        // if ($("#category_select").val() != null && ($("#category_select").val() != ""))
        { 
          $(".has-error").removeClass("has-error") 
          $("#tokenizedemo-error").css("display", "none");
          return true;
        }
        else
        {
          return false;
        };
    },"Iianda");
    
    $(function(){

        $("#editar-perfil").validate({
            rules:{
                name:{
                    required:true,
                    letras:true
                },
                fname:{
                    required:true,
                    letras:true
                },
                lname:{
                    required:true,
                    letras:true
                },
                genero:{
                    required:true
                },
                birthday:{
                    required:true,
                    FormatDate:true
                }
    
    
            },
            messages:{
                name:{
                    required:"<i class='fas fa-exclamation-circle'></i> Por favor ingresa el nombre"
                },
                fname:{
                    required:"<i class='fas fa-exclamation-circle'></i> Por favor ingresa el apellido paterno"
                },
                lname:{
                    required:"<i class='fas fa-exclamation-circle'></i> Por favor ingresa el apellido materno"
                },  
                genero:{
                    required:"<i class='fas fa-exclamation-circle'></i> Seleccione un genero"
                },
                birthday:{
                    required:"<i class='fas fa-exclamation-circle'></i> Debes ingresar una fecha",
                }
            }
        });
    });
    });
    
    