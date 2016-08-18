<?php

/**
 * @copyright Copyright (c) 2016 Sudarshan Sutar
 
 */

namespace myimagecrop;

use yii\web\AssetBundle;

class MyImageAsset extends AssetBundle
{
public $sourcePath = '@vendor/myimagecrop/assets';

	public $depends = [
		'yii\web\YiiAsset',
		'yii\web\JqueryAsset'
	];

	public function init()
	{
//		$this->css[] = YII_DEBUG ? 'css/jquery.Jcrop.css' : 'css/jquery.Jcrop.min.css';
//		$this->js[] = YII_DEBUG ? 'js/jquery.Jcrop.js' : 'js/jquery.Jcrop.min.js';
           $this->css[]="css/imgareaselect-animated.css";
            $this->css[]="css/imagestyle.css";

        $this->js[]="js/script.js";
        $this->js[]="js/jquery.imgareaselect.pack.js";
        $this->js[]="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js";
           
            
        // $this->js[]="js/myjs.js";
          
	
	}
}
