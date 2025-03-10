<x-layout>
  <x-slot:title>
    {{ $diary->title }}
  </x-slot:title>
  <h1>{{ $diary->title }}</h1>
  <p>{{ $diary->body }}</p>
  <p>{{ $diary->date }}</p>

  <a href="/diaries/{{ $diary->id }}/edit">Rediģē</a>
  <form method="POST" action="/diaries/{{ $diary->id }}">
@csrf
@method("delete")
<button type="submit">dzēst</button>
</form>
</x-layout>
            
