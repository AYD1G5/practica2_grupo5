<?php
    $id_prod = 1;
    $cant = 2;
    echo Form::open(array('route' => array('AgregarProducto', $id_prod), 'class'=>'form-inline'));
    echo Form::number('cantidad', $cant, ['min'=>0, 'class' => 'form-control form-control-sm', 'style' => 'width:40%;']);
    echo Form::submit('Agregar', ['class' => 'btn btn-info btn-sm']);
    echo Form::close();
?>