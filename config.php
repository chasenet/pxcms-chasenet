<?php

return array(
    // theme info
    'name'    => 'chasenet',
    'author'  => 'Dan Aldridge',
    'site'    => 'http://chasenet.org',
    'type'    => 'frontend',
    'version' => '1.0',

    // theme options
    'inherit' => null, //default

    'events' => array(

        'before' => function ($theme) {
            // You can remove this line anytime.
            $theme->setTitle('Default Theme');

            // Breadcrumb template.
            $theme->breadcrumb()->setTemplate('
                <ol class="breadcrumb">
                @foreach ($crumbs as $i => $crumb)
                    @if ($i != (count($crumbs) - 1))
                    <li><a href="{{ $crumb["url"] }}">{{ $crumb["label"] }}</a></li>
                    @else
                    <li class="active">{{ $crumb["label"] }}</li>
                    @endif
                @endforeach
                </ol>
            ');

        },

        'beforeRenderTheme' => function ($theme) {
            $theme->asset()->add('base', 'assets/css/bootstrap-theme.css', array('bootstrap'));
            $theme->asset()->usePath()->add('base', 'css/styles.css', array('bootstrap'));
            $theme->asset()->usePath()->add('theme', 'css/theme.css', array('base'));
            $theme->asset()->usePath()->add('app.js', 'js/app/application.js', array('base', 'js'));
            $theme->asset()->usePath()->add('modernizr', 'js/modernizr.js');

        },

        'beforeRenderLayout' => array(
            'default' => function ($theme) {
            }
        )
    )
);
