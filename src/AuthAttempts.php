<?php

namespace Korko\AuthAttempts;

use Encore\Admin\Extension;

class AuthAttempts extends Extension
{
    public $name = 'auth-attempts';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Authattempts',
        'path'  => 'auth-attempts',
        'icon'  => 'fa-gears',
    ];
}