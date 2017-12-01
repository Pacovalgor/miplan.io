<?php
if(isset($_POST['email'])) {
 
    // Edita las dos líneas siguientes con tu dirección de correo y asunto personalizados
 
    $email_to = "info@miplan.io";
 
    $email_subject = "miplan email contact";   
 
  /*  function died($error) {
      echo "<script language='javascript'> alert('Error. El mensaje no ha sido enviado'); </script>"; //Sale un alerta de confirmación de que el mensaje se ha enviado.
      echo "<script language='javascript'> window.location='../es/'</script>"; //Redirección a la pagina que gusten

        die();
    }
 */
    // Se valida que los campos del formulairo estén llenos
 
    if(//!isset($_POST['first_name']) ||
 
        //!isset($_POST['last_name']) ||
 
        !isset($_POST['email'])) {
           echo "<script language='javascript'> alert('Lo sentimos pero parece haber un problema con los datos enviados.'); </script>"; //Sale un alerta de confirmación de que el mensaje se ha enviado.
           echo "<script language='javascript'> window.location='../es/'</script>"; //Redirección a la pagina que gusten
  //      died('Lo sentimos pero parece haber un problema con los datos enviados.');       
 
    }
 //En esta parte el valor "name" nos sirve para crear las variables que recolectaran la información de cada campo
    
  //  $first_name = $_POST['first_name']; // requerido
 
   // $last_name = $_POST['last_name']; // requerido
 
    $email_from = $_POST['email']; // requerido
 
//En esta parte se verifica que la dirección de correo sea válida 
    
   $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
      echo "<script language='javascript'> alert('La dirección de correo proporcionada no es válida'); </script>"; //Sale un alerta de confirmación de que el mensaje se ha enviado.
      echo "<script language='javascript'> window.location='../es/'</script>"; //Redirección a la pagina que gusten
 //   $error_message .= 'La dirección de correo proporcionada no es válida.<br />';
  }

//En esta parte se validan las cadenas de texto

 /*   $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'El formato del nombre no es válido<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'el formato del apellido no es válido.<br />';
 
  }
 */
//A partir de aqui se contruye el cuerpo del mensaje tal y como llegará al correo

    $email_message = "New user.\n\n";

    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
 //   $email_message .= "Nombre: ".clean_string($first_name)."\n";
 
 //   $email_message .= "Apellido: ".clean_string($last_name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
   
//Se crean los encabezados del correo
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
echo "<script language='javascript'> alert('El mensaje ha sido enviado correctamente'); </script>"; //Sale un alerta de confirmación de que el mensaje se ha enviado.
echo "<script language='javascript'> window.location='../es/'</script>"; //Redirección a la pagina que gusten
}
?>