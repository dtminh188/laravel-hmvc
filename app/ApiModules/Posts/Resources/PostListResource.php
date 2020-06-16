<?php
namespace App\ApiModules\Posts\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostListResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request request
     * @return array
     *
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function toArray($request)
    {
        return [
            'id'          => (string) $this->id,
            'title'       => (string) $this->title,
            'description' => (string) $this->description,
            'image'       => (string) $this->image,
            'user_id'     => (string) $this->user_id,
            'created_at'  => (string) $this->created_at,
        ];
    }
}
