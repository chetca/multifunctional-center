<?php 
	require 'db.php';
	require_once 'app/header.php';
	$data = $_POST;
	if ( isset($data['do_login']) )
	{
		$user = R::findOne('users', 'login = ?', array($data['login']));
		if ( $user )
		{
			//логин существует
			if ( password_verify($data['password'], $user->password) )
			{
				//если пароль совпадает, то нужно авторизовать пользователя
				$_SESSION['logged_user'] = $user;
				echo "<script>window.location.href='/'</script>";
			}else
			{
				$errors[] = 'Неверно введен пароль!';
			}

		}else
		{
			$errors[] = 'Пользователь с таким логином не найден!';
		}
		
		if ( ! empty($errors) )
		{
			//выводим ошибки авторизации
			echo '<div id="errors" style="color:red;">' .array_shift($errors). '</div><hr>';
		}

	}

?>

    <div class="form">
        <h3 style="text-align: center;">Аутентификация</h3>
        <form action="login.php" method="post">
            <div class="form-row">
                Логин: <input type="text" name="login" value="<?php echo @$data['login']; ?>" />
                Пароль: <input type="password" name="password" value="<?php echo @$data['password']; ?>" />
            </div>
            <input type="submit" value="Войти" name="do_login" />
        </form>
    </div>
    </body>