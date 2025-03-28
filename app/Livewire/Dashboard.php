<?php

namespace App\Livewire;

use Illuminate\Support\Carbon;
use Livewire\Component;
use App\Contracts\CodeRepository;

class Dashboard extends Component
{
    protected CodeRepository $codeRepoService;

    private $issues = [];

    public function boot(CodeRepository $codeRepo)
    {
        $this->codeRepoService = $codeRepo;
    }

    public function mount()
    {
        $this->issues = $this->codeRepoService->getOpenIssues();
    }

    public function render()
    {
        return view('livewire.dashboard', [
            'issues' => $this->issues,
        ])->title('Github Issue Tracker');
    }

    public function formatDate(string $date)
    {
        return Carbon::parse($date)->toFormattedDateString();
    }
}
