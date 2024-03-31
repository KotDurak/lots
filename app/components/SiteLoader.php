<?php

namespace components;

class SiteLoader
{
    public function getDocument(string $url): \DOMXPath
    {
        $content = $this->getContent($url);

        $dom = new \DOMDocument();
        @$dom->loadHTML($content);
        $document = new \DOMXPath($dom);

        return $document;
    }

    private function getContent(string $url)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $html = curl_exec($ch);
        curl_close($ch);

        return $html;

        return file_get_contents($url, false, stream_context_create([
            'ssl'   => [
                'verify_peer'   => false,
                'verify_peer_name' => false,
            ]
        ]));
    }
}