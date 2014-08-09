<?php

/**
 * This file is part of Laravel Core by Graham Campbell.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at http://bit.ly/UWsjkb.
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace GrahamCampbell\Tests\Core\Commands;

use Mockery;
use GrahamCampbell\Core\Commands\AppReset;
use GrahamCampbell\TestBench\AbstractTestCase;

/**
 * This is the app reset test class.
 *
 * @author    Graham Campbell <graham@mineuk.com>
 * @copyright 2013-2014 Graham Campbell
 * @license   <https://github.com/GrahamCampbell/Laravel-Core/blob/master/LICENSE.md> Apache 2.0
 */
class AppResetTest extends AbstractTestCase
{
    public function testFire()
    {
        $command = $this->getCommand();

        $command->getEvents()->shouldReceive('fire')->once()->with('command.genappkey', $command);
        $command->getEvents()->shouldReceive('fire')->once()->with('command.resetmigrations', $command);
        $command->getEvents()->shouldReceive('fire')->once()->with('command.runmigrations', $command);
        $command->getEvents()->shouldReceive('fire')->once()->with('command.runseeding', $command);
        $command->getEvents()->shouldReceive('fire')->once()->with('command.updatecache', $command);
        $command->getEvents()->shouldReceive('fire')->once()->with('command.genassets', $command);
        $command->getEvents()->shouldReceive('fire')->once()->with('command.extrastuff', $command);

        $command->fire();
    }

    protected function getCommand()
    {
        $events = Mockery::mock('Illuminate\Events\Dispatcher');

        return new AppReset($events);
    }
}