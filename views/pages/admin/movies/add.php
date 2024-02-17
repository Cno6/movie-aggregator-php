<?php
/**
 * @var App\Kernel\View\View $view
 */
?>

<?php $view->renderComponent('start'); ?>
<h1>Add movies</h1>

<form action="/admin/movies/add" method="post">
  <p>Name</p>
    <div><input type="text" name="name"></div>
  <div>
    <button>Add</button>  
  </div>
</form>
<?php $view->renderComponent('end'); ?>
