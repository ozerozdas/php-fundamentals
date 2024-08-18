<?php

use Illuminate\Database\Eloquent\Model;
use App\Model\Post;

class User extends Model
{
    // The table associated with the model.
    protected $table = 'users';

    // The attributes that are mass assignable.
    protected $fillable = ['name', 'email', 'password'];

    // If the table does not have timestamps (created_at and updated_at columns)
    public $timestamps = false;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}


$user = new User();
$user->name = 'Özer';
$user->email = 'ozer@test.com';
$user->password = bcrypt('password123');
$user->save();

/*
User::create([
    'name' => 'Özer',
    'email' => 'ozer@test.com',
    'password' => bcrypt('password123'),
]);
*/

// Find all users
$users = User::all();

// Find one user
$user = User::find(1);

// Find one user by email
$user = User::where('email', 'ozer@test.com')->first();

// Update user
$user = User::find(1);
$user->name = 'Özer';
$user->save();

// Delete user
$user = User::find(1);
$user->delete();

// User with posts
$user = User::find(1);
$posts = $user->posts;
