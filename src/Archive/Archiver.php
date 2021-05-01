<?php

namespace Jascha030\Live\Archive;

use Archive7z\Archive7z;

final class Archiver extends Archive7z
{
    public function __construct(string $filename)
    {
        parent::__construct($filename);
    }
}
