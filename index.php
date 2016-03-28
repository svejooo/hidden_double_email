<?

         $mail = "ofisdomzdorov@gmail.com";  
        //$mail = "svejooo@gmail.com";  
        $from = "ofisdomzdorov@gmail.com";


         $msg = "Заявка со слайдера на главной <hr>
                  
                  Продукт  - ".$_POST['productSlider']."<br>
                  Имя  - ".$_POST['name']."<br>
                 телефон - ".$_POST['phone']."<br>
                 город  - ".$_POST['email']."<br>
                 Сообщение от:  DOM-ZDOROV.COM <br><br>";
               
              
            //Headers
            $headers  = "MIME-Version: 1.0\r\n";
            $headers .= "Content-type: text/html; charset=UTF-8\r\n";
            $headers .= "BCC: php@rekhod.ru\r\n";
            $headers .= "From: <".$from. ">\r\n";
            $headers .= "X-Mailer: PHP/".phpversion(); 
            mail($mail, $subject, $msg, $headers);
            
?>      
