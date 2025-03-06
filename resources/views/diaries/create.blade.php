
<x-layout>

<x-slot:title>Ieraksts</x-slot:title>
<h1>Izveidot dienasgrāmatas ierakstu</h1>

<form action="/diaries" method="POST">
    @csrf

  <input name="title">
  @error("title")
  <p>{{ $message }}</p>
 @enderror
  <textarea name="body"></textarea>
  @error("body")
  <p>{{ $message }}</p>
 @enderror
  <input type="date" id="start" name="date"/>
 @error("date")
  <p>{{ $message }}</p>
 @enderror
  <button >Saglabāt</button>
</form>
        
</x-layout>
