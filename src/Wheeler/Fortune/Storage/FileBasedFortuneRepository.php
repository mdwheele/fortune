<?php

namespace Wheeler\Fortune\Storage;

class FileBasedFortuneRepository implements FortuneRepositoryInterface
{
    public function __construct($fortuneDataFile)
    {
        $this->file = file($fortuneDataFile);
    }

    public function getRandomFortune()
    {
        return substr($this->file[array_rand($this->file)], 2);
    }
}