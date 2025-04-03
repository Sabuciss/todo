
<x-layout>
  <x-slot:title>
    {{ $todo->content }}
  </x-slot:title>


  <h1>{{ $todo->content }}</h1> 

<p>Ipzpildīts: {{ $todo->completed ? 'Jā' : 'Nē' }}</p>
<a href="/todos/{{ $todo->id }}/edit">Rediģē</a>


<form method="POST" action="/todos/{{ $todo->id }}">
@csrf
@method("delete")
<button type="submit">dzēst</button>
</form>
</x-layout>
            

