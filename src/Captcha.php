<?php namespace Bugcat\Captcha;

use Bugcat\Captcha\Config;

class Captcha extends Config
{
    private $config = [];
    
    public function __construct($config = []) 
    {
        $this->config = $this->get($config);
        //var_dump($this->config['font']);die;
    }
    
    
    
    //输出图片
    public function img()
    {
        header("Content-type: image/gif");
        if ( 1 == $this->config['direction'] ) {
            //是否垂直，默認水平
            $w = (int)($this->config['fontsize'] * 1.3); //图片高度
            $h = (int)($this->config['charnum'] * $w * 1.1); //图片宽度
        } else {
            $h = ceil($this->config['fontsize'] * 2); //图片高度
            $w = $this->config['charnum'] * $h; //图片宽度
        }
        $im = imagecreate($w, $h);//创建验证图片
        
        //绘制基本框架
        $bgcolor = imagecolorallocate($im, 255, 255, 255); //设置背景颜色
        imagefill($im, 0, 0, $bgcolor); //填充背景色
        if ( 1 == $this->config['border'] ) {
            $black = imagecolorallocate($im, 0, 0, 0); //设置边框颜色
            imagerectangle($im, 0, 0, $w - 1, $h - 1, $black); //绘制边框
        }
        $code_arr = $this->config['codes'];
        //文字输入到字符中
        foreach ( $code_arr as $i => $char ) {
            $font_color = imagecolorallocate($im, mt_rand(0, 100), mt_rand(0, 100), mt_rand(0, 100)); //字符随即颜色
            if ( $this->config['direction'] ) {
                imagettftext($im, $this->config['fontsize'], 0, 0, $w*($i+1), $font_color, $this->config['font'], $char);
            } else {
                imagettftext($im, $this->config['fontsize'], 0, $h*$i, $this->config['fontsize']*1.5, $font_color, $this->config['font'], $char);
            }
        }
        //绘背景干扰线
        for ( $i = 0; $i < 5; $i++ ) {
            $color1 = imagecolorallocate($im, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255)); //干扰线颜色
            imagearc($im, mt_rand(-5, $w), mt_rand(-5, $h), mt_rand(20, 300), mt_rand(20, 200), 55, 44, $color1); //干扰线
        }
        //绘背景干扰点
        for ( $i = 0; $i < $this->config['charnum'] * 40; $i++ ) {
            $color2 = imagecolorallocate($im, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255)); //干扰点颜色
            imagesetpixel($im, mt_rand(0, $w), mt_rand(0, $h), $color2); //干扰点
        }
        
        //绘图开始
        imagegif($im);
        imagedestroy($im);
        //绘图结束
    }
    
    //存储为文件
    public function toFile($path)
    {
        
    }
    
}
