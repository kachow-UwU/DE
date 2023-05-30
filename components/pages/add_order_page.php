  <?php 
  $result = mysqli_query($connect, "SELECT * FROM category");
  ?>
    <section class="section section_form">
    <div class="wrapper">
      <div class="section_form__flex">
        <h2>Добавление заявки</h2>
        <form enctype="multipart/form-data" class="form form_login" action="../controllers/add_order.php" method="post">
          <input type="text" name="name" placeholder="Название">
          <input type="text" name="description" placeholder="Описание">
          <div>
            <select id="select" name="select_category">
              <?php 
              while ($category = mysqli_fetch_assoc($result)) {
                echo "
                <option value=$category[id]>$category[name]</option>
                ";
              }
              ?>
            </select>
            <label for="select">Выберите категрию</label>
          </div>
          <div>
            <label for="photo">Фото с проблемой из заявки</label>
            <input id="photo" type="file" name="photo">
          </div>
          <div>
            <input type="submit" name="submit" value="Отправить">
          </div>
        </form>
      </div>
    </div>
  </section>
</body>
</html>