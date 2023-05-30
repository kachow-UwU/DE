<?php 
$result = mysqli_query($connect, "SELECT * FROM orders WHERE `id_status` = '1' ORDER BY `ID` DESC LIMIT 4");
$tracker = mysqli_query($connect, "SELECT * FROM orders WHERE `id_status` = '1'");
?>
  <section class="section section_main">
      <div class="wrapper">
        <main class="main">
          <div class="tracker">
            <h1>Всего решено: <span><?=mysqli_num_rows($tracker);?></span></h1>
            <a href="/add_order_page.php">Добавить заявку</a>
          </div>
          <div class="order">
          <?php 
          while ($order = mysqli_fetch_assoc($result)) {

            $id_category = $order['id_category'];
            $category = mysqli_query($connect, "SELECT * FROM `category` WHERE id = '$id_category'");
            $category = mysqli_fetch_array($category);
            echo "
            <div class=order__block>
              <p class=order__time>$order[create_time]</p>
              <h2 class=order__title>$order[name]</h2>
              <p class=order__category>$category[name]</p>
              <div class='order__img before'><img src=/assets/img/orders/$order[photo_before] alt= /></div>
              <div class='order__img after'><img src=/assets/img/orders/$order[photo_after] alt= /></div>
            </div>
            ";
          }
          ?>
          </div>
        </main>
      </div>
    </section>
  </div>
</body>
</html>