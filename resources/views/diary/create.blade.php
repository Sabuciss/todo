
<x-layout>

<x-slot:title>Ieraksts</x-slot:title>
<h1>Izveidot dienasgrāmatas ierakstu</h1>

<form action="/diaries" method="POST">
    @csrf
  <label for="title">Title</label>
  <input name="title">
  @error("title")
  <p>{{ $message }}</p>
 @enderror
 <label for="body">teksts</label>
  <textarea name="body"></textarea>
  @error("body")
  <p>{{ $message }}</p>
 @enderror
 <label for="date">datums</label>
  <input type="date" id="start" name="date"/>
 @error("date")
  <p>{{ $message }}</p>
 @enderror
  <button >Saglabāt</button>
</form>
        
</x-layout>
