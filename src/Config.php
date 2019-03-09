<?php namespace Bugcat\Captcha;

use Bugcat\Captcha\Assets\BaseConfig;

class Config extends BaseConfig
{
    /**
     * The default text in character pool.
     *
     * @const string
     */
    const DEFAULT_T = 'chs';
    
    /**
     * The default font in font pool.
     *
     * @const string
     */
    const DEFAULT_F = 'simhei';
    
    
    public function __construct() 
    {
        
    }
    
    /**
     * Get the config.
     *
     * @param  array  $config
     * @return array
     */
    public function get($config = [])
    {
        $charnum = 4; //字符数
        $text = 'CHS'; //字符池
        return [
            'border'    => 1, //是否要边框 1要:0不要
            'charnum'   => $charnum,
            'fontsize'  => 16, //字体大小
            'direction' => 0, //文本方向 0:水平 1:垂直
            'font'      => $this->setFont($config['font'] ?? false), //字体文件路径
            'codes'     => $this->setCodes($text, $charnum), //随机生成验证码文字组
        ];
    }
    
    /**
     * Set the font config.
     *
     * @param  string  $font
     * @return array
     */
    private function setFont($font = false)
    {
        $font = empty($font) ? false : trim($font);
        return $this->getFontFile($font, self::DEFAULT_F);
    }
    
    /**
     * Set the random characters.
     *
     * @param  string  $text
     * @param  int  $charnum
     * @return array
     */
    private function setCodes($text, $charnum = 4)
    {
        
        $str = $this->getTextstr($text, self::DEFAULT_T);
        
        $code_arr = [];
        $rand_max = mb_strlen($str, 'utf-8') - 1;
        for ( $i = 0; $i < $charnum; $i++ ) {
            $char       = mb_substr($str, mt_rand(0, $rand_max), 1, 'utf-8');
            $code_arr[] = $char;
        }
        return $code_arr;
    }
}
