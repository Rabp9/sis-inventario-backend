<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bien Datos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bienes'), ['controller' => 'Bienes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Biene'), ['controller' => 'Bienes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Datos'), ['controller' => 'Datos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dato'), ['controller' => 'Datos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bienDatos form large-9 medium-8 columns content">
    <?= $this->Form->create($bienDato) ?>
    <fieldset>
        <legend><?= __('Add Bien Dato') ?></legend>
        <?php
            echo $this->Form->control('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
