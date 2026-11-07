<?php

declare(strict_types=1);

namespace Plugins\SchoolPayroll\API\Contracts;

/**
 * Published contract for `school.payroll`.
 *
 * Staff and teacher salaries with per-target caps.
 *
 * Legacy source : accounter/acc_salaires.php, accounter/_payroll_people.php, salaries, salary_caps
 * Legacy tables : salaries, salary_caps
 *
 * Consumers declare `"requires": ["school.payroll"]` and resolve THIS interface.
 * Nothing outside this plugin may touch its internals — those are bound with
 * `bindInternal()` and throw `ScopeViolationException` cross-scope.
 *
 * @see docs/PORT.md in this repository for what still has to be ported.
 */
interface SchoolPayrollContract
{
    // Methods are added as each legacy use case is ported. Keep this surface
    // minimal: one method per use case the OUTSIDE world needs, never a
    // pass-through to a repository.
}
