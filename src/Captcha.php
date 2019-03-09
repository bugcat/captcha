<?php namespace Bugcat\Captcha;

class Captcha
{
    private $config = [
        'border'    => 1, //是否要边框 1要:0不要
        'charnum'   => 4, //字符符
        'fontsize'  => 16, //字体大小
        'direction' => 0, //文本方向 0:水平 1:垂直
        'font'      => 'fonts/simhei.ttf', //字体文件路径
        'text' => '天地玄黃宇宙洪荒日月盈昃辰宿列張
            寒來暑往秋收冬藏閏餘成歲律召調陽
            雲騰致雨露結為霜金生麗水玉出崑崗
            劍號巨闕珠稱夜光果珍李柰菜重芥薑
            海鹹河淡鱗潛羽翔龍師火帝鳥官人皇
            始製文字乃服衣裳推位讓國有虞陶唐
            吊民伐罪周發殷湯坐朝問道垂拱平章
            愛育黎首臣伏戎羌遐邇壹體率賓歸王
            鳴鳳在樹白駒食場化被草木賴及萬方
            蓋此身髮四大五常恭惟鞠養豈敢毀傷
            女慕貞絜男效才良知過必改得能莫忘
            罔談彼短靡恃己長信使可覆器欲難量
            墨悲絲染詩贊羔羊景行維賢剋念作聖
            德建名立形端表正空谷傳聲虛堂習聽
            禍因惡積福緣善慶尺辟非寶寸陰是競
            資父事君曰嚴與敬孝當竭力忠則盡命
            臨深履薄夙興溫清似蘭斯馨如松之盛
            川流不息淵澄取映容止若思言辭安定
            篤初誠美慎終宜令榮業所基籍甚無竟
            學優登仕攝職從政存以甘棠去而益詠
            樂殊貴賤禮別尊卑上和下睦夫唱婦隨
            外受傅訓入奉母儀諸姑伯叔猶子比兒
            孔懷兄弟同氣連枝交友投分切磨箴規
            仁慈隱惻造次弗離節義廉退顛沛匪虧
            性靜情逸心動神疲守真誌滿逐物意移
            堅持雅操好爵自縻都邑華夏東西二京
            背邙面洛浮渭據涇宮殿盤鬱樓觀飛驚
            圖寫禽獸畫彩仙靈丙舍傍啟甲帳對楹
            肆筵設席鼓瑟吹笙升階納陛弁轉疑星
            右通廣內左達承明既集墳典亦聚群英
            杜稿鐘隸漆書壁經府羅將相路俠槐卿
            戶封八縣家給千兵高冠陪輦驅轂振纓
            世祿侈富車駕肥輕策功茂實勒碑刻銘
            磻溪伊尹佐時阿衡奄宅曲阜微旦孰營
            桓公匡合濟弱扶傾綺迴漢惠說感武丁
            俊乂密勿多士實寧晉楚更霸趙魏困橫
            假途滅虢踐土會盟何遵約法韓弊煩刑
            起翦頗牧用軍最精宣威沙漠馳譽丹青
            九州禹跡百郡秦并嶽宗恒岱禪主云亭
            雁門紫塞雞田赤城昆池碣石鉅野洞庭
            曠遠綿邈岩岫杳冥治本於農務資稼穡
            俶載南畝我藝黍稷稅熟貢新勸賞黜陟
            孟軻敦素史魚秉直庶幾中庸勞謙謹敕
            聆音察理鑒貌辨色貽厥嘉猷勉其祗植
            省躬譏誡寵增抗極殆辱近恥林皋幸即
            兩疏見機解組誰逼索居閒處沉默寂寥
            求古尋論散慮逍遙欣奏累遣感謝歡招
            渠荷的歷園莽抽條枇杷晚翠梧桐早凋
            陳根委翳落葉飄颯游鯤獨運凌摩絳霄
            耽讀玩市寓目囊箱易輶攸畏屬耳垣牆
            具膳餐飯適口充腸飽飫烹宰饑厭糟糠
            親戚故舊老少異糧妾御績紡侍巾帷房
            紈扇圓潔銀燭煒煌晝眠夕寐藍筍象床
            弦歌酒宴接杯舉觴矯手頓足悅豫且康
            嫡後嗣續祭祀烝嘗稽顙再拜悚懼恐惶
            箋牒簡要顧答審詳骸垢想浴執熱願涼
            驢騾犢特駭躍超驤誅斬賊盜捕獲叛亡
            布射僚丸嵇琴阮嘯恬筆倫紙鈞巧任釣
            釋紛利俗並皆佳妙毛施淑姿工顰妍笑
            年矢每催曦暉朗曜璇璣懸斡晦魄環照
            指薪修祜永綏吉劭矩步引領俯仰廊廟
            束帶矜莊徘徊瞻眺孤陋寡聞愚蒙等誚
            謂語助者焉哉乎也', //华夏千字文
    ];
    public $vcodes = ''; //验证码
    
    public function __construct($config = []) 
    {
        $this->setConfig($config);
        $this->setCodes(); //生成验证码
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
        $code_arr = $this->getCodes();
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
    
    //设置配置
    public function setConfig($config = [])
    {
        if ( empty($config['font']) ) {
            $this->config['font'] = dirname(__FILE__).DIRECTORY_SEPARATOR.$this->config['font'];
        }
        foreach ( $config as $ck => $cv ) {
            $this->config[$ck] = $cv;
        }
    }
    
    //随机生成验证码
    private function setCodes()
    {
        $randcode = '';
        $str = preg_replace('/\s/', '', $this->config['text']);
        $rand_max = mb_strlen($str, 'utf-8') - 1;
        for ( $i = 0; $i < $this->config['charnum']; $i++ ) {
            $char       = mb_substr($str, mt_rand(0, $rand_max), 1, 'utf-8');
            $randcode  .= $char;
        }
        $this->vcodes = $randcode;
    }
    
    //生成验证码文字组
    private function getCodes()
    {
        $code_arr = [];
        $len = mb_strlen($this->vcodes, 'utf-8');
        for ( $i = 0; $i < $len; $i++ ) {
            $char       = mb_substr($this->vcodes, $i, 1, 'utf-8');
            $code_arr[] = $char;
        }
        return $code_arr;
    }
    
    
}
