<?php

namespace App\Livewire;

use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use App\Contracts\CodeRepository;

class ViewIssue extends Component
{
    private CodeRepository $codeRepo;
    private $issue;

    public function boot(CodeRepository $codeRepo)
    {
        $this->codeRepo = $codeRepo;
    }

    public function mount(string $owner, string $repo, int $issueNumber)
    {
        $this->issue = $this->codeRepo->getIssue("$owner/$repo", $issueNumber);
    }

    public function render()
    {
        return view('livewire.view-issue', [
            'issue' => $this->issue,
            'body' => Str::of($this->issue['body'])->markdown([
                'html_input' => 'escape',
                'renderer' => [
                    'block_separator' => '<br />',
                    'inner_separator' => '<br />',
                    'soft_break' => '<br />',
                ],
            ]),
        ])->title('Github Issue Tracker');
    }

    public function formatDate(string $date)
    {
        return Carbon::parse($date)->toFormattedDateString();
    }
}
