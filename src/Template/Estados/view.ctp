<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estado'), ['action' => 'edit', $estado->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estado'), ['action' => 'delete', $estado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estado->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Estados'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estado'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Area Activas'), ['controller' => 'AreaActivas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Area Activa'), ['controller' => 'AreaActivas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bienes'), ['controller' => 'Bienes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Biene'), ['controller' => 'Bienes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Datos'), ['controller' => 'Datos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dato'), ['controller' => 'Datos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Marcas'), ['controller' => 'Marcas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Marca'), ['controller' => 'Marcas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Movimientos'), ['controller' => 'Movimientos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Movimiento'), ['controller' => 'Movimientos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipos'), ['controller' => 'Tipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo'), ['controller' => 'Tipos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuario Activos'), ['controller' => 'UsuarioActivos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario Activo'), ['controller' => 'UsuarioActivos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estados view large-9 medium-8 columns content">
    <h3><?= h($estado->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Descripcion') ?></th>
            <td><?= h($estado->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($estado->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Area Activas') ?></h4>
        <?php if (!empty($estado->area_activas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Area Id') ?></th>
                <th scope="col"><?= __('Estado Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($estado->area_activas as $areaActivas): ?>
            <tr>
                <td><?= h($areaActivas->id) ?></td>
                <td><?= h($areaActivas->area_id) ?></td>
                <td><?= h($areaActivas->estado_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AreaActivas', 'action' => 'view', $areaActivas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AreaActivas', 'action' => 'edit', $areaActivas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AreaActivas', 'action' => 'delete', $areaActivas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $areaActivas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Bienes') ?></h4>
        <?php if (!empty($estado->bienes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Tipo Id') ?></th>
                <th scope="col"><?= __('Marca Id') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Modelo') ?></th>
                <th scope="col"><?= __('Serie') ?></th>
                <th scope="col"><?= __('Codigo Patrimonial') ?></th>
                <th scope="col"><?= __('Estado Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($estado->bienes as $bienes): ?>
            <tr>
                <td><?= h($bienes->id) ?></td>
                <td><?= h($bienes->tipo_id) ?></td>
                <td><?= h($bienes->marca_id) ?></td>
                <td><?= h($bienes->descripcion) ?></td>
                <td><?= h($bienes->modelo) ?></td>
                <td><?= h($bienes->serie) ?></td>
                <td><?= h($bienes->codigo_patrimonial) ?></td>
                <td><?= h($bienes->estado_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Bienes', 'action' => 'view', $bienes->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Bienes', 'action' => 'edit', $bienes->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Bienes', 'action' => 'delete', $bienes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bienes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Datos') ?></h4>
        <?php if (!empty($estado->datos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Tipos Id') ?></th>
                <th scope="col"><?= __('Estado Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($estado->datos as $datos): ?>
            <tr>
                <td><?= h($datos->id) ?></td>
                <td><?= h($datos->descripcion) ?></td>
                <td><?= h($datos->tipos_id) ?></td>
                <td><?= h($datos->estado_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Datos', 'action' => 'view', $datos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Datos', 'action' => 'edit', $datos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Datos', 'action' => 'delete', $datos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $datos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Marcas') ?></h4>
        <?php if (!empty($estado->marcas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Estado Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($estado->marcas as $marcas): ?>
            <tr>
                <td><?= h($marcas->id) ?></td>
                <td><?= h($marcas->descripcion) ?></td>
                <td><?= h($marcas->estado_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Marcas', 'action' => 'view', $marcas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Marcas', 'action' => 'edit', $marcas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Marcas', 'action' => 'delete', $marcas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $marcas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Movimientos') ?></h4>
        <?php if (!empty($estado->movimientos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Bien Id') ?></th>
                <th scope="col"><?= __('Area Activa Id') ?></th>
                <th scope="col"><?= __('Usuario Activo Id') ?></th>
                <th scope="col"><?= __('Fecha Inicio') ?></th>
                <th scope="col"><?= __('Fecha Fin') ?></th>
                <th scope="col"><?= __('Estado Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($estado->movimientos as $movimientos): ?>
            <tr>
                <td><?= h($movimientos->id) ?></td>
                <td><?= h($movimientos->bien_id) ?></td>
                <td><?= h($movimientos->area_activa_id) ?></td>
                <td><?= h($movimientos->usuario_activo_id) ?></td>
                <td><?= h($movimientos->fecha_inicio) ?></td>
                <td><?= h($movimientos->fecha_fin) ?></td>
                <td><?= h($movimientos->estado_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Movimientos', 'action' => 'view', $movimientos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Movimientos', 'action' => 'edit', $movimientos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Movimientos', 'action' => 'delete', $movimientos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $movimientos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tipos') ?></h4>
        <?php if (!empty($estado->tipos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Estado Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($estado->tipos as $tipos): ?>
            <tr>
                <td><?= h($tipos->id) ?></td>
                <td><?= h($tipos->descripcion) ?></td>
                <td><?= h($tipos->estado_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tipos', 'action' => 'view', $tipos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tipos', 'action' => 'edit', $tipos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tipos', 'action' => 'delete', $tipos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Usuario Activos') ?></h4>
        <?php if (!empty($estado->usuario_activos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Usuario Id') ?></th>
                <th scope="col"><?= __('Estado Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($estado->usuario_activos as $usuarioActivos): ?>
            <tr>
                <td><?= h($usuarioActivos->id) ?></td>
                <td><?= h($usuarioActivos->usuario_id) ?></td>
                <td><?= h($usuarioActivos->estado_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'UsuarioActivos', 'action' => 'view', $usuarioActivos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'UsuarioActivos', 'action' => 'edit', $usuarioActivos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'UsuarioActivos', 'action' => 'delete', $usuarioActivos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuarioActivos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
