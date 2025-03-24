<?php

namespace App\Contracts;

interface CodeRepository {

    /**
     * Retrieves all issues assigned to the authenticated user.
     */
    public function getIssues();
}
