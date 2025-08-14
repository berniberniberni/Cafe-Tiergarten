<?php

Kirby::plugin('custom/auto-target-blank', [
    'hooks' => [
        'kirbytext:after' => function (string $text) {
            $siteUrl = parse_url(site()->url(), PHP_URL_HOST);

            return preg_replace_callback('/<a\s+([^>]+)>/i', function ($matches) use ($siteUrl) {
                $attrs = $matches[1];

                // Link-URL finden
                if (preg_match('/href=["\']([^"\']+)["\']/i', $attrs, $hrefMatch)) {
                    $url = $hrefMatch[1];

                    // Prüfen, ob extern
                    $isExternal = false;
                    if (preg_match('/^https?:\/\//i', $url)) {
                        $host = parse_url($url, PHP_URL_HOST);
                        if ($host && $host !== $siteUrl) {
                            $isExternal = true;
                        }
                    }

                    // Falls extern → target & rel hinzufügen
                    if ($isExternal && !preg_match('/target=/i', $attrs)) {
                        $attrs .= ' target="_blank" rel="noopener noreferrer"';
                    }
                }

                return '<a ' . $attrs . '>';
            }, $text);
        }
    ]
]);
    