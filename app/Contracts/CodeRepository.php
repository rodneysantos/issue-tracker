<?php

namespace App\Contracts;

interface CodeRepository
{

    /**
     * Retrieves all open issues assigned to the authenticated user.
     */
    public function getOpenIssues();

    /**
     * Retrieves a specific issue from the repository.
     *
     * @param string $name The name of the repository
     * @param int $issueNumber The number of the issue to retrieve
     */
    public function getIssue(string $name, int $issueNumber);
}
