<?php

namespace RakutenRws\Api\Definition;

use RakutenRws\Api\AppRakutenApi;

/**
 * This file is part of Rakuten Web Service SDK
 *
 * (c) Rakuten, Inc
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with source code.
 */

/**
 * GoraGoraGolfCourseDetail
 *
 * @package RakutenRws
 * @subpackage Api_Definition
 */
class GoraGoraGolfCourseDetail extends AppRakutenApi
{
    protected
        $isRequiredAccessToken = false,
        $versionMap = array(
            '2013-11-13' => '20131113',
        );

    public function getService()
    {
        return 'Gora';
    }

    public function getOperation()
    {
        return 'GoraGolfCourseDetail';
    }

}
