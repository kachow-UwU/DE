  <?php 
  if ($_SESSION['role'] == 1) {
    $result = mysqli_query($connect, "SELECT * FROM orders ORDER BY `ID` DESC");
  } else {
    $result = mysqli_query($connect, "SELECT * FROM orders WHERE `id_author` = '$_SESSION[user_id]' ORDER BY `ID` DESC");
  }
  
  ?>
  
  <section class="section section_main">
      <div class="wrapper">
        <main class="main">
        <table>
            <tr>
              <th><div>Дата</div></th>
              <th><div>Афтор</div></th>
              <th><div>Название</div></th>
              <th><div>Описание</div></th>
              <th><div>Категория</div></th>
              <th><div>Статус</div></th>
              <!-- <th><div>Фото</div></th> -->
              <th><div>Удаление</div></th>
            </tr>
            <?php 
            while ($order = mysqli_fetch_assoc($result)) {
              $id_status = $order['id_status'];
              $status = mysqli_query($connect, "SELECT * FROM `status` WHERE id = '$id_status'");
              $status = mysqli_fetch_array($status);

              $id_category = $order['id_category'];
              $category = mysqli_query($connect, "SELECT * FROM `category` WHERE id = '$id_category'");
              $category = mysqli_fetch_array($category);

              $id_author = $order['id_author'];
              $author = mysqli_query($connect, "SELECT * FROM `users` WHERE id = '$id_author'");
              $author = mysqli_fetch_array($author);

              echo "
              <tr>
              <td><div><p>$order[create_time]</p><p>$order[update_time]</p></div></td>
              <td><div>$author[name]</div></td>
              <td><div>$order[name]</div></td>
              <td><div>$order[description]</div></td>
              <td><div>$category[name]</div></td>";
              if ($id_status == 2){
                echo "<td><div>$status[name] <br/> Причина отказа: $order[refusal]</div></td>";
              }  elseif ($_SESSION['role'] == 1) {
                if ($id_status == 1) {
                  echo "<td><div>$status[name]</div></td>";
                } else {
                  echo "<td><div>$status[name]<p><a href=/edit_order_page.php?id=$order[id]>Изменить</a></p></div></td>";
                }
              } else {
                echo "<td><div>$status[name]</div></td>";
              }
              // <td><div><img src=/assets/img/orders/$order[photo_before] alt='' /></div></td>
              echo "
              <td><div><a href=/controllers/delete_order.php?id=$order[id] >Удалить</a></div></td>
            </tr>
              ";
            }
            ?>
          </table><br/>
          <a href="/add_order_page.php">Добавить заявку</a>
        </main>
      </div>
    </section>
  </div>
</body>
</html>