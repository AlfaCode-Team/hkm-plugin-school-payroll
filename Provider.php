<?php

declare(strict_types=1);

namespace Plugins\SchoolPayroll;

use AlfacodeTeam\PhpServicePlatform\Kernel\Contracts\ModuleContract;
use Plugins\SchoolPayroll\API\Contracts\SchoolPayrollContract;
use AlfacodeTeam\PhpServicePlatform\Kernel\Container\ModuleContainer;
use AlfacodeTeam\PhpServicePlatform\Kernel\Events\EventBus;
use AlfacodeTeam\PhpServicePlatform\Kernel\Pipelines\Cli\CliPipeline;
use AlfacodeTeam\PhpServicePlatform\Kernel\Pipelines\Http\HttpPipeline;
use AlfacodeTeam\PhpServicePlatform\Kernel\Pipelines\Worker\WorkerPipeline;

/**
 * SchoolPayroll — wires the 'school.payroll' domain.
 *
 * Staff and teacher salaries with per-target caps.
 *
 * Keep this module focused on ONE business domain. Wire internal bindings with
 * $container->bindInternal(); publish cross-module contracts with $container->bind().
 */
final class Provider implements ModuleContract
{
    public function solves(): string
    {
        return 'school.payroll';
    }

    /** @return list<string> module DOMAINS — mirrors module.json "requires" */
    public function requires(): array
    {
        return [
            'database.management',
            'audit.trail',
            'school.people',
        ];
    }

    /** @return list<class-string> */
    public function exposes(): array
    {
        return [SchoolPayrollContract::class];
    }

    public function register(ModuleContainer $container): void
    {
        // Bind this module's services here.
    }

    public function boot(HttpPipeline $http, CliPipeline $cli, WorkerPipeline $worker, EventBus $events): void
    {
        // Register pipeline hooks / event subscriptions here.
    }
}
