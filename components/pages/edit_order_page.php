<?php 
  $id = $_GET['id'];
  $result = mysqli_query($connect, "SELECT * FROM orders WHERE `id` = '$id'");
  $order = mysqli_fetch_assoc($result);
?>
    
    <section class="section section_form">
    <div class="wrapper">
      <div class="section_form__flex">
        <h2>Изменение заявки</h2>
        <form enctype="multipart/form-data" class="form form_login" action="../../controllers/edit_order.php" method="post">
        <input type="text" name='id' value='<?=$order['id']?>' style='display: none;'>
          <div>
            <select id="select" name="select_status">
              <option value="1">Решена</option>
              <option value="2">Отклонена</option>
            </select>
            <label for="select">Выберите статус</label>
          </div>
          <div>
            <label for="photo">Фото с решением проблемы из заевки</label>
            <input id="photo" type="file" name="photo">
          </div>
          <input type="text" name="refusal" placeholder="Причина отказа">
          <div>
            <input type="submit" name="submit" value="Отправить">
          </div>
        </form>
      </div>
    </div>
  </section>
</body>
</html>