<?php

namespace Fosphatic\UI3Kitify;

use Pagekit\Application as App;

class OtherExtends{

  public function getTheme(){

    $packages = array_values(App::package()->all('pagekit-theme'));
    $firstTheme = array_values((array) $packages[0]);
    $name = explode("/",$firstTheme[0]['name']);
    return $name[1];

  }

}

?>
