<?php
  include_once("templates/header.php");
?>
<div class="container" id="view-contact-container">
  
    <h1 id="main-title">
        <?= $contact["name"]?>
    </h1>
    <p class="bold">Telefone:</p>
    <p><?= $contact["phone"]?></p>
    <p class="bold">Observações:</p>
    <p><?= $contact["observations"]?></p>
    <button type="button" class="btn btn-warning"><a href="<?= $BASE_URL ?>index.php">Voltar</a></button>

</div>

<?php
  include_once("templates/footer.php");
?>