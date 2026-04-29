<?php

it('renders the independent root page', function () {
    $response = $this->get('/');

    $response->assertOk();
});
