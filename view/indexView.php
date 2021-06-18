<?php 
include "layout/header.php";
include "layout/nav.php";


?>

<table class="table table-striped mt-5">
    <?php foreach($books as $book): ?>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Auteur</th>
      <th scope="col">Style</th>
      <th scope="col">Parution</th>
      <th scope="col">status</th>
      <th scope="col">Detail</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th><?php echo $book->getId(); ?></th>
      <td><?php echo $book->getTitle(); ?></td>
      <td><?php echo $book->getAurhor(); ?></td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>

<?php endforeach?>

<?php
include "layout/footer.php";
?>
