<div class="@container p-4">
    <livewire:header />

    <div class="bg-white shadow-sm p-6 border border-gray-100 rounded-xl">
        <h1 class="mb-4 font-semibold text-lg">Your Open Issues</h1>


        @if (count($issues) > 0)
            @foreach ($issues as $issue)
                @if ($issue['state'] === 'open')
                    <div class="mb-4 p-4 border border-gray-100 rounded-lg">
                        <div class="flex justify-between items-center">
                            <h3 class="mb-2 font-semibold">{{ $issue['title'] }}</h3>
                            <span class="text-gray-500 text-xs">#{{ $issue['number'] }}</span>
                        </div>

                        <div class="flex justify-between">
                            <div>
                                @foreach ($issue['labels'] as $label)
                                    <span class="text-gray-500 text-xs p-1.5 rounded-full" style="background-color: #{{ $label['color'] }}">{{ $label['name'] }}</span>
                                @endforeach
                            </div>
                            <span class="text-gray-500 text-xs">{{ $issue['created_at'] }}</span>
                        </div>
                    </div>
                @endif
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
