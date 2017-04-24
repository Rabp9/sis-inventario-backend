<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dato'), ['action' => 'edit', $dato->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dato'), ['action' => 'delete', $dato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dato->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Datos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dato'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipos'), ['controller' => 'Tipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo'), ['controller' => 'Tipos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="datos view large-9 medium-8 columns content">
    <h3><?= h($dato->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($dato->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= $dato->has('tipo') ? $this->Html->link($dato->tipo->id, ['controller' => 'Tipos', 'action' => 'view', $dato->tipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $dato->has('estado') ? $this->Html->link($dato->estado->id, ['controller' => 'Estados', 'action' => 'view', $dato->estado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($dato->id) ?></td>
        </tr>
    </table>
</div>
