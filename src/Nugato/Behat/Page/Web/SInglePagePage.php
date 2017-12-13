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

use Nugato\Behat\Page\Page;

class SinglePagePage extends Page implements SinglePageInterface
{
    /**
     * @var string|null
     */
    protected $path = '/{slug}';

    /**
     * @var array
     */
    protected $elements = [
        'Title div' => '.t-page_title_div',
    ];

    /**
     * {@inheritdoc}
     */
    public function isTitleExists(): bool
    {
        return $this->hasElement('Title div');
    }
}
