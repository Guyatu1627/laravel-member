<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'place_of_birth',
        'dob',
        'full_address',
        'nationality',
        'city_country',
        'gender',
        'email',
        'phone_number',
        'password',
        'membership_type',
    ];

    protected $hidden = [
        'password',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    static public function getSingle($id)
{
    return self::find($id);
}

static public function getRecordMember()
{
    return self::where('is_delete', 0)
                ->orderBy('id', 'desc')
                ->paginate(16);
}


}
