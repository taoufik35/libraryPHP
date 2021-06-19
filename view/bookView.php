
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
            <li class="list-group-item"><?php echo $book->getSummary(); ?></li>
            <li class="list-group-item">A second item</li>
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