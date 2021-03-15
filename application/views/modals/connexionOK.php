<div id="connexionOK" class="modal show" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Connexion réussie</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Votre connexion s'est effectuée sans soucis.</p>
      </div>
      <div class="modal-footer">
        <a href="<?=base_url($return)?>" class="btn btn-primary">OK</a>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(window).on('load', function() {
    $('#connexionOK').modal('show');
  });
</script>