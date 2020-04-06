<?php 
if (!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['message'])) 
{
    $headers = 'From: Кротов Роман\r\n' .
                'Reply-To: andryuska.tkachenko.42@gmail.com\r\n' .
                'X-Mailer: PHP/' . phpversion();
         
    $theme = "Новое сообщение с сайта";             
             
    $letter = "Данные сообщения:";
    $letter .="\n\n";
    $letter .="Имя: ".$_POST['name'];
    $letter .="\nEmail: ".$_POST['email'];
    $letter .="\nТелефон: ".$_POST['phone'];
    $letter .="\nСообщение: ".$_POST['message'];
    
    if (mail("andryuska.tkachenko.42@gmail.com", $theme, $letter, $headers)){
      header("Location: /mysite/thankyou.php");
    } else {
      header("Location: /mysite");
    }  
              
} else {
  header("Location: /mysite");
}