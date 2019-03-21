<?php

namespace texnixe\codepen;

/**
 * Kirby 3 CodePen Embeds
 *
 * @version   0.9.3
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
        'codepen' => require __DIR__ . '/tags/codepen.php'
    ]
]);
