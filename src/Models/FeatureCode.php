<?php

namespace MichaelDrennen\Geonames\Models;
use Illuminate\Database\Eloquent\Model;

class FeatureCode extends Model {

    protected $connection = 'geonames';
    protected $table = 'geonames_feature_codes';
}
