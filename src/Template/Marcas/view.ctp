<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Marca'), ['action' => 'edit', $marca->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Marca'), ['action' => 'delete', $marca->id], ['confirm' => __('Are you sure you want to delete # {0}?', $marca->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Marcas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Marca'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="marcas view large-9 medium-8 columns content">
    <h3><?= h($marca->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($marca->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $marca->has('estado') ? $this->Html->link($marca->estado->id, ['controller' => 'Estados', 'action' => 'view', $marca->estado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($marca->id) ?></td>
        </tr>
    </table>
</div>
