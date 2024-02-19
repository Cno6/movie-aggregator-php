<?php
/**
 * @var App\Kernel\View\View $view
 * @var App\Kernel\Session\Session $session
 */
?>

<?php $view->renderComponent('start'); ?>
Auth Page

<form action="/auth" method="post">
  <label>
    Email
    <input type="email" name="email">
  </label>
  
  <?php if ($session->has('email')) { ?>
    <ul>
      <?php foreach ($session->getFlash('email') as $field => $error) { ?>
        <li><?= $error ?></li>
      <?php } ?>
    </ul>
  <?php } ?>
  <br>
  <label>
    Password
    <input type="password" name="password">
  </label>
  <?php if ($session->has('password')) { ?>
    <ul>
      <?php foreach ($session->getFlash('password') as $field => $error) { ?>
        <li><?= $error ?></li>
      <?php } ?>
    </ul>
  <?php } ?>
  <br>
  <button>Auth</button>
</form>
<?php $view->renderComponent('end'); ?>
