<?php

use App\Entities\Buildings;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

require 'vendor/autoload.php';

$xml = file_get_contents(__DIR__ . '/feed.xml');

$serializer = new Serializer(
    [
        new ArrayDenormalizer(),
        new ObjectNormalizer(null, null, null, new PhpDocExtractor())
    ],
    [new XmlEncoder()]
);

$data = $serializer->deserialize($xml, Buildings::class, 'xml');

print_r($data);