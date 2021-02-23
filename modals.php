<!-- Modifier une image -->

<div class="modal fade" id="editimg" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Ajouter ou modifier une image</h5>
        <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close"><i class="fas fa-times text-white"></i></button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div>
            <div class="custom-file my-4">
              <input type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Choisir une image</label>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Nom/Libellé</label>
                <input type="text" class="form-control" name="name" aria-describedby="name">
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Crédits photos (Auteur/Banque d'images)</label>
                <input type="text" class="form-control" name="credits" aria-describedby="text">
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Fin des droits</label>
                <input type="date" class="form-control" name="end_date" aria-describedby="date" value>
            </div>
          </div>

          <div class="mb-3">
            <select name="tags" class="custom-select" multiple>
              <option disabled selected>Tags</option>
              <?php
                $tags = db_get('tags');
                foreach($tags as $tag){
              ?>
                <option value="<?php echo $tag['id']?>"><?php echo $tag['name'] ?></option>
              <?php
                }
              ?>
            </select>
          </div>

          <label>Image :</label>
          <div class="px-4">
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="with_product" name="with_product" value="1">
              <label class="custom-control-label" for="with_product">avec produit(s)</label>
            </div>

            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="with_human" name="with_human" value="1">
              <label class="custom-control-label" for="with_human">avec humain(s)</label>
            </div>

            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="institutional" name="institutional" value="1">
              <label class="custom-control-label" for="institutional">institutionnelle</label>
            </div>

            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="limited" name="limited" value="1">
              <label class="custom-control-label" for="limited">aux droits d'utilisation limités</label>
            </div>
          </div>

          <div class="my-4 text-center">
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline1" name="type" class="custom-control-input" value="Logo">
              <label class="custom-control-label" for="customRadioInline1">Logo</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline2" name="type" class="custom-control-input" value="Photo Passionfroid">
              <label class="custom-control-label" for="customRadioInline2">Photo Passionfroid</label>
            </div>

            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="customRadioInline3" name="type" class="custom-control-input" value="Photo Fournisseur">
              <label class="custom-control-label" for="customRadioInline3">Photo Fournisseur</label>
            </div>
            
            <input type="hidden" name="id" value="0">
            <input type="hidden" name="_form" value="formEdit">
            <button type="submit" class="btn btn-primary mt-4">Terminer</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>