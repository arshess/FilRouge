<div id="comptedesactive" class="modal show" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Connexion Impossible</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Votre compte a bien été desactivé suite à votre demande</p>
      </div>
      <div class="modal-footer">
        <a href="<?=base_url('User')?>" class="btn btn-secondary">Fermer</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(window).on('load', function() {
    $('#comptedesactive').modal('show');
  });
</script>