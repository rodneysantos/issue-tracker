<div class="@container p-4">
    <livewire:header />

    <div class="bg-white shadow-sm p-6 border border-gray-100 rounded-xl">
        <h1 class="mb-4 font-semibold text-lg">Your Open Issues</h1>

        @if (count($issues) > 0)
            @foreach ($issues as $issue)
                <a href="/repos/{{ $issue['repository']['full_name'] }}/issues/{{ $issue['number'] }}">
                    <div class="mb-4 p-4 border border-gray-100 rounded-lg transition-all hover:-translate-0.5 hover:shadow-[0_8px_24px_rgba(9,105,218,0.08)]">
                        <div class="flex justify-between items-center">
                            <h3 class="mb-2 font-semibold">{{ $issue['title'] }}</h3>
                            <span class="text-gray-500 text-xs">#{{ $issue['number'] }}</span>
                        </div>

                        <div class="flex justify-between">
                            <div>
                                @foreach ($issue['labels'] as $label)
                                    <span class="text-gray-500 text-xs p-1.5 rounded-full"
                                        style="background-color: #{{ $label['color'] }}">{{ $label['name'] }}</span>
                                @endforeach
                            </div>

                            <span class="text-gray-500 text-xs">Created: {{ $this->formatDate($issue['created_at']) }}</span>
                        </div>
                    </div>
                </a>
            @endforeach
        @else
            <div class="mb-4 p-4 border border-gray-100 rounded-lg">
                <h3 class="flex justify-center items-center mb-2 font-semibold gap-2">
                    Oops! No issues assigned to you yet. Time to relax!
                    <x-ri-rocket-2-line class="h-8" />
                </h3>
            </div>
        @endif
    </div>
</div>
