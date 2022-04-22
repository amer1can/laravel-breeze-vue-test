<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'description',
      'author'
    ];
    /**
     * @var mixed
     */
    private $title;
    /**
     * @var mixed
     */
    private $description;
    /**
     * @var mixed
     */
    private $author;
}
