<?php

/*
 * This file is part of the PHP library "Sorter" package.
 *
 * (c) Maxim Gnatkovsky <Gnatkovsky@bigmir.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gnatkovsky;

class SortingRevers implements SortingInterface
{
    public function sorting(array $data): array
    {
        \arsort($data);

        return $data;
    }
}
