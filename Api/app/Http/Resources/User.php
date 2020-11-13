<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id_user' => $this->id_user,
            'CIN' => $this->CIN,
            'name' => $this->name,
            'adress' => $this->adress,
            'tel' => $this->tel,
            'email' => $this->email,
            'image' => $this->image,
            'username' => $this->username,
            'password' => $this->password,
        ];
    }
}
