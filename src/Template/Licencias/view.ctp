<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Licencia'), ['action' => 'edit', $licencia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Licencia'), ['action' => 'delete', $licencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $licencia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Licencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Licencia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="licencias view large-9 medium-8 columns content">
    <h3><?= h($licencia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($licencia->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= h($licencia->categoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($licencia->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $licencia->has('estado') ? $this->Html->link($licencia->estado->id, ['controller' => 'Estados', 'action' => 'view', $licencia->estado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($licencia->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad Total') ?></th>
            <td><?= $this->Number->format($licencia->cantidad_total) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Serial') ?></h4>
        <?= $this->Text->autoParagraph(h($licencia->serial)); ?>
    </div>
</div>
