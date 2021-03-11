<div id="inscription1OK" class="modal show" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Inscription réussie</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Votre compte a bien été créé. Pour pourrez le completer dans votre <a href="<?=base_url('User/showProfil')?>">profil</a> afin d'effectuer une location.</p>
        <p> Merci de vous connecter.</p>
      </div>
      <div class="modal-footer">
        <a href="<?=base_url('User/connexion')?>" class="btn btn-primary">Fermer</a>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(window).on('load', function() {
    $('#inscription1OK').modal('show');
  });
</script>