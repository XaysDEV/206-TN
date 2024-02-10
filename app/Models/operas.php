<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class operas extends Model
{
    use HasFactory;
    protected $fillable =['opera_pic, opera_name, opera_detail, opera_status'];

    public function operastatus()
{
    return $this->belongsTo('App\Models\opera_status','opera_status','id');
}

}
