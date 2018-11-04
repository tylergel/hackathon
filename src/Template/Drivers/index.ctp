<html>
<?= $this->Form->create(null, [
    'url' => ['controller' => 'Drivers', 'action' => 'findstore']
]); ?>

Enter zip code
<?= $this->Form->control('quote'); ?>

<?= $this->Form->end(); ?>

</html>
