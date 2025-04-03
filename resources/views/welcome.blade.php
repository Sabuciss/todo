<x-layout>
  <x-slot:title>
    Sveikiņiii
  </x-slot:title>

  @auth
    <p>Sveiki, {{ Auth::user()->first_name}}</p>

        <form action="/logout" method="POST">
           @csrf
            <button>Logout</button>
        </form>

    @endauth

    
    @guest
    <p>Sveiks, viesi!</p>
    <a href="/register">Register</a>
    @endguest

</x-layout>