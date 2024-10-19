<?php

namespace App\Models;

use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;

class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains;
    public static function getCustomColumns(): array
{
    return [
        'id',
        'name',
        'password'
    ];
}
    public function setPasswordAttribute($value){
        return $this->attributes['password']=bcrypt($value);
    }
// protected $fillable = ['name', 'domain', 'email', 'password'];

//     // Define the relationship with the Domain model
//     public function domains()
//     {
//         return $this->hasMany(Tenant::class); // Assuming Domain is the related model
//     }
}