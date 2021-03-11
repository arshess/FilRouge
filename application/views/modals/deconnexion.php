<div id="deconnexion" class="modal show" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Deconnexion réussie</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Vous avez été deconnecté avec succès.</p>
        <p>Retour à la page principale.</p>
      </div>
      <div class="modal-footer">
        <a href="<?=base_url()?>" class="btn btn-primary">Fermer</a>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(window).on('load', function() {
    $('#deconnexion').modal('show');
  });
</script>