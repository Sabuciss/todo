<x-layout>
<x-slot:title>Rediģe</x-slot:title>

<h1>Rediģe ierakstu</h1>

<form action="/todos/{{ $todo->id }}" method="POST">
    @csrf
    @method('PUT')
  
    <label for="content">Ievadi saturu:</label>
    <input type="text" id="content" name="content" value="{{ $todo->content }}">

  <button >Saglabāt</button>
</form>

</x-layout>