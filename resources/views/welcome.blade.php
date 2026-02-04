<x-layout title="Welcome">
    @forelse ($tasks as $task)
        <li>{{ $task }}</li>
    @empty
        <p>No tasks yet!</p>
    @endforelse
</x-layout>
