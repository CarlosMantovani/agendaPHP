<?php
    include_once("templates/header.php");
    ?>

    <div class="container">
   
    <h1 id="main-title">Editar Contato</h1>
    <form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
        <input type="hidden" name="type" value="edit">
        <input type="hidden" name="id" value="<?= $contact['id']?>">
        <div class="form-group">
            <label for="name">Nome do Contato:</label>
            <input type="text" class= "form-control"id="name" name="name" placeholder="Digite o nome" pattern="[A-Za-zÀ-ÖØ-öø-ÿ\s]+" title="O nome deve conter apenas letras e espaços."value="<?= $contact['name']?>" required>
        </div>
        <div class="form-group">
            <label for="phone">Telefone do Contato:</label>
            <input type="text" class= "form-control"id="phone" name="phone" placeholder="Digite o Telefone" pattern="\(\d{2}\) \d{5}-\d{4}" title="O formato deve ser (XX) XXXXX-XXXX" value="<?= $contact['phone']?>"required>
        </div>
        <div class="form-group">
            <label for="observations">Observação:</label>
            <textarea class="form-control" id="observations" name="observations" placeholder="Digite as observações" rows="3" required><?= $contact['observations'] ?></textarea>

        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button> 
        <button type="button" class="btn btn-warning"><a href="<?= $BASE_URL ?>index.php">Voltar</a></button>
    </form>
    </div>

<?php
    include_once("templates/footer.php");
?>
