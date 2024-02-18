<?php
/**
 * @var App\Kernel\View\View $view
 * @var App\Kernel\Session\Session $session
 */
?>

<?php $view->renderComponent('start'); ?>
<h1>Add movies</h1>

<form action="/admin/movies/add" method="post">
  <p>Name</p>
  <div>
    <input type="text" name="name">
  </div>
  <?php if ($session->has('name')) { ?>
    <ul>
      <?php foreach ($session->getFlash('name') as $field => $error) { ?>
        <li><?= $error ?></li>
      <?php } ?>
    </ul>
  <?php } ?>
  <div>
    <button>Add</button>  
  </div>
</form>
<?php $view->renderComponent('end'); ?>
