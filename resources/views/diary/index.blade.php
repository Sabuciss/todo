
<x-layout>
  <x-slot:title>
   Dienasgrāmata
  </x-slot:title>
<h1>Dienasgramatas raksti</h1>
<ul>
      @foreach ($diary as $diary2)
        <li><a href="/diaries/{{ $diary2->id }}">{{ $diary2->title }}</a></li>
      @endforeach
    </ul>

</x-layout>