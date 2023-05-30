<?php 
  $id = $_GET['id'];
  $result = mysqli_query($connect, "SELECT * FROM category WHERE `id` = '$id'");
  $category = mysqli_fetch_assoc($result);
?>

<section class="section section_form">
    <div class="wrapper">
      <div class="section_form__flex">
        <h2>Изменение категорий</h2>
        <form class="form form_login" action="../../controllers/edit_category.php" method="post">
          <input type="text" name='id' value='<?=$category['id']?>' style='display: none;'>
          <input type="text" name="name" placeholder="Название категории" value="<?=$category['name']?>">
          <div><input type="submit" name="submit" value="Изменить"></div>
        </form>
      </div>
    </div>
  </section>
</body>
</html>