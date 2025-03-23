<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

    class User extends Model{
        protected $table = 'tbluser_ddsbe2';
        // column sa table
        protected $fillable = ['username', 'password','gender'];

        //commented because i like that it has a timestamp ~cybersphinxxx
        //public $timestamps = false;
        //protected $primaryKey = 'id';

        protected $hidden = ['password',];
 }