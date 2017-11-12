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

namespace Nugato\Behat\Page\Admin;

use Nugato\Behat\Page\Page;

class DashboardPage extends Page
{
    /**
     * @var string|null
     */
    protected $path = '/admin/';

    /**
     * {@inheritdoc}
     */
    public function getRouteName()
    {
        return 'nucms_admin_dashboard';
    }
}