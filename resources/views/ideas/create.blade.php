<x-layout title="Welcome">
    <form method="POST" action="/ideas" class="mb-6 grid grid-cols-1">
        @csrf

        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs mx-auto border p-4">
            <p class="mt-3 text-sm/6 text-gray-400">Have an idea you want to save for later?</p>

            <legend class="fieldset-legend">New Idea</legend>
            <x-forms.textarea name="description" label="Description" />

            <button class="btn btn-neutral mt-4">Create</button>
        </fieldset>
    </form>
</x-layout>
