<?php

namespace MichaelDrennen\Geonames\Models;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model {

    protected $connection = 'geonames';
    protected $table = 'geonames_continents';
}
