<?php 
include "layout/header.php";
include "layout/nav.php";


?>

<table class="table table-striped mt-5">

  <thead>
    <tr class="text-center">
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
  <?php foreach($books as $key=> $book): ?>
    <tr class="text-center">    
    
      <th scope="row"><?php echo $book->getId(); ?></th>
      <td><?php echo $book->getTitle(); ?></td>
      <td><?php echo $book->getAuthor(); ?></td>
      <td><?php echo $book->getBook_type();?></td>
      <td><?php echo $book->getRelease_date();?></td>
      <?php if ($book->getBorrow()=== 1): ?>
       <td class="text-danger"><?php echo "<i class='fas fa-times-circle'></i>"?></td>
      <?php else :?>

        <td class="text-success"><?php echo "<i class='fas fa-check-circle'>"?></td>

      <?php endif ?>
      <td><a href="#" class="btn btn-info">Voir</a></td>
    </tr>
   <?php endforeach ?>
  </tbody>
</table>



<?php
include "layout/footer.php";
?>
