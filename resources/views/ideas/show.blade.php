<x-layout title="Welcome">
    <h2 class="mx-6 mb-4 text-lg font-semibold text-white">Your Idea</h2>
    <div class="card bg-neutral text-neutral-content max-w-xlg mx-6">
        <div class="card-body text-center">
            <h2 class="card-title">{{ $idea->description }}</h2>
        </div>

        <div class="mx-6 mb-6 flex items-center gap-2">
            <a href="/ideas/{{ $idea->id }}/edit" class="btn btn-soft">Edit</a>
        </div>
    </div>
</x-layout>
