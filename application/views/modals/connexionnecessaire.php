<div id="connexionnecessaire" class="modal show" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Erreur</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Pour acceder à cette page il faut être connecter</p>
      </div>
      <div class="modal-footer">
        <a href="<?=base_url('User/connexion')?>" class="btn btn-secondary" >Se connecter</a>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(window).on('load', function() {
    $('#connexionnecessaire').modal('show');
  });
</script>