<?php  


         validacionCampos();
         
        function validacionCampos(){

            if ($_POST['nombre'] === "") 
            
                { 
                 echo "Complete el campo: Nombre" . "<br>";                      
                }
                if ($_POST['apellido'] === "") 
            
                { 
                 echo "Complete el campo: Apellido" . "<br>";                      
                }

                if ($_POST['telefono'] === "") 
            
                { 
                 echo "Complete el campo: Telefono" . "<br>";                      
                }

                if ($_POST['fechaNacimiento'] === "") 
            
                { 
                 echo "Complete el campo: Fecha de nacimiento" . "<br>";                      
                }

                if ($_POST['edad'] === "") 
            
                { 
                 echo "Complete el campo: Edad" . "<br>";                      
                }

                if ($_POST['email'] === "") 
            
                { 
                 echo "Complete el campo: Email" .  "<br>";                      
                }
                

               
            }
            
            validacionEdadTelefono();
               

        function validacionEdadTelefono() {

            if (!is_numeric($_POST['edad'] )) {
                echo "Ingrese valores númericos en Edad" . "<br>";                                 
        }
        if (!is_numeric($_POST['telefono'])) {
            echo "Ingrese valores númericos en Teléfono" . "<br>";                                 
    }
    }

   

    validacionEmail();
               

    function validacionEmail() {

        if (!strpos($_POST['email'], "@" )) {
            echo "Ingrese su email correctamente " . "<br>" . "Ejemplo pepito@gmail.com";                                 
    }
                               
}
    
    



    
               





        