<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bien Dato'), ['action' => 'edit', $bienDato->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bien Dato'), ['action' => 'delete', $bienDato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bienDato->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bien Datos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bien Dato'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bienes'), ['controller' => 'Bienes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Biene'), ['controller' => 'Bienes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Datos'), ['controller' => 'Datos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dato'), ['controller' => 'Datos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bienDatos view large-9 medium-8 columns content">
    <h3><?= h($bienDato->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Biene') ?></th>
            <td><?= $bienDato->has('biene') ? $this->Html->link($bienDato->biene->id, ['controller' => 'Bienes', 'action' => 'view', $bienDato->biene->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dato') ?></th>
            <td><?= $bienDato->has('dato') ? $this->Html->link($bienDato->dato->id, ['controller' => 'Datos', 'action' => 'view', $bienDato->dato->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($bienDato->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bienDato->id) ?></td>
        </tr>
    </table>
</div>
