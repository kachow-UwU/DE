  <section class="section section_form">
    <div class="wrapper">
      <div class="section_form__flex">
        <h2>Войти</h2>
        <form class="form form_login" action="../../controllers/login.php" method="post">
          <input type="text" name="login" placeholder="Логин">
          <input type="password" name="pass" placeholder="Пароль">
          <div><input type="submit" name="submit" value="Войти"></div>
        </form>
        <p>Нет учетной записи? <a href="/register_page.php">Зарегистрироваться</a></p>
      </div>
    </div>
  </section>
</body>
</html>