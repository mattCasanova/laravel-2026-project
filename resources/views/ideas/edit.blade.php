<x-layout title="Welcome">
    <form method="POST" action="/ideas/{{ $idea->id }}" class="mb-6 grid grid-cols-1">
        @csrf
        @method('PATCH')

        <x-forms.textarea name="description" label="Edit Your Idea" :value="$idea->description" />

        <div class="mt-6 flex items-center gap-x-2">
            <button type="submit" class="btn btn-primary">Update</button>
            <button type="submit" form="delete-idea-form" class="btn btn-error">Delete</button>
        </div>
    </form>

    <x-forms.delete id="delete-idea-form" action="/ideas/{{ $idea->id }}" />
</x-layout>
