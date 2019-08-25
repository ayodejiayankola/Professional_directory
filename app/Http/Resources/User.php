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
    { //  return parent::toArray($request);

        return [
          'id'=>$this->id,
          'name'=>$this->name,
          'business_name'=>$this->business_name,
          'service'=>$this->service,
          'business_address'=>$this->business_address,
          'phone'=>$this->phone,
        
 
         
        ] ;
      }
}
