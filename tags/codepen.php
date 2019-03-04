<?php

return [
    'attr' => [
        'user',
        'title',
        'preview',
        'height',
        'defaultTab',
        'themeId'
    ],
    'html' => function($tag) {

        $id         = $tag->value;
        $user       = $tag->user        ?? '';
        $title      = $tag->title       ?? '';
        $preview    = $tag->preview     ?? $tag->kirby()->option('texnixe.codepen.preview', true);
        $height     = $tag->height      ?? $tag->kirby()->option('texnixe.codepen.height', 300);
        $defaultTab = $tag->defaultTab  ?? $tag->kirby()->option('texnixe.codepen.defaultTab', 'result');
        $themeId    = $tag->kirby()->option('texnixe.codepen.themeId', 1);


        $html = snippet('codepen', [
            'id'         => $id,
            'user'       => $user,
            'title'      => $title,
            'preview'    => $preview,
            'height'     => $height,
            'defaultTab' => $defaultTab,
            'themeId'    => $themeId
        ], true);

      return $html;

    }
];
