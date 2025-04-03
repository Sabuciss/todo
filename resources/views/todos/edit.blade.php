<x-layout>
<x-slot:title>Rediģe</x-slot:title>


<h1>Rediģe ierakstu: "{{$todo->content}}"</h1>

<form action="/todos/{{ $todo->id }}" method="POST">
    @csrf
    @method('PUT')

    <label for="content">Content</label>
    <input type="text" name="content" value="{{ old('content', $todo->content) }}" required>

    @error('content')
        <p>{{ $message }}</p>
    @enderror

    <label>
        Izpildīts:
    <input name="completed" type="hidden" value="0">
    <input type="checkbox" name="completed" value="1" {{  $todo->completed ? 'checked' : '' }}>
    </label>


    @error('completed')
        <p>{{ $message }}</p>
    @enderror

    <button type="submit">saglabā</button>
</form>

</x-layout>
