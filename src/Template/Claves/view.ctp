<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Clave'), ['action' => 'edit', $clave->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Clave'), ['action' => 'delete', $clave->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clave->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Claves'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Clave'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="claves view large-9 medium-8 columns content">
    <h3><?= h($clave->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Software') ?></th>
            <td><?= h($clave->software) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Clave') ?></th>
            <td><?= h($clave->clave) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($clave->id) ?></td>
        </tr>
    </table>
</div>
