<x-layout title="Welcome">
    @if ($ideas->isNotEmpty())
        <h2 class="mb-4 text-lg font-semibold text-white">Your ideas</h2>
        @foreach ($ideas as $idea)
            <div
                class="mb-4 rounded-md bg-white/5 px-3 py-2 text-white outline-1 -outline-offset-1 outline-white/10 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500">
                <a href="/ideas/{{ $idea->id }}">{{ $idea->description }}</a>
            </div>
        @endforeach
    @else
        <p class="text-white">No ideas found. <a href="/ideas/create" class="underline">Create one?</a></p>
    @endif
</x-layout>
