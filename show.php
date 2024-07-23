<?php
    require_once('templates/header.php')
?>
    <div class="container" id="view-contact-container">
        <?php

            require_once('templates/backbtn.html');

        ?>
        <h1 id="main-title"><?= $contact['name']?></h1>
        <p class="bold">Telefone:</p>
        <p><?= $contact['phone']?></p>
        <p class="bold">Observações:</p>
        <p><?= $contact['observations']?></p>
    </div>
<?php
    require_once('templates/footer.php')
?>