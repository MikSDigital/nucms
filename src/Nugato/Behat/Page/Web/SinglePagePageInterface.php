<?php

/*
 * This file is part of the NuCms package.
 *
 * (c) Jacek Bednarek
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nugato\Behat\Page\Web;

use Nugato\Behat\Page\PageInterface;

interface SinglePagePageInterface extends PageInterface
{
    /**
     * Get title text
     *
     * @return string
     */
    public function getTitleText(): string;
}
