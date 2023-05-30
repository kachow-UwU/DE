    <section class="section section_form">
    <div class="wrapper">
      <div class="section_form__flex">
        <h2>Регистрация</h2>
        <form class="form form_login" action="/controllers/register.php" method="post">
          <input type="text" name="name" placeholder="ФИО">
          <input type="text" name="login" placeholder="Логин">
          <input type="email" name="email" placeholder="Email">
          <input type="password" name="pass" placeholder="Пароль">
          <input type="password" name="confirmpass" placeholder="Повторить пароль">
          <div>
            <input type="checkbox" name="check" id="check">
            <label for="check">Я согласен с обработкой персональных данных</label>
          </div>
          <div>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Запомнить меня</label>
          </div>
          <div>
            <input type="submit" name="submit" value="Регистрация">
          </div>
        </form>
      </div>
    </div>
  </section>
</body>
</html>