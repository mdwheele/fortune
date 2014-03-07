<?php

namespace Wheeler\Fortune;

use Wheeler\Fortune\Storage\FortuneRepositoryInterface;
use Wheeler\Fortune\Storage\FileBasedFortuneRepository;

class Fortune
{
    public function __construct(FortuneRepositoryInterface $fortunes)
    {
        $this->fortunes = $fortunes;
    }

    public static function make()
    {
        $instance = new static(new FileBasedFortuneRepository(__DIR__ . '/Data/fortunes.txt'));
        
	return $instance->fortunes->getRandomFortune();
    }
}
