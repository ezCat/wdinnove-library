<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'description', 'url', 'draw', 'id_categorie', 'id_sub_categorie', 'online'];
    
}
