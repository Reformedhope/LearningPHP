<?php $permissions = 1 ;?>

<?php if ($permissions === 1): ?>
    <h1> Hello admin </h1>
<?php elseif ($permissions === 2): ?>
    <h1> Hello Mod </h1>
<?php else : ?>
<h1> Hello guest</h1>

    <?php endif; ?>