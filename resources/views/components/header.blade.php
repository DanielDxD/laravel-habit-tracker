<header class="bg-white border-b-2 flex items-center justify-between p-4">
    <div>Logo</div>

    @auth
        <form action="{{ route('auth.logout') }}" method="POST">
            @csrf
            <button type="submit" class="bg-white py-2 px-4 border-2">Sair</button>
        </form>
    @endauth
    @guest
        <a href="{{ route('auth.index') }}" class="bg-white p-2 border-2">Login</a>
    @endguest
</header>
