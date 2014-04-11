<?php

/**
 * This file is part of Laravel Core by Graham Campbell.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace GrahamCampbell\Core\Commands;

use Illuminate\Console\Command;
use Illuminate\Events\Dispatcher;

/**
 * This is the abstract command class.
 *
 * @package    Laravel-Core
 * @author     Graham Campbell
 * @copyright  Copyright 2013-2014 Graham Campbell
 * @license    https://github.com/GrahamCampbell/Laravel-Core/blob/master/LICENSE.md
 * @link       https://github.com/GrahamCampbell/Laravel-Core
 */
abstract class AbstractCommand extends Command
{
    /**
     * The events instance.
     *
     * @var \Illuminate\Events\Dispatcher
     */
    protected $events;

    /**
     * Create a new instance.
     *
     * @param  \Illuminate\Events\Dispatcher  $events
     * @return void
     */
    public function __construct(Dispatcher $events)
    {
        $this->events = $events;
    }

    /**
     * Regenerate the app encryption key.
     *
     * @return void
     */
    protected function genAppKey()
    {
        $this->events->fire('command.genappkey', $this);
    }

    /**
     * Reset all database migrations.
     *
     * @return void
     */
    protected function resetMigrations()
    {
        $this->events->fire('command.resetmigrations', $this);
    }

    /**
     * Run the database migrations.
     *
     * @return void
     */
    protected function runMigrations()
    {
        $this->events->fire('command.runmigrations', $this);
    }

    /**
     * Seed the database.
     *
     * @return void
     */
    protected function runSeeding()
    {
        $this->events->fire('command.runseeding', $this);
    }

    /**
     * Generated the assets.
     *
     * @return void
     */
    protected function genAssets()
    {
        $this->events->fire('command.genassets', $this);
    }

    /**
     * Update the relevant cache.
     *
     * @return void
     */
    protected function updateCache()
    {
        $this->events->fire('command.updatecache', $this);
    }

    /**
     * Try to start the cron jobs.
     *
     * @return void
     */
    protected function extraStuff()
    {
        $this->events->fire('command.extrastuff', $this);
    }

    /**
     * Get the events instance.
     *
     * @return \Illuminate\Events\Dispatcher
     */
    public function getEvents()
    {
        return $this->events;
    }
}
