<x-layout title="Welcome">
    @if ($ideas->isNotEmpty())
        <h2 class="mb-4 text-lg font-semibold text-white">Your ideas</h2>
        <div class="mt-6 grid grid-cols-2 gap-x-6 gap-y-6">
            @foreach ($ideas as $idea)
                <a href="/ideas/{{ $idea->id }}">
                    <x-card :idea="$idea" />
                </a>
            @endforeach
        </div>
    @else
        <p>No ideas yet.</p>
    @endif
    <p class="mt-6"><a href="/ideas/create" class="underline">Create a new one.</a></p>
</x-layout>
