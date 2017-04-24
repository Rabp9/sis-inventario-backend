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
                ['action' => 'delete', $clave->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clave->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Claves'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="claves form large-9 medium-8 columns content">
    <?= $this->Form->create($clave) ?>
    <fieldset>
        <legend><?= __('Edit Clave') ?></legend>
        <?php
            echo $this->Form->control('software');
            echo $this->Form->control('clave');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
