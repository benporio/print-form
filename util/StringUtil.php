<?php

class StringUtil {
    public static function uriToClassName(string $uriName): string
    {
        if (str_contains($uriName, '-')) {
            $uriNames = explode('-', $uriName);
            foreach ($uriNames as $name) {
                $name = ucfirst($name);
            }
            return join('', $uriNames);
        }
        
    }
}