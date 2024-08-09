<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Post extends Model
{
    const TAG_MARKETING = 'marketing';
    const TAG_MENTORING = 'mentoring';
    const TAG_TRAINING = 'training';
    const TAG_STRATEGY = 'strategy';
    const TAG_NEGOCIATION = 'negociation';
    
    const POST_PATH = 'post-images';

    protected $fillable = [
        "title",
        "description",
        "content",
        "image",
        "tag",
    ];

    protected $dates = ['created_at'];

    protected $appends = [
        "date_formatted",
        "tag_formatted",
        "image_path",
    ];

    protected static function boot() {
        parent::boot();
    
        static::deleting(function($post) {
            File::delete(public_path(self::POST_PATH . '/' . $post->image));
        });
    }

    public function getDateFormattedAttribute() {
        return Carbon::parse($this->attributes['created_at'])->format('d/m/Y');
    }

    public function getTagFormattedAttribute() {
        $tag = self::getTag($this->attributes['tag']);

        return $tag ? $tag['label'] : "";
    }

    public function getImagePathAttribute() {
        return '/' . self::POST_PATH . '/' . $this->attributes['image'];
    }

    public static function getTagsFormatted() 
    {
        return [
            [
                "key" => self::TAG_MARKETING,
                "label" => "Marketing",
            ],
            [
                "key" => self::TAG_MENTORING,
                "label" => "Vendas",
            ],
            [
                "key" => self::TAG_TRAINING,
                "label" => "Negociação",
            ],
            [
                "key" => self::TAG_STRATEGY,
                "label" => "Liderança",
            ],
            [
                "key" => self::TAG_NEGOCIATION,
                "label" => "Gestão",
            ],
        ];
    }

    public static function getTag($tag)
    {
        $tags = self::getTagsFormatted();

        foreach($tags as $item) {
            if($item['key'] == $tag)
                return $item;
        }
    }
}
