<?php

namespace texnixe\codepen;

/**
 * Kirby 3 CodePen Embeds
 *
 * @version   0.9.0
 * @author    Sonja Broda <info@texniq.de>
 * @copyright Sonja Broda <info@texniq.de>
 * @link      https://github.com/texnixe/kirby3-codepen
 * @license   MIT
 */

\Kirby::plugin('texnixe/codepen', [
    'snippets' => [
        'codepen' => __DIR__ . '/snippets/codepen.php'
    ],
    'tags' =>  [
        'codepen' => [
            'attr' => [
                'user',
                'title',
                'preview',
                'height',
                'defaultTab'
            ],
            'html' => function($tag) {

                $id         = $tag->value;
                $user       = $tag->user        ?? '';
                $title      = $tag->title       ?? '';
                $preview    = $tag->preview     ?? $tag->kirby()->option('texnixe.codepen.preview', true);
                $height     = $tag->height      ?? $tag->kirby()->option('texnixe.codepen.height', 300);
                $defaultTab = $tag->defaultTab ?? $tag->kirby()->option('texnixe.codepen.defaultTab', 'js,result');
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
        ]
    ]
]);
