<?php

function vite(array $entries): string
{
    $hotFile = PATH . '../public/hot';

    if (file_exists($hotFile)) {
        $devServerUrl = trim(file_get_contents($hotFile));
        $tags = viteTag($devServerUrl . '/@vite/client');
        foreach ($entries as $entry) {
            $tags .= viteTag($devServerUrl . '/' . $entry);
        }
        return $tags;
    }

    $manifestPath = PATH . '../public/build/manifest.json';

    if (!file_exists($manifestPath)) {
        return '';
    }

    $manifest = json_decode(file_get_contents($manifestPath), true);
    $tags = '';

    foreach ($entries as $entry) {
        if (!isset($manifest[$entry])) {
            continue;
        }

        $chunk = $manifest[$entry];
        $tags .= viteTag('/build/' . $chunk['file']);

        foreach ($chunk['css'] ?? [] as $cssFile) {
            $tags .= viteTag('/build/' . $cssFile);
        }
    }

    return $tags;
}

function viteTag(string $url): string
{
    if (preg_match('/\.css(\?|$)/i', $url)) {
        return '<link rel="stylesheet" href="' . $url . '">' . "\n";
    }

    return '<script type="module" src="' . $url . '"></script>' . "\n";
}
