<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario Activo'), ['action' => 'edit', $usuarioActivo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario Activo'), ['action' => 'delete', $usuarioActivo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuarioActivo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuario Activos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario Activo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuarioActivos view large-9 medium-8 columns content">
    <h3><?= h($usuarioActivo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $usuarioActivo->has('estado') ? $this->Html->link($usuarioActivo->estado->id, ['controller' => 'Estados', 'action' => 'view', $usuarioActivo->estado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usuarioActivo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario Id') ?></th>
            <td><?= $this->Number->format($usuarioActivo->usuario_id) ?></td>
        </tr>
    </table>
</div>
