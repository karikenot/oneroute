<x-layout>
    <x-slot:title>
        Welcome
    </x-slot:title>
     <div class="max-w-2xl mx-auto">
        @forelse ($oneroutes as $oneroute)
            <div class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                    <div>
                        <div class="font-semibold"> {{ $oneroute->user ? $oneroute->user->name : 'Anonymous' }}</div>
                        <div class="mt-1">{{ $oneroute->message }}</div>
                        <div class="text-sm text-gray-500 mt-2">
                            {{ $oneroute->created_at->diffForHumans() }}
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-gray-500">No chirps yet. Be the first to chirp!</p>
        @endforelse
    </div>
</x-layout>