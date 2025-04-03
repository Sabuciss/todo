<x-layout>
  <x-slot:title>
    login
  </x-slot:title>
<h1>Logins</h1>
   
<form method="POST">
   @csrf
 @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
  
  <label for="email">e-mail</label><input name="email" type="email" required>
  <label for="password" >Parole</label><input name="password" type="password" required>

 <button >Saglabāt</button>
</form>

</x-layout>