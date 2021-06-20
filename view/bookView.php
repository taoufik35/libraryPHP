
<?php 
include "layout/header.php";
include "layout/nav.php";
if(!isset($error)):
?>
<div class="row mt-5 text-center single">
    <h2>Détails du livre</h2>
    <div class="row mt-5">
      <div class="col-12 col-md-6 col-lg-4">
        <article class="card">
          <div class="card-header">
            <h5 class="card-title"><?php echo $book->getTitle(); ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">auteur : <?php echo $book->getAuthor(); ?></h6>
          </div>
          <ul class="list-group list-group-flush">
            
          <li class="list-group-item"><?php echo $book->getRelease_date(); ?></li>
          <li class="list-group-item"><?php echo $book->getBook_type(); ?></li>
            <li class="list-group-item"><?php echo $book->getSummary(); ?></li>
             <?php if ($book->getBorrow()=== 1): ?>
            <li class="list-group-item text-danger">status de livre : <?php echo "<i class='fas fa-times-circle'></i>"?></li>
            <li class="list-group-item">Emprunter le :<?php echo $book->getBorrow_date(); ?></li>
            <?php else :?>
              <li class="list-group-item text-success">status de livre :<?php echo "<i class='fas fa-check-circle'></i>"?></li>
            <?php endif; ?>
            <?php if($book->getCustomer_id() !== NULL) :?>
            <li class="list-group-item">Emprunter par : <?php echo $customer->getLastname() . " " . $customer->getFirstname(); ?></li>
            <?php endif;?>
            <li class="list-group-item">A third item</li>
        </ul>

                <?php if($book->getBorrow() === 0): ?>
                <div class="bouton">
               <?php echo "<a href='#' class='btn bout btn-danger'>emprunter</a>" ?>
                   
                </div>
                <?php endif ?>
            </div>
            </div>
        </div>
    </div>
</div>
<?php endif ?>
<?php
include "layout/footer.php";
?>