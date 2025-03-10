<x-layout>
<x-slot:title>Rediģe</x-slot:title>

<h1>Rediģe dienasgramatu: "{{$diary->title}}"</h1>

<form action="/diaries/{{ $diary->id }}" method="POST">
    @csrf
    @method('PUT')

    <label for="title">Title</label>
    <input type="text" name="title" value="{{ $diary->title }}" required>

    @error('title')
        <p>{{ $message }}</p>
    @enderror

    <label for="body">body</label>
    <input type="text" name="body" value="{{ $diary->body }}" required>

    @error('body')
        <p>{{ $message }}</p>
    @enderror

    <label for="date">date</label>
    <input type="date" name="date" value="{{ $diary->date }}" required>

    @error('date')
        <p>{{ $message }}</p>
    @enderror



    <button type="submit">saglabā</button>
</form>

</x-layout>
