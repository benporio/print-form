<?php

class ClassLoader
{
    public static function getInstance(string $className): mixed
    {
        $r = new ReflectionClass($className);
        return $r->newInstance();
    }
}