<h1>Hello World from view</h1>
<?php foreach($data['penumpang'] as $penumpang) : ?>
    <?= $penumpang['username']?>
<?php endforeach?>

<a href="<?= BASE_URL ?>/auth/logout">Logout</a>