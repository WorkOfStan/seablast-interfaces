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
     * If the user is not authenticated, implementations may return an empty
     * array or throw an exception.
     *
     * @return array<int>
     */
    public function getGroups(): array;

    /**
     * Return the user's role id.
     *
     * If the user is not authenticated, implementations are recommended to
     * throw an exception.
     *
     * @return int
     */
    public function getRoleId(): int;

    /**
     * Return the user's id.
     *
     * If the user is not authenticated, implementations are recommended to
     * throw an exception.
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
