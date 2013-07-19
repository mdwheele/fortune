<?php

namespace Wheeler\Fortune\Storage;

interface FortuneRepositoryInterface
{
    /**
     * @return string
     */
    public function getRandomFortune();
}