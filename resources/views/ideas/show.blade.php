<x-layout title="Welcome">
    <h2 class="mb-4 text-lg font-semibold text-white">Your Idea</h2>
    <div
        class="mb-4 rounded-md bg-white/5 px-3 py-2 text-white outline-1 -outline-offset-1 outline-white/10 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500">
        {{ $idea->description }}
    </div>

    <div class="mt-6 flex items-center gap-x-6">
        <a href="/ideas/{{ $idea->id }}/edit"
            class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Edit</a>
    </div>

</x-layout>
