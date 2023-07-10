<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Admin extends Authenticatable
{
    use HasFactory;
    protected $fillable =[
            
        'cin',
        'nom',
        'prenom',
        'email',
        'password',
        'numero_telephone',
        'role',
];

protected $hidden = [
    'password',
    'remember_token',
];


 /**@param string $password
 * @return void
 */

 public function setPasswordAttribute(string $password): void
 {
     $this->attributes['password'] = bcrypt($password);
 }
}
