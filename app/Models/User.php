<?php

namespace App\Models;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'team_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getNumberOfUsers(): int
    {
        $users = Cache::remember('users', 120, function() {
            return User::all();
        });

        return $users->count();
    }

    public function getLast10Users(): array
    {
        $users = Cache::remember('users', 120, function() {
            return User::all();
        });

        return $users->sortByDesc('created_at')->take(10)->all();
    }

    public function getUsersPagination($sort_column = 'id', $direction = 'asc', $pagination = 15): LengthAwarePaginator
    {
        return DB::table('users')->orderBy($sort_column, $direction)->paginate($pagination);
    }
}
