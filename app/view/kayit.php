<?php require 'static/header.php' ?>

  <?php if (isset($error)): ?>
    <div class="error">
      <?=$error?>
    </div>
  <?php endif; ?>

  <form action="" method="post">
    <?=__('kullanıcı adı')?>: <input type="text" name="user_name"> <br>
    <button type="submit" name="submit" value="1"><?=__('Kayıt ol')?></button>
  </form>

<?php require 'static/footer.php' ?>
