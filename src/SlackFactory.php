<?php

/*
 * This file is part of NotifyMe.
 *
 * (c) Alt Three LTD <support@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NotifyMeHQ\Slack;

use GuzzleHttp\Client;
use NotifyMeHQ\Contracts\FactoryInterface;
use NotifyMeHQ\NotifyMe\Arr;

class SlackFactory implements FactoryInterface
{
    /**
     * Create a new slack gateway instance.
     *
     * @param string[] $config
     *
     * @return \NotifyMeHQ\Slack\SlackGateway
     */
    public function make(array $config)
    {
        Arr::requires($config, ['token']);

        $client = new Client();

        return new SlackGateway($client, $config);
    }
}
