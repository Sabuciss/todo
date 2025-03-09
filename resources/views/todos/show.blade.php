
<x-layout>
  <x-slot:title>
    {{ $todo->content }}
  </x-slot:title>
  <h1>{{ $todo->content }}</h1>
  <label>
  Izpildīts:
  <input name="completed" type="hidden" value="0">
  <input name="completed" type="checkbox" value="1" {{ $todo->completed ? 'checked' : '' }}>   
</label>
<a href="{{ route('todos.edit', $todo->id) }}">Rediģē</a>
</x-layout>
            

