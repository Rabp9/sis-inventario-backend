<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Licencias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="licencias form large-9 medium-8 columns content">
    <?= $this->Form->create($licencia) ?>
    <fieldset>
        <legend><?= __('Add Licencia') ?></legend>
        <?php
            echo $this->Form->control('descripcion');
            echo $this->Form->control('serial');
            echo $this->Form->control('categoria');
            echo $this->Form->control('tipo');
            echo $this->Form->control('cantidad_total');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
