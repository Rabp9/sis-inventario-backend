<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bienes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tipos'), ['controller' => 'Tipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipo'), ['controller' => 'Tipos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Marcas'), ['controller' => 'Marcas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Marca'), ['controller' => 'Marcas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bienes form large-9 medium-8 columns content">
    <?= $this->Form->create($biene) ?>
    <fieldset>
        <legend><?= __('Add Biene') ?></legend>
        <?php
            echo $this->Form->control('descripcion');
            echo $this->Form->control('modelo');
            echo $this->Form->control('serie');
            echo $this->Form->control('codigo_patrimonial');
            echo $this->Form->control('bien_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
