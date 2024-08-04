<?php

function initESvalidation()
{
    form()->message('required', 'El campo {Field} es requerido.');
    form()->message('email', 'El campo {Field} debe ser una dirección de correo electrónico válida.');
    form()->message('alpha', 'El campo {Field} debe contener sólo letras y espacios.');
    form()->message('text', 'El campo {Field} debe contener sólo letras y espacios.');
    form()->message('textonly', 'El campo {Field} debe contener sólo alfabetos.');
    form()->message('alphanum', 'El campo {Field} debe contener sólo alfabetos y números.');
    form()->message('alphadash', 'El campo {Field} debe contener sólo alfabetos, números, guiones y guiones bajos.');
    form()->message('username', 'El campo {Field} debe contener sólo alfabetos, números y guiones bajos.');
    form()->message('number', 'El campo {Field} debe contener sólo números.');
    form()->message('float', 'El campo {Field} debe contener sólo números.');
    form()->message('date', 'El campo {Field} debe ser una fecha válida.');
    form()->message('min', 'El campo {Field} debe tener al menos %s caracteres.');
    form()->message('max', 'El campo {Field} no debe exceder %s caracteres.');
    form()->message('between', 'El campo {Field} debe tener entre %s y %s caracteres.');
    form()->message('match', 'El campo {Field} debe coincidir con el campo %s.');
    form()->message('contains', 'El campo {Field} debe contener %s.');
    form()->message('boolean', 'El campo {Field} debe ser un booleano.');
    form()->message('in', 'El campo {Field} debe ser uno de los siguientes: %s.');
    form()->message('notin', 'El campo {Field} no debe ser uno de los siguientes: %s.');
    form()->message('ip', 'El campo {Field} debe ser una dirección IP válida.');
    form()->message('ipv4', 'El campo {Field} debe ser una dirección IPv4 válida.');
    form()->message('ipv6', 'El campo {Field} debe ser una dirección IPv6 válida.');
    form()->message('url', 'El campo {Field} debe ser una URL válida.');
    form()->message('domain', 'El campo {Field} debe ser un dominio válido.');
    form()->message('creditcard', 'El campo {Field} debe ser un número de tarjeta de crédito válido.');
    form()->message('phone', 'El campo {Field} debe ser un número de teléfono válido.');
    form()->message('uuid', 'El campo {Field} debe ser un UUID válido.');
    form()->message('slug', 'El campo {Field} debe ser un slug válido.');
    form()->message('json', 'El campo {Field} debe ser un JSON string.');
    form()->message('regex', 'El campo {Field} debe coincidir con el patrón %s.');
    form()->message('array', 'El campo {field} debe ser un array.');
}
