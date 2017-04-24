<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Claves'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="claves form large-9 medium-8 columns content">
    <?= $this->Form->create($clave) ?>
    <fieldset>
        <legend><?= __('Add Clave') ?></legend>
        <?php
            echo $this->Form->control('software');
            echo $this->Form->control('clave');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
