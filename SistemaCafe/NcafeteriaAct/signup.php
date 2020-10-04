<?php // Example 26-5: signup.php
   require_once 'header.php';

 echo <<<_END
   <script>
      function checkUser(user) {
         if (user.value == '') {
            $('#used').html('&nbsp;')
            return
         }
         $.post ( 'checkuser.php', { user : user.value }, 
            function(data) {
               $('#used').html(data)
            }
         )
      }
   </script>
 _END;

   $error = $user = $pass = "";
   if (isset($_SESSION['user'])) destroySession();

   if (isset($_POST['user'])) {
      $user = sanitizeString($_POST['user']);
      $pass = sanitizeString($_POST['pass']);

      if ($user == "" || $pass == "")
        $error = 'No todos los datos fueron ingresados<br><br>';
      else{
         $result = queryMysql("SELECT * FROM members WHERE user='$user'");

         if ($result->num_rows)
            $error = 'that username already exists<br><br>';
         else {
            queryMysql("INSERT INTO members VALUES('$user', '$pass')");
            die('<h4 id="cuenta">Tu cuenta ha sido creada</h4>Inicia sesion.</div></body></html>');
         }
      }
   }

 echo <<<_END
      <form method='post' action='signup.php'>$error
      <div data-role='fieldcontain' id="title">
         <label></label>
         Favor de ingresar los siguientes datos para poder iniciar sesion
      </div>
      <div data-role='fieldcontain'>
         <label id="usuario">nombre de usuario:</label>
         <input type='text' maxlength='16' name='user' value='$user' onBlur='checkUser(this)'>
         <label></label><div id='used'>&nbsp;</div>
      </div>
      <div data-role='fieldconain'>
         <label id="contraseña">contraseña:</label>
         <input type='text' maxlength='16' name='pass' value='$pass'>
      </div>
      <div data-role='fieldcontain'>
         <label></label>
         <input data-transition='slide' type='submit' value='Registrarse'>
      </div>
     </div>
   </body>
  </html>
_END;
?>
  
