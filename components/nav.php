<section class="section section_nav">
  <div class="wrapper">
    <nav class="nav">
      <ul>
        <li><a href="/">Главная</a></li>
        <li><a href="/orders_page.php">Личный кабинет</a></li>
        <?php if($_SESSION['user_id'] == 2) {
          echo "<li><a href=/category_page.php>Категории</a></li>";
        } ?>
        
      </ul>
    </nav>
  </div>
</section>