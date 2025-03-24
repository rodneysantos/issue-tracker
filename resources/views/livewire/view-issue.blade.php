<div class="@container p-4">
    <livewire:header />

    <div class="bg-white shadow-sm p-6 border border-gray-100 rounded-xl">
        <a href="/" class="mb-6 flex items-center gap-1 text-blue-600 hover:underline text-sm w-fit">
            <x-ri-arrow-left-line class="w-4" /> Back to issues
        </a>

        <div class="flex items-center gap-2 mb-3">
            <h3 class="font-bold text-xl">{{ $issue['title'] }}</h3>
            <span class="text-gray-500 text-sm">#{{ $issue['number'] }}</span>
        </div>

        <div class="mb-6 text-gray-500 text-xs">Created: {{ $this->formatDate($issue['created_at']) }}</div>

        <div class="bg-gray-100 mb-6 p-6 rounded-lg">{!! $body !!}</div>
    </div>
</div>
