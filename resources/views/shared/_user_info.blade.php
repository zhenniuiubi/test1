<a href="{{ route('users.show', $user->id) }}">
    <img src="{{ $user->gravatar('20') }}" alt="{{ $user->name }}" class="gravatar" />
</a>
<h1>{{ $user->name }}</h1>