<?php

namespace App\Transformers;

use App\Models\Image;
use League\Fractal\TransformerAbstract;

class ImageTransformer extends TransformerAbstract
{
    public function transform(Image $image)
    {
        return [
            'id' => $image->id,
            'user_id' => $image->user_id,
            'type' => $image->type,
            'path' => $image->path,
            'crated_at' => $image->created_at->toDateTimeString(),
            'update_at' => $image->updated_at->toDateTimeString(),
        ];
    }
}