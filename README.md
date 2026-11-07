# hkm-plugin-school-payroll

> Solves **`school.payroll`** · namespace **`Plugins\SchoolPayroll\`** · on-demand GDA module
> Family: Elimu / school domain

Staff and teacher salaries with per-target caps.

## Status

**Scaffold.** The domain is declared and the contract is published, but no use
case is implemented yet. `SchoolPayrollContract` is deliberately empty — methods are added
one per ported use case.

## Where it comes from

| | |
|---|---|
| Legacy source | `accounter/acc_salaires.php, accounter/_payroll_people.php, salaries, salary_caps` |
| Legacy tables | `salaries, salary_caps` |

The port plan, the reconstructed domain model and the per-plugin recipe live in
the **ElimuSystem** repository: `PORT-PLAN.md` and `PLUGIN-PLAN.md`.

## Requires

- `database.management`
- `audit.trail`
- `school.people`

Declared as module **domains**, never port or contract class names. An unknown
domain fails the boot.

## Using it

```jsonc
// the consumer's module.json / proj.json
{ "requires": ["school.payroll"] }
```

```php
$svc = $container->make(\Plugins\SchoolPayroll\API\Contracts\SchoolPayrollContract::class);
```

## Installing

```bash
hkm plugins enable SchoolPayroll <project>
```
