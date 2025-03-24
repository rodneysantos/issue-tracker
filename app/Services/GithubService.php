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

    public function getOpenIssues()
    {
        $url = config('services.github.url') . "/issues?state=open";
        $response = Http::withHeaders($this->headers)->get($url);
        return $response->json();
    }

    public function getIssue($name, $issueNumber)
    {
        $url = config('services.github.url') . "/repos/$name/issues/$issueNumber";
        $response = Http::withHeaders($this->headers)->get($url);
        return $response->json();
    }
}
