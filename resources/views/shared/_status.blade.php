<a href="{{ route('users.followings', $user->id) }}">
    <strong id="following" class="status">
        {{ count($user->followings) }}
    </strong>
    关注
</a>
<a href="{{ route('users.followers', $user->id) }}">
    <strong id="followers" class="status">
        {{ count($user->followers) }}
    </strong>
    粉丝
</a>
<a href="{{ route('users.show', $user->id) }}">
    <strong id="status" class="status">
        {{ $user->status()->count() }}
    </strong>
    微博
</a>