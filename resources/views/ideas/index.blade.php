<x-layout title="Welcome">
    <form method="POST" action="/ideas" class="mb-6 grid grid-cols-1">
        @csrf
        <div class="col-span-full">
            <label for="description" class="block text-sm/6 font-medium text-white">New Idea</label>
            <div class="mt-2">
                <textarea id="description" name="description" rows="3"
                    class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"></textarea>
            </div>
            <p class="mt-3 text-sm/6 text-gray-400">Have an idea you want to save for later?</p>
        </div>

        <div class="mt-6 flex items-center gap-x-6">
            <button type="submit"
                class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
        </div>
    </form>

    @if ($ideas->isNotEmpty())
        <h2 class="mb-4 text-lg font-semibold text-white">Your ideas</h2>
        @foreach ($ideas as $idea)
            <div
                class="mb-4 rounded-md bg-white/5 px-3 py-2 text-white outline-1 -outline-offset-1 outline-white/10 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500">
                <a href="/ideas/{{ $idea->id }}">{{ $idea->description }}</a>
            </div>
        @endforeach
    @endif

</x-layout>
