<x-layout title="Welcome">
    <form method="POST" action="/ideas" class="mb-6 grid grid-cols-1">
        @csrf
        <x-forms.textarea name="description" label="Create New Idea" />
        <p class="mt-3 text-sm/6 text-gray-400">Have an idea you want to save for later?</p>

        <div class="mt-6 flex items-center gap-x-6">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>

</x-layout>
