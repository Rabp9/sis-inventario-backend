<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $usuarioActivo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $usuarioActivo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Usuario Activos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuarioActivos form large-9 medium-8 columns content">
    <?= $this->Form->create($usuarioActivo) ?>
    <fieldset>
        <legend><?= __('Edit Usuario Activo') ?></legend>
        <?php
            echo $this->Form->control('usuario_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
