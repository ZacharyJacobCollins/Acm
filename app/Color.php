<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    //Main colors
    public $mainColor = 'green darken-4';
    public $accentColor = 'grey darken-4';

    //Main text colors
    public $mainText = 'black-text';
    public $lightText = 'white-text';
    public $mainColorText= 'green-text text-darken-4';

    //Wave colors
    public $mainWaves = 'waves-green waves-darken-4';

}
