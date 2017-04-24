<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Movimiento'), ['action' => 'edit', $movimiento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Movimiento'), ['action' => 'delete', $movimiento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movimiento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Movimientos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movimiento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bienes'), ['controller' => 'Bienes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Biene'), ['controller' => 'Bienes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Area Activas'), ['controller' => 'AreaActivas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Area Activa'), ['controller' => 'AreaActivas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuario Activos'), ['controller' => 'UsuarioActivos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario Activo'), ['controller' => 'UsuarioActivos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="movimientos view large-9 medium-8 columns content">
    <h3><?= h($movimiento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Biene') ?></th>
            <td><?= $movimiento->has('biene') ? $this->Html->link($movimiento->biene->id, ['controller' => 'Bienes', 'action' => 'view', $movimiento->biene->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Area Activa') ?></th>
            <td><?= $movimiento->has('area_activa') ? $this->Html->link($movimiento->area_activa->id, ['controller' => 'AreaActivas', 'action' => 'view', $movimiento->area_activa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario Activo') ?></th>
            <td><?= $movimiento->has('usuario_activo') ? $this->Html->link($movimiento->usuario_activo->id, ['controller' => 'UsuarioActivos', 'action' => 'view', $movimiento->usuario_activo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $movimiento->has('estado') ? $this->Html->link($movimiento->estado->id, ['controller' => 'Estados', 'action' => 'view', $movimiento->estado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($movimiento->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Inicio') ?></th>
            <td><?= h($movimiento->fecha_inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Fin') ?></th>
            <td><?= h($movimiento->fecha_fin) ?></td>
        </tr>
    </table>
</div>
