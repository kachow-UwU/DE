  <?php 
  $result = mysqli_query($connect, "SELECT * FROM category");
  ?>
  
  <section class="section section_main">
      <div class="wrapper">
        <main class="main">
          <table>
            <tr>
              <th><div>Название категрии</div></th>
              <th><div>Изменение</div></th>
              <th><div>Удаление</div></th>
            </tr>
            <?php 
            while ($category = mysqli_fetch_assoc($result)) {
              echo "
              <tr>
                <td><div>$category[name]</div></td>
                <td><div><a href=/edit_category_page.php?id=$category[id]>Изменить</a></div></td>
                <td><div><a href=controllers/delete_category.php?id=$category[id]>Удалить</a></div></td>
              </tr>
              ";
            }
            ?>
          </table><br/>
          <a href="/add_category_page.php">Добавить категорию</a>
        </main>
      </div>
    </section>
  </div>
</body>
</html>