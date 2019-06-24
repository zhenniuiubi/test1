<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update(User $currentUser, User $user)
    {
        return $currentUser->id === $user->id;
    }

    public function destroy(User $currentUser, User $user)
    {
        //1. 只有当前登录用户为管理员才能执行删除操作；
        // 2. 删除的用户对象不是自己（即使是管理员也不能自己删自己）。
        //只有当前用户拥有管理员权限且删除的用户不是自己时才显示链接。
        return $currentUser->is_admin && $currentUser->id !== $user->id;
    }

    //用户不可以关注自己
    public function follow(User $currentUser, User $user)
    {
        return $currentUser->id !==$user->id;
    }
}
