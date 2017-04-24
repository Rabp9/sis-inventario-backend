<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Biene'), ['action' => 'edit', $biene->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Biene'), ['action' => 'delete', $biene->id], ['confirm' => __('Are you sure you want to delete # {0}?', $biene->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bienes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Biene'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipos'), ['controller' => 'Tipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo'), ['controller' => 'Tipos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Marcas'), ['controller' => 'Marcas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Marca'), ['controller' => 'Marcas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bienes view large-9 medium-8 columns content">
    <h3><?= h($biene->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= $biene->has('tipo') ? $this->Html->link($biene->tipo->id, ['controller' => 'Tipos', 'action' => 'view', $biene->tipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Marca') ?></th>
            <td><?= $biene->has('marca') ? $this->Html->link($biene->marca->id, ['controller' => 'Marcas', 'action' => 'view', $biene->marca->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($biene->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modelo') ?></th>
            <td><?= h($biene->modelo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Serie') ?></th>
            <td><?= h($biene->serie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo Patrimonial') ?></th>
            <td><?= h($biene->codigo_patrimonial) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $biene->has('estado') ? $this->Html->link($biene->estado->id, ['controller' => 'Estados', 'action' => 'view', $biene->estado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($biene->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bien Id') ?></th>
            <td><?= $this->Number->format($biene->bien_id) ?></td>
        </tr>
    </table>
</div>
