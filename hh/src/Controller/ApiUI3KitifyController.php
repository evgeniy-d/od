<?php

namespace Fosphatic\UI3Kitify\Controller;

use Pagekit\Application as App;
use Fosphatic\UI3Kitify\OtherExtends;

class ApiUI3KitifyController{

  /**
  * @Route(methods="GET")
  * @Request(csrf=true)
  */
  public function getBlendAction(){

    $data = [
      ['key' => 'uk-background-blend-multiply','name' => 'Multiply'],
      ['key' => 'uk-background-blend-screen','name' => 'Screen'],
      ['key' => 'uk-background-blend-overlay','name' => 'Overlay'],
      ['key' => 'uk-background-blend-darken','name' => 'Darken'],
      ['key' => 'uk-background-blend-lighten','name' => 'Lighten'],
      ['key' => 'uk-background-blend-color-dodge','name' => 'Color Dodge'],
      ['key' => 'uk-background-blend-color-burn','name' => 'Color Burn'],
      ['key' => 'uk-background-blend-hard-light','name' => 'Hard Light'],
      ['key' => 'uk-background-blend-soft-light','name' => 'Soft Light'],
      ['key' => 'uk-background-blend-difference','name' => 'Difference'],
      ['key' => 'uk-background-blend-exclusion','name' => 'Exclusion'],
      ['key' => 'uk-background-blend-hue','name' => 'Hue'],
      ['key' => 'uk-background-blend-saturation','name' => 'Saturation'],
      ['key' => 'uk-background-blend-color','name' => 'Color'],
      ['key' => 'uk-background-blend-luminosity','name' => 'Luminosity'],
    ];

    return ['blendList' => $data];

  }

  /**
  * @Route(methods="POST")
  * @Request({"data":"array"} , csrf=true)
  */
  public function saveThemeConfigAction($data){
    print_r($data['others']);
    App::config('ui3kitify')->set('navbar' , $data['navbar']);
    App::config('ui3kitify')->set('footer' , $data['footer']);
    App::config('ui3kitify')->set('content' , $data['content']);
    App::config('ui3kitify')->set('others' , $data['others']);

    return ['msg' => true];

  }

}

?>
