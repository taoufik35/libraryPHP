<?php
include "layout/header.php";
include "layout/nav.php";

?>
<form class="" method="post" action="">
  <div class="form-group">
    <label for="title">Titre du livre</label>
    <input type="text" class="form-control" id="title_book" name="title">

    <label for="author">Auteur</label>
    <input type="text" class="form-control" id="author_book" name="author"><br>

    <label for="release_date">Date de parution  </label><br>
    <input type="number" min="1600" max="2050" step="1" value="1989" id="release_date" name="release_date">
  </div><br>
  <div class="form-group">
    <label for="type_of_book">Type de livre</label>
    <select class="form-control" id="type_book" name="book_type">
      <option value="roman">Roman</option>
      <option value="essai">Essai</option>
      <option value="fable">Fable</option>
      <option value="poësie">Poësie</option>
      <option value="conte">Conte</option>
    </select>
  </div>
  <div class="form-group">
    <label for="summary">Résumé du livre (250 charactères max)</label>
    <textarea class="form-control" id="summary" name="summary" maxlength="250" rows="3"></textarea>
  </div>

   <div class="text-center mt-5">
      <button name="new_book" type="submit" class="btn btn-info">Ajouter</button>
    </div>
</form>

<?php 

include "layout/footer.php";

?>