<div class="@container p-4">
    <livewire:header />

    <div class="bg-white shadow-sm p-6 border border-gray-100 rounded-xl">
        <h1 class="mb-4 font-semibold text-lg">Your Open Issues</h1>

        @foreach ($issues as $issue)
        <div class="mb-4 p-4 border border-gray-100 rounded-lg">
            <div class="flex justify-between items-center">
                <h3 class="mb-2 font-semibold">{{ $issue['title'] }}</h3>
                <span class="text-gray-500 text-xs">#{{ $issue['id'] }}</span>
            </div>

            <p class="mb-2">{{ $issue['description'] }}</p>
        </div>
        @endforeach
    </div>
</div>