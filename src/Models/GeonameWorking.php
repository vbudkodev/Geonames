<?php

namespace MichaelDrennen\Geonames\Models;

class GeonameWorking extends Geoname {
    protected $connection = 'geonames';
    protected $table = 'geonames_working';
}