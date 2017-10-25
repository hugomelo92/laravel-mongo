<?php

namespace Hugomelo92\Mongo;

use \Illuminate\Support\Facades\Facade;

class MongoFacade extends Facade {

    protected static function getFacadeAccessor() {
        return 'mongo';
    }
}
