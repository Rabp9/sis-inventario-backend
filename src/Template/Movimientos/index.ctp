<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Movimiento'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bienes'), ['controller' => 'Bienes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Biene'), ['controller' => 'Bienes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Area Activas'), ['controller' => 'AreaActivas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Area Activa'), ['controller' => 'AreaActivas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuario Activos'), ['controller' => 'UsuarioActivos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario Activo'), ['controller' => 'UsuarioActivos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estados'), ['controller' => 'Estados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estado'), ['controller' => 'Estados', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="movimientos index large-9 medium-8 columns content">
    <h3><?= __('Movimientos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bien_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('area_activa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_activo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_inicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_fin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estado_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($movimientos as $movimiento): ?>
            <tr>
                <td><?= $this->Number->format($movimiento->id) ?></td>
                <td><?= $movimiento->has('biene') ? $this->Html->link($movimiento->biene->id, ['controller' => 'Bienes', 'action' => 'view', $movimiento->biene->id]) : '' ?></td>
                <td><?= $movimiento->has('area_activa') ? $this->Html->link($movimiento->area_activa->id, ['controller' => 'AreaActivas', 'action' => 'view', $movimiento->area_activa->id]) : '' ?></td>
                <td><?= $movimiento->has('usuario_activo') ? $this->Html->link($movimiento->usuario_activo->id, ['controller' => 'UsuarioActivos', 'action' => 'view', $movimiento->usuario_activo->id]) : '' ?></td>
                <td><?= h($movimiento->fecha_inicio) ?></td>
                <td><?= h($movimiento->fecha_fin) ?></td>
                <td><?= $movimiento->has('estado') ? $this->Html->link($movimiento->estado->id, ['controller' => 'Estados', 'action' => 'view', $movimiento->estado->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $movimiento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $movimiento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $movimiento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movimiento->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
