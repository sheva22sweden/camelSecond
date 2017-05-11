<?php 
if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['phone']) AND !empty($_POST['birthday'])) 
{
    $headers = 'From: Admin\r\n' .
                'Reply-To: admin@18camel.com\r\n' .
                
         
    $theme = "Волшебный пинок: регистрация";             
             
    $letter = "Данные сообщения:";
    $letter .="\n\n";
    $letter .="Имя: ".$_POST['name'];
    $letter .="\nEmail: ".$_POST['email'];
    $letter .="\nТелефон: ".$_POST['phone'];
    $letter .="\nДата рождения: ".$_POST['birthday'];
    
    if (mail("admin@18camel.com", $theme, $letter, $headers)){
      header("Location: thank's.html");
    } else {
      header("Location: /testform");
    }  
              
} else {
  header("Location: /testform");
}