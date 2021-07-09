<?php

namespace App\Models\eloquent;

use App\Models\Tag;
use App\Models\Author;
use App\Models\Publisher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
         'pages_count',
          'description',
          'author_id',
           'publisher_id'
           
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
    public function publisher()
    {
        return $this->belongsTo(Publisher::class,'publisher_id','id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'book_tag', 'book_id', 'tag_id')->withTimestamps();
    }
   
}
