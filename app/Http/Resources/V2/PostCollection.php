<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */

    // public $collects = PostResource;
    
    public function toArray($request)
    {
        // Se relaciona con Post Resource, cada post individual me lo entrega con ese formato
        return [
            'data' => $this->collection,
            'meta' => [
                'organization' => 'Platzi',
                'authors' => [
                    'Itamoralesf',
                    'Platzi',
                ]
            ],
            'type' => 'arcticles'
        ];
    }
}
