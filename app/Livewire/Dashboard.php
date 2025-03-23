<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    private $issues = [
        [
            'id' => 1842,
            'title' => 'Implement responsive design for dashboard components',
            'description' => 'The current dashboard layout breaks on smaller screens. We need to implement responsive behavior for all components to ensure they work well on various screen sizes.',
            'tags' => ['enhancement', 'frontend'],
        ],
        [
            'id' => 1836,
            'title' => 'Fix authentication timeout issue',
            'description' => 'Users are being logged out unexpectedly after approximately 30 minutes, even when actively using the application. This appears to be related to the token refresh mechanism not working correctly.',
            'tags' => ['bug', 'high priority'],
        ],
        [
            'id' => 1825,
            'title' => 'Add dark mode support to all components',
            'description' => 'We need to implement a comprehensive dark mode across the application. This should include all components and respect the user\'s system preferences. The design team has already provided the necessary color schemes.',
            'tags' => ['feature', 'frontend'],
        ],
        [
            'id' => 1814,
            'title' => 'API returns incorrect data format for analytics endpoint',
            'description' => 'The analytics endpoint is returning data in a format that\'s incompatible with our chart library. The date format is incorrect and some numerical values are being returned as strings instead of numbers.',
            'tags' => ['bug', 'backend'],
        ],
        [
            'id' => 1809,
            'title' => 'Update documentation for new API endpoints',
            'description' => 'The recently added API endpoints for user management and reporting are missing from our documentation. We need comprehensive documentation including examples and schema definitions.',
            'tags' => ['documentation'],
        ],
    ];

    public function render()
    {
        return view('livewire.dashboard', [
            'issues' => $this->issues,
        ])->title('Github Issue Tracker');
    }
}
