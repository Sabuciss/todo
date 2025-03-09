<x-layout>
<x-slot:title>Rediģe</x-slot:title>

<h1>Rediģe ierakstu</h1>

<form action="{{ route('todos.update', $todo->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="content">Content</label>
    <input type="text" name="content" value="{{ old('content', $todo->content) }}" required>

    @error('content')
        <p>{{ $message }}</p>
    @enderror

    <label for="completed">Completed</label>
    <input type="checkbox" name="completed" value="1" {{ old('completed', $todo->completed) ? 'checked' : '' }}>

    @error('completed')
        <p>{{ $message }}</p>
    @enderror

    <button type="submit">saglabā</button>
</form>

</x-layout>
