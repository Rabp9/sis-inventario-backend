<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Area Activa'), ['action' => 'edit', $areaActiva->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Area Activa'), ['action' => 'delete', $areaActiva->id], ['confirm' => __('Are you sure you want to delete # {0}?', $areaActiva->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Area Activas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Area Activa'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="areaActivas view large-9 medium-8 columns content">
    <h3><?= h($areaActiva->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= $areaActiva->has('estado') ? $this->Html->link($areaActiva->estado->id, ['controller' => 'Estados', 'action' => 'view', $areaActiva->estado->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($areaActiva->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Area Id') ?></th>
            <td><?= $this->Number->format($areaActiva->area_id) ?></td>
        </tr>
    </table>
</div>
