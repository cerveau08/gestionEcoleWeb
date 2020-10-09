<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }

    /**
     * Get the paiements for the blog userProfile.
     */
    public function paiements()
    {
        return $this->hasMany('App\Models\Paiement');
    }

    /**
     * Get the chapitres for the blog user.
     */
    public function chapitres()
    {
        return $this->hasMany('App\Models\Chapitre');
    }

    /**
     * Get the parent that owns the user.
     */
    public function parent()
    {
        return $this->belongsTo('App\Models\Parents');
    }

    /**
     * The ecoles that belong to the user.
     */
    public function ecoles()
    {
        return $this->belongsToMany('App\Models\Ecole');
    }

    /**
     * The specialities that belong to the user.
     */
    public function specialites()
    {
        return $this->belongsToMany('App\Models\Speciality');
    }

    /**
     * The modules that belong to the user.
     */
    public function modules()
    {
        return $this->belongsToMany('App\Models\Module');
    }

    /**
     * The niveaux that belong to the user.
     */
    public function niveaux()
    {
        return $this->belongsToMany('App\Models\Niveau');
    }
}
