<?php
/**
 * @var App\Kernel\View\View $view
 */
?>

<?php $view->renderComponent('start'); ?>
Register Page

<form action="/register" method="post">
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
  <button>Register</button>
</form>
<?php $view->renderComponent('end'); ?>
