<h1>welcome to the home page</h1>
<p>Olá {{ $name }}</p>
<ul>
    @foreach ($habits as $habit)
        <li>{{ $habit }}</li>
    @endforeach
</ul>
