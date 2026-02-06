@props(['id', 'action'])

<form id="{{ $id }}" action="{{ $action }}" method="POST">
    @csrf
    @method('DELETE')
</form>
