<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Add Animation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
      <div class="modal-body">
        <form method="POST" action="../Modele/admin_anim/add.php">
            <div class="mb-3 row">
              <label class="col-sm-2 col-form-label">Nom_Anim</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Nom_Anim">
                </div>
              </div>
            <div class="mb-3 row">
          <label class="col-sm-2 col-form-label">Vacances_Scolaire_Bool</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Vacances_Scolaire">
              </div>
            </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Hors_Vacances_Scolaire_Bool</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Hors_Vacances_Scolaire">
                </div>
            </div>  
        </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Sauvegarder</a>
    </form>
    </div>
   </div>
  </div>
</div>