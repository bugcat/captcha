<?php namespace Bugcat\Captcha;

use Bugcat\Captcha\Config;

class Captcha
{
    /**
     * The config.
     *
     * @var array
     */
    private $config = [];
    
    /**
     * The example for config of parameter.
     *
     * @const array
     */
    const CFG_EXP = [
        'border'   => '1|0',
        'charnum'  => '4',
        'fontsize' => '16',
        'codedir'  => '1|0',
        'font'     => 'simhei|ABeeZee_regular|Asap_700|Khand_500|Open_Sans_regular|Roboto_regular|Ubuntu_regular|ygyxsziti2.0|customttf',
        'text'     => 'CHS|CHT|ENG|custom string allow spaces because it will be ignored',
    ];
    
    public function __construct() 
    {
        
    }
    
    /**
     * generate a new captcha.
     *
     * @param  array  $config
     * @return string
     */
    public function gnrt($config = [])
    {
        $this->config = Config::get($config);
        return implode('', $this->config['codes']);
    }
    
    /**
     * Create a captcha image.
     *
     * @return image
     */
    public function img()
    {
        header("Content-type: image/gif");
        if ( 1 == $this->config['codedir'] ) {
            //vertical text
            $w = (int)($this->config['fontsize'] * 1.3); //the image's height
            $h = (int)($this->config['charnum'] * $w * 1.1); //the image's width
        } else {
            $h = ceil($this->config['fontsize'] * 2); //the image's height
            $w = $this->config['charnum'] * $h; //the image's width
        }
        $im = imagecreate($w, $h); //create
        
        //drawing the basic frame
        $bgcolor = imagecolorallocate($im, 255, 255, 255); //set the background color
        imagefill($im, 0, 0, $bgcolor); //fill background color
        if ( 1 == $this->config['border'] ) {
            $black = imagecolorallocate($im, 0, 0, 0); //set the border color
            imagerectangle($im, 0, 0, $w - 1, $h - 1, $black); //draw a border
        }
        //draw verification code into the image
        foreach ( $this->config['codes'] as $i => $char ) {
            $font_color = imagecolorallocate($im, mt_rand(0, 100), mt_rand(0, 100), mt_rand(0, 100)); //character random color
            if ( $this->config['codedir'] ) {
                imagettftext($im, $this->config['fontsize'], 0, 0, $w*($i+1), $font_color, $this->config['font'], $char);
            } else {
                imagettftext($im, $this->config['fontsize'], 0, $h*$i, $this->config['fontsize']*1.5, $font_color, $this->config['font'], $char);
            }
        }
        //draw background interference lines
        for ( $i = 0; $i < 5; $i++ ) {
            $color1 = imagecolorallocate($im, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255)); //interference line color
            imagearc($im, mt_rand(-5, $w), mt_rand(-5, $h), mt_rand(20, 300), mt_rand(20, 200), 55, 44, $color1); //interference lines
        }
        //draw background interference points
        for ( $i = 0; $i < $this->config['charnum'] * 40; $i++ ) {
            $color2 = imagecolorallocate($im, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255)); //interference point color
            imagesetpixel($im, mt_rand(0, $w), mt_rand(0, $h), $color2); //interference points
        }
        
        //drawing start
        imagegif($im);
        imagedestroy($im);
        //drawing end
    }
    
    /**
     * Save the captcha image to the pecified path.
     *
     * @param  string  $path
     * @return bool
     */
    public function toFile($path)
    {
        //todo
    }
    
}
