<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Estados'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Area Activas'), ['controller' => 'AreaActivas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Area Activa'), ['controller' => 'AreaActivas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bienes'), ['controller' => 'Bienes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Biene'), ['controller' => 'Bienes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Datos'), ['controller' => 'Datos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dato'), ['controller' => 'Datos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Marcas'), ['controller' => 'Marcas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Marca'), ['controller' => 'Marcas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Movimientos'), ['controller' => 'Movimientos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Movimiento'), ['controller' => 'Movimientos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipos'), ['controller' => 'Tipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipo'), ['controller' => 'Tipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuario Activos'), ['controller' => 'UsuarioActivos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario Activo'), ['controller' => 'UsuarioActivos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estados form large-9 medium-8 columns content">
    <?= $this->Form->create($estado) ?>
    <fieldset>
        <legend><?= __('Add Estado') ?></legend>
        <?php
            echo $this->Form->control('descripcion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
