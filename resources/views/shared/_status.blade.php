<a href="#">
    <strong id="following" class="status">
        {{ count($user->followings) }}
    </strong>
    关注
</a>
<a href="#">
    <strong id="followers" class="status">
        {{ count($user->followers) }}
    </strong>
    粉丝
</a>
<a href="#">
    <strong id="statuses" class="status">
        {{ $user->status()->count() }}
    </strong>
    微博
</a>