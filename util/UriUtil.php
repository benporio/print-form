<?php

class UriUtil {
    public static function getUriPart(string $url, int $index): string
    {
        return explode('/', parse_url($url, PHP_URL_PATH))[$index];
    }
}