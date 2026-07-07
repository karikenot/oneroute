<x-layout>
    <x-slot:title>
        Welcome
    </x-slot:title>
     <div class="max-w-2xl mx-auto">
        @foreach ($oneroutes as $oneroute)
            <div class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                    <div>
                        <div class="font-semibold">{{ $oneroute['author'] }}</div>
                        <div class="mt-1">{{ $oneroute['message'] }}</div>
                        <div class="text-sm text-gray-500 mt-2">{{ $oneroute['time'] }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>