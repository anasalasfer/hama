<?php

test('renders the about page with the complex description and services', function () {
    $response = $this->get(route('home'));

    $response->assertOk();
    $response->assertSee('مجمع الهامة الشرعي التعليمي');
    $response->assertSee('البرامج التعليمية');
    $response->assertSee('تحفيظ القرآن الكريم');
});
