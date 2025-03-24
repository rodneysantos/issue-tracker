<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Contracts\CodeRepository;

class GithubService implements CodeRepository
{

    /**
     * API request headers for GitHub API calls.
     *
     * @var array<string>
     */
    private $headers = [
        'Accept' => 'application/vnd.github+json',
        'X-GitHub-Api-Version' => '2022-11-28'
    ];

    public function __construct()
    {
        $this->headers['Authorization'] = 'Bearer ' . config('services.github.access_token');
    }


    public function getIssues()
    {
        $response = Http::withHeaders($this->headers)->get(config('services.github.url') . "/issues");
        return $response->json();
    }
}
