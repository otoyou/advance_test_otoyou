<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'gender',
        'email',
        'postcode',
        'address',
        'building_name',
        'opinion'
    ];

    public function scopeNameSearch($query, $fullname)
    {
      if (!empty($fullname)) {
        $query->where('fullname', $fullname);
      }
    }

    public function scopeGenderSearch($query, $gender)
    {
      if (!empty($gender)) {
        $query->where('gender', $gender);
      }
    }

    public function scopeDateSearch($query, $created_at)
    {
      if (!empty($created_at)) {
        $query->where('created_at', $created_at);
      }
    }

    public function scopeEmailSearch($query, $email)
    {
      if (!empty($email)) {
        $query->where('email', $email);
      }
    }
}
