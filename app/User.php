<?php
namespace App;
use App\School;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'driver_id';
    protected $table = 'drivers';

    protected $fillable = [
    'driver_firstname', 'driver_lastname', 'email', 'phone', 'sex', 'password', 'lat', 'lng'
    ];

    protected $hidden = [
    'password', 'remember_token',
    ];

    public function schoolOne()
    {
        return $this->belongsTo('App\School', 'school_stop_one');
    }
    public function schoolTwo()
    {
        return $this->belongsTo('App\School', 'school_stop_two');
    }
    public function schoolThree()
    {
        return $this->belongsTo('App\School', 'school_stop_three');
    }
    public function schoolFour()
    {
        return $this->belongsTo('App\School', 'school_stop_four');
    }
    public function schoolFive()
    {
        return $this->belongsTo('App\School', 'school_stop_five');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review', 'driver_id');
    }

}
