<?php
namespace App\Models\Traits;

use Illuminate\Support\Facades\App;

trait HasTranslate{

public function getTranslation(){

return $this->translations()->where('locale','=',App::getLocale())
->first() ?? $this->translations()->where('locale','en')->first();
}

public function __get($key){
    if(in_array($key,['title','description'])){
        return $this->getTranslation()?->{$key};
    }
    return parent::__get($key);
}
}
