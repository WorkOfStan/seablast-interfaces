<?php

declare(strict_types=1);

namespace Seablast\Interfaces;

/**
 * The minimal interface for an IdentityManager.
 *
 * Usage: class IdentityManager implements IdentityManagerInterface
 */
interface IdentityManagerInterface
{
    /**
     * Return the list of groups to which the user belongs. It may be empty.
     *
     * @return int[]
     */
    public function getGroups(): array;

    /**
     * Return the user's role id.
     *
     * @return int
     */
    public function getRoleId(): int;

    /**
     * Return the user's id.
     *
     * @return int
     */
    public function getUserId(): int;

    /**
     * Determine whether the user is authenticated.
     *
     * @return bool
     */
    public function isAuthenticated(): bool;
}
