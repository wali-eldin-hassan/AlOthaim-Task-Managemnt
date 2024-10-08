<?php

test('app does not contain any dd() or dump() or ray() calls')
    ->expect(['dd', 'dump', 'ray'])
    ->not->toBeUsed();

test('controllers are suffixed with Controller')
    ->expect('App\Http\Controllers')
    ->toHaveSuffix('Controller');
