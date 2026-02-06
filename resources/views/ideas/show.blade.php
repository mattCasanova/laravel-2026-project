<x-layout title="Welcome">
    <h2 class="mb-4 text-lg font-semibold text-white">Your Idea</h2>
    <x-card :idea="$idea" />

    <div class="mt-6 flex items-center gap-x-6">
        <a href="/ideas/{{ $idea->id }}/edit" class="btn btn-primary">Edit</a>
    </div>

</x-layout>
