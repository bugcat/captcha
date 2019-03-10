<?php namespace Bugcat\Captcha;

use Bugcat\Captcha\Assets\BaseConfig;

class Config extends BaseConfig
{
    /**
     * The default text in character pool.
     *
     * @const string
     */
    const DEFAULT_T = 'CHS';
    
    /**
     * The default font in font pool.
     *
     * @const string
     */
    const DEFAULT_F = 'simhei';
    
    /**
     * The default border whether needed.
     *
     * @const int
     */
    const DFT_BORDER = 1;
    
    /**
     * The default charnum.
     *
     * @const int
     */
    const DFT_CHARNUM = 4;
    
    /**
     * The default fontsize.
     *
     * @const int
     */
    const DFT_FONTSIZE = 16;
    
    /**
     * The min fontsize.
     *
     * @const int
     */
    const MIN_FONTSIZE = 8;
    
    /**
     * The default code direction.
     *
     * @const int
     */
    const DFT_CODEDIR = 0;
    
    
    public function __construct() 
    {
        
    }
    
    /**
     * Get the config.
     *
     * @param  array  $config
     * @return array
     */
    public static function get($config = [])
    {
        $border   = self::setBorder($config['border'] ?? false); 
        $charnum  = self::setCharNum($config['charnum'] ?? 0); 
        $fontsize = self::setFontSize($config['fontsize'] ?? 0); 
        $codedir  = self::setCodeDir($config['codedir'] ?? false); 
        $font     = self::setFont($config['font'] ?? false);
        $codes    = self::setCodes($config['text'] ?? false, $charnum);
        
        return [
            'border'    => $border, //whether need border (1yes 0no)
            'charnum'   => $charnum, //the char number
            'fontsize'  => $fontsize, //the font size
            'codedir'   => $codedir, //the code direction (0horizontal 1vertical)
            'font'      => $font, //the font file path
            'codes'     => $codes, //Randomly generate captcha code array
        ];
    }
    
    /**
     * Set whether need border.
     *
     * @param  int  $border
     * @return int
     */
    private static function setBorder($border = false)
    {
        $border = false === $border ? self::DFT_BORDER : $border;
        $border = intval($border);
        $border = in_array($border, [0, 1]) ? $border : self::DFT_BORDER;
        return $border;
    }
    
    /**
     * Set the char number.
     *
     * @param  int  $charnum
     * @return int
     */
    private static function setCharNum($charnum = 0)
    {
        $charnum = intval($charnum);
        $charnum = $charnum > 0 ? $charnum : self::DFT_CHARNUM;
        return $charnum;
    }
    
    /**
     * Set the font size.
     *
     * @param  int  $fontsize
     * @return int
     */
    private static function setFontSize($fontsize = 0)
    {
        $fontsize = intval($fontsize);
        $fontsize = $fontsize >= self::MIN_FONTSIZE ? $fontsize : self::DFT_FONTSIZE;
        return $fontsize;
    }
    
    /**
     * Set the code direction.
     *
     * @param  int  $codedir
     * @return int
     */
    private static function setCodeDir($codedir = false)
    {
        $codedir = false === $codedir ? self::DFT_CODEDIR : $codedir;
        $codedir = intval($codedir);
        $codedir = in_array($codedir, [0, 1]) ? $codedir : self::DFT_CODEDIR;
        return $codedir;
    }
    
    /**
     * Set the font file path.
     *
     * @param  string  $font
     * @return string
     */
    private static function setFont($font = false)
    {
        $font = empty($font) ? false : trim($font);
        return self::getFontFile($font, self::DEFAULT_F);
    }
    
    /**
     * Set the random characters.
     *
     * @param  string  $text
     * @param  int  $charnum
     * @return array
     */
    private static function setCodes($text, $charnum = 4)
    {
        $str = self::getTextstr($text, self::DEFAULT_T);
        
        $code_arr = [];
        $rand_max = mb_strlen($str, 'utf-8') - 1;
        for ( $i = 0; $i < $charnum; $i++ ) {
            $char       = mb_substr($str, mt_rand(0, $rand_max), 1, 'utf-8');
            $code_arr[] = $char;
        }
        return $code_arr;
    }
}
