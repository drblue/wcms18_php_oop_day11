<h1>Todos</h1>

<h2>{{ $listname }}</h2>

<p>{{ $whoami }}</p>

<ol>
	@foreach($todoitems as $todoitem)
		<li>{{ $todoitem }}</li>
	@endforeach
</ol>
