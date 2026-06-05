# AGENTS.md

## Repository Role

This repository is an interface-only PHP library for the Seablast ecosystem. Treat `src/` as public contract code: preserve namespaces, method names, return types, PHPDoc return shapes, and Composer PSR-4 autoloading unless a change is intentionally breaking and documented as such.

## Change Rules

- Keep changes small and contract-focused. Do not add runtime behavior, dynamic execution, secrets, credentials, or side-effectful code to this package.
- Never remove existing comments unless the comment is a TODO that the change fully solves, or unless translating the comment to English.
- Update `CHANGELOG.md` in English for repository changes.
- Respect dirty worktrees. Existing unrelated edits are user-owned; do not revert or rewrite them.
- Keep security in mind for every change. Interface packages should not contain executable shortcuts, generated secrets, or environment-specific credentials.

## Commands

- PHP syntax check: `php -l src\IdentityManagerInterface.php`
- Composer validation on Windows:
  `$env:COMPOSER_CACHE_DIR = "$PWD\.composer-cache"; php "C:\ProgramData\ComposerSetup\bin\composer.phar" validate --strict`
- PHPStan on Windows must run through Git Bash, not directly from PowerShell:
  `& "C:\Program Files\Git\bin\bash.exe" -lc "./blast.sh phpstan"`
- PHPStan cleanup on Windows:
  `& "C:\Program Files\Git\bin\bash.exe" -lc "./blast.sh phpstan-remove"`
- Do not modify Composer itself and do not run `composer self-update`.

## Files And Folders To Avoid

Do not inspect, lint, or recurse into `vendor/`, `nbproject/`, `.tmp/`, build artifacts, or cache directories unless a task explicitly requires it. `composer.lock` is ignored for this library and should not be treated as source.
