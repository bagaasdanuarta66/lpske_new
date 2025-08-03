<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Permission\Traits\HasPermissions;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Contracts\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Collection;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * 
 * @method static \Database\Eloquent\Builder|User role($roles, string $guard = null)
 * @method static \Database\Eloquent\Builder|User permission($permissions)
 * @method static \Database\Eloquent\Builder|User newModelQuery()
 * @method static \Database\Eloquent\Builder|User newQuery()
 * @method static \Database\Eloquent\Builder|User query()
 * @method static \Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method bool hasRole(string|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles, string $guard = null)
 * @method bool hasAnyRole(string|array|\Spatie\Permission\Contracts\Role|\Illuminate\Support\Collection $roles, string $guard = null)
 * @method bool hasAllRoles(\Spatie\Permission\Contracts\Role|array $roles, string $guard = null)
 * @method bool hasPermissionTo(string|int|\Spatie\Permission\Contracts\Permission $permission, string $guard = null)
 * @method static \Database\Eloquent\Builder|User whereId($value)
 * @method static \Database\Eloquent\Builder|User whereName($value)
 * @method static \Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Database\Eloquent\Builder|User whereUpdatedAt($value)
 * 
 * @method bool hasRole(string|array|\Spatie\Permission\Contracts\Role|Collection $roles, string $guard = null)
 * @method bool hasAnyRole(string|array|\Spatie\Permission\Contracts\Role|Collection $roles, string $guard = null)
 * @method bool hasAllRoles(string|array|\Spatie\Permission\Contracts\Role|Collection $roles, string $guard = null)
 * @method bool hasExactRoles(string|array|\Spatie\Permission\Contracts\Role|Collection $roles, string $guard = null)
 * @method bool hasPermissionTo(string|int|\Spatie\Permission\Contracts\Permission $permission, string $guard = null)
 */
class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    /**
     * Check if the user is an admin.
     *
     * @return bool
     */
    public function isAdmin(): bool
    {
        return $this->hasRole('admin');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
