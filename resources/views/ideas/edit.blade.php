<x-layout title="Welcome">
    <form method="POST" action="/ideas/{{ $idea->id }}" class="mb-6 grid grid-cols-1">
        @csrf
        @method('PATCH')

        <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs mx-auto border p-4">
            <legend class="fieldset-legend">Update Idea</legend>
            <x-forms.textarea name="description" label="Description" :value="$idea->description" />

            <button type="submit" class="btn btn-neutral mt-4">Update</button>
            <button type="submit" form="delete-idea-form" class="btn btn-secondary mt-2">Delete</button>
        </fieldset>
    </form>

    <x-forms.delete id="delete-idea-form" action="/ideas/{{ $idea->id }}" />
</x-layout>
