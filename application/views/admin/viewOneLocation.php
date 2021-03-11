<div class="row justify-content-center my-2">
<?php

setlocale(LC_ALL,'fr-FR');
?>

<?=form_open('Admin/');?>
<table>
<?php
foreach($ARentOne as $datum){
?>
<tr>
<td>
<?= form_input(['type' => 'text', 'id' => 'firstlastname', 'class' => 'form-control', 'name' => 'firstlastname', 'value' => $datum->Prenom . ' ' . $datum->Nom]); ?>
</td>
</tr>
<tr>
<td>
<?= form_input(['type' => 'text', 'id' => 'numberPlate', 'class' => 'form-control', 'name' => 'numberPlate', 'value' => $datum->immatriculation]); ?>
</td>
</tr>
<tr>
<td>
<?= form_input(['type' => 'text', 'id' => 'brand', 'class' => 'form-control', 'name' => 'brand', 'value' => $datum->marque]); ?>
</td>
</tr>
<tr>
<td>
<?= form_input(['type' => 'text', 'id' => 'model', 'class' => 'form-control', 'name' => 'model', 'value' => $datum->modele]); ?>
</td>
</tr>
<tr>
<td>
<?= form_input(['type' => 'text', 'id' => 'begindate', 'class' => 'form-control', 'name' => 'begindate', 'value' => strftime('%A %e-%m-%Y', strtotime($datum->debutDate))]); ?>
</td>
</tr>
<tr>
<td>
<?= form_input(['type' => 'text', 'id' => 'enddate', 'class' => 'form-control', 'name' => 'enddate', 'value' => strftime('%A %e-%m-%Y', strtotime($datum->finDate))]); ?>
</td>
</tr>
<tr>
<td>
<?= form_input(['type' => 'text', 'id' => 'startmileage', 'class' => 'form-control', 'name' => 'startmileage']); ?>
</td>
</tr>
<tr>
<td>
<?= form_submit('back','Retour'); ?>
</td>
</tr>
<tr>
<td>
<?= form_submit('save','Enregistrer'); ?>
</td>
</tr>
<?php
}
?>
</table>
<?= form_close(); ?>

</div>