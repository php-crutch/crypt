<?php

declare(strict_types=1);

namespace Crutch\Crypt;

interface Crypt
{
    /**
     * @param string $decrypted
     * @return string
     */
    public function encrypt(string $decrypted): string;

    /**
     * @param string $encrypted
     * @return string
     */
    public function decrypt(string $encrypted): string;
}
