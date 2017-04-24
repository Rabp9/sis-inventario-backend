<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Movimientos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bienes'), ['controller' => 'Bienes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Biene'), ['controller' => 'Bienes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Area Activas'), ['controller' => 'AreaActivas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Area Activa'), ['controller' => 'AreaActivas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuario Activos'), ['controller' => 'UsuarioActivos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario Activo'), ['controller' => 'UsuarioActivos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="movimientos form large-9 medium-8 columns content">
    <?= $this->Form->create($movimiento) ?>
    <fieldset>
        <legend><?= __('Add Movimiento') ?></legend>
        <?php
            echo $this->Form->control('fecha_inicio');
            echo $this->Form->control('fecha_fin', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
