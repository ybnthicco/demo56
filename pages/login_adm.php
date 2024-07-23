<?php
session_start();
  if(!empty($_POST['paswd'])){
     $pass = "".$adminsecretcode."";
    if($_POST['paswd']==$pass){
      $_SESSION['access']=true;
      header("Location: /?page=admin_deposits") ;//Тут ссылка при правильном пароле
    }
    else {
       header("Location: /?page=404") ;//Тут ссылка при неправильном пароле
    }
  }
  else
  {
    ?>
<body class="lc-bg">
<div class="main-bg"></div>
<div class="layout header enter lk norepeat ">
<div style="width: 324px;margin:0 auto;color: #fff;font-weight: 700;margin-top: 10%;">
<br>
Для входа в админпанель, введите пароль!
<br>
<h3 style="color: #fff;">Введите пароль</h3>
<form action="" method="POST">
<input autocomplete="off" type="text" name="paswd">
<input type="submit">
</form>
<br><br>
В противном случае нажмите <a href="/?page=exit">Выход</a>
<br><br><br>
</div>
</div>
</div>
<?php
  }
?>