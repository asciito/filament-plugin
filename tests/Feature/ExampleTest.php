<?php

use function Pest\Laravel\get;

test('example', function () {
    get('/')->assertSuccessful();
});
