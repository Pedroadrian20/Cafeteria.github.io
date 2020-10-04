<?php // Example 26-7: Login.php
  require_once 'header.php';
  $error = $user = $pass = "";

  if (isset($_POST['user']))
  {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);

    if ($user == "" || $pass == "")
      $error = 'Not all fields were entered';
    else
    {
      $result = queryMySQL("SELECT user,pass FROM members WHERE user='$user' AND pass='$pass'");

      if ($result->num_rows == 0)
      {
        $error = "Invalid login attempt";
      }
      else
      {
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        die("<div class='center'>Has iniciado sesion correctamente, ahora <a data-transition='slide' href='members.php?view=$user'>has click aqui para continuar.</div></div></body></html>");
      }
    }
  }

 echo <<<_END
      <form method ='post' action ='login.php'>
        <div data-role='fieldcontain'>
          <label></label>
          <span class='error'>$error</span>
        </div>
        <div data-role='fieldcontain' id="title2">
          <label></label>
          Favor de ingresar los siguientes datos para poder iniciar sesion
        </div>
        <div data-role='fieldcontain'>
          <label id="usuario2">Nombre de Usuario:</label>
          <input type='text' maxlength='16' name='user' value='$user'>
        </div>
        <div data-role='fieldcontain'>
          <label id="contraseña2">Contraseña:</label>
          <input type='password' maxlength='16' name='pass' value='$pass'>
        </div>
        <div data-role='fieldcontain'>
          <label></label>
          <input data-role-transition='slide' type='submit' value='Iniciar Sesion'>
        </div>
      </form>
    </div>
  </body>
 </html>
_END;
?>
      