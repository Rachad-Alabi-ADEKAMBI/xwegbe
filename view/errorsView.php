<?php if (!empty($errors)):?>

<div class="alert" width=400>
        <ul>
            <?php foreach ($errors as $error): ?>   
            <li><?= $error; ?></li>
            <?php endforeach;?>
        </ul>
</div>
<?php endif; ?>
