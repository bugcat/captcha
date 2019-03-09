<?php namespace Bugcat\Captcha\Assets;

abstract class BaseConfig
{
    /**
     * The character pool for captcha.
     *
     * @const array
     */
    const TEXT = [
        //numbers and letters
        'ENG' => '2346789ABCDEFGHJMNPQRTUXYZ',
        //Chinese Simplified
        'CHS' => '简体千字文
            天地玄黄宇宙洪荒日月盈昃辰宿列张
            寒来暑往秋收冬藏闰余成岁律召调阳
            云腾致雨露结为霜金生丽水玉出昆岗
            剑号巨阙珠称夜光果珍李柰菜重芥姜
            海咸河淡鳞潜羽翔龙师火帝鸟官人皇
            始制文字乃服衣裳推位让国有虞陶唐
            吊民伐罪周发殷汤坐朝问道垂拱平章
            爱育黎首臣伏戎羌遐迩壹体率宾归王
            鸣凤在树白驹食场化被草木赖及万方
            盖此身发四大五常恭惟鞠养岂敢毁伤
            女慕贞絜男效才良知过必改得能莫忘
            罔谈彼短靡恃己长信使可复器欲难量
            墨悲丝染诗赞羔羊景行维贤克念作圣
            德建名立形端表正空谷传声虚堂习听
            祸因恶积福缘善庆尺辟非宝寸阴是竞
            资父事君曰严与敬孝当竭力忠则尽命
            临深履薄夙兴温清似兰斯馨如松之盛
            川流不息渊澄取映容止若思言辞安定
            笃初诚美慎终宜令荣业所基籍甚无竟
            学优登仕摄职从政存以甘棠去而益咏
            乐殊贵贱礼别尊卑上和下睦夫唱妇随
            外受傅训入奉母仪诸姑伯叔犹子比儿
            孔怀兄弟同气连枝交友投分切磨箴规
            仁慈隐恻造次弗离节义廉退颠沛匪亏
            性静情逸心动神疲守真志满逐物意移
            坚持雅操好爵自縻都邑华夏东西二京
            背邙面洛浮渭据泾宫殿盘郁楼观飞惊
            图写禽兽画彩仙灵丙舍傍启甲帐对楹
            肆筵设席鼓瑟吹笙升阶纳陛弁转疑星
            右通广内左达承明既集坟典亦聚群英
            杜稿钟隶漆书壁经府罗将相路侠槐卿
            户封八县家给千兵高冠陪辇驱毂振缨
            世禄侈富车驾肥轻策功茂实勒碑刻铭
            磻溪伊尹佐时阿衡奄宅曲阜微旦孰营
            桓公匡合济弱扶倾绮回汉惠说感武丁
            俊乂密勿多士实宁晋楚更霸赵魏困横
            假途灭虢践土会盟何遵约法韩弊烦刑
            起剪颇牧用军最精宣威沙漠驰誉丹青
            九州禹迹百郡秦并岳宗恒岱禅主云亭
            雁门紫塞鸡田赤城昆池碣石钜野洞庭
            旷远绵邈岩岫杳冥治本于农务资稼穑
            俶载南亩我艺黍稷税熟贡新劝赏黜陟
            孟轲敦素史鱼秉直庶几中庸劳谦谨敕
            聆音察理鉴貌辨色贻厥嘉猷勉其祗植
            省躬讥诫宠增抗极殆辱近耻林皋幸即
            两疏见机解组谁逼索居闲处沉默寂寥
            求古寻论散虑逍遥欣奏累遣感谢欢招
            渠荷的历园莽抽条枇杷晚翠梧桐早凋
            陈根委翳落叶飘飒游鲲独运凌摩绛霄
            耽读玩市寓目囊箱易輶攸畏属耳垣墙
            具膳餐饭适口充肠饱饫烹宰饥厌糟糠
            亲戚故旧老少异粮妾御绩纺侍巾帷房
            纨扇圆洁银烛炜煌昼眠夕寐蓝筍象床
            弦歌酒宴接杯举觞矫手顿足悦豫且康
            嫡后嗣续祭祀烝尝稽颡再拜悚惧恐惶
            笺牒简要顾答审详骸垢想浴执热愿凉
            驴骡犊特骇跃超骧诛斩贼盗捕获叛亡
            布射僚丸嵇琴阮啸恬笔伦纸钧巧任钓
            释纷利俗并皆佳妙毛施淑姿工颦妍笑
            年矢每催曦晖朗曜璇玑悬斡晦魄环照
            指薪修祜永绥吉劭矩步引领俯仰廊庙
            束带矜庄徘徊瞻眺孤陋寡闻愚蒙等诮
            谓语助者焉哉乎也',
        //Chinese Traditional
        'CHT' => '繁體千字文
            天地玄黃宇宙洪荒日月盈昃辰宿列張
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
            謂語助者焉哉乎也',
    ];
    
    /**
     * The font pool for captcha.
     *
     * @const array
     */
    const FONTS = [
        'simhei' => 'simhei.ttf',
        'ABeeZee_regular' => 'ABeeZee_regular.ttf',
        'Asap_700' => 'Asap_700.ttf',
        'Khand_500' => 'Khand_500.ttf',
        'Open_Sans_regular' => 'Open_Sans_regular.ttf',
        'Roboto_regular' => 'Roboto_regular.ttf',
        'Ubuntu_regular' => 'Ubuntu_regular.ttf',
        'ygyxsziti2.0' => 'ygyxsziti2.0.ttf',
    ];
    
    /**
     * Get the Font file path.
     *
     * @param  string  $font
     * @param  string  $default
     * @return string
     */
    final protected function getFontFile($font, $default)
    {
        $dir = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'fonts' . DIRECTORY_SEPARATOR;
        if ( empty($font) ) {
            //case 1: the font is null, use default.
            return $dir.self::FONTS[$default];
            
        } elseif ( isset(self::FONTS[$font]) ) {
            //case 2: the font is in the font pool, use it.
            return $dir.self::FONTS[$font];
            
        } elseif ( is_file($font) ) {
            //case 3: the font is an available file path, use it.
            return $font;
        } else {
            //case 4: the font is invalid, use default.
            return $dir.self::FONTS[$default];
        }
    }
    
    /**
     * Get the text string.
     *
     * @param  string  $text
     * @param  string  $default
     * @return string
     */
    final protected function getTextstr($text, $default)
    {
        $string = '';
        if ( empty($text) ) {
            //case 1: the text is null, use default.
            $string = self::TEXT[$default];
            
        } elseif ( isset(self::TEXT[$text]) ) {
            //case 2: the text is in the text pool, use it.
            $string = self::TEXT[$text];
            
        } else {
            //case 3: the text is a string and not in the text pool, use it.
            $string = $text;
        }
        
        return preg_replace('/\s/', '', $string);
    }
}
