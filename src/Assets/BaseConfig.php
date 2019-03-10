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
        'CHS' => '简体千字文                                      天地玄黄 宇宙洪荒 
            日月盈昃 辰宿列张 寒来暑往 秋收冬藏 闰余成岁 律召调阳 云腾致雨 露结为霜
            金生丽水 玉出昆岗 剑号巨阙 珠称夜光 果珍李柰 菜重芥姜 海咸河淡 鳞潜羽翔
            龙师火帝 鸟官人皇 始制文字 乃服衣裳 推位让国 有虞陶唐 吊民伐罪 周发殷汤
            坐朝问道 垂拱平章 爱育黎首 臣伏戎羌 遐迩壹体 率宾归王 鸣凤在树 白驹食场
            化被草木 赖及万方 盖此身发 四大五常 恭惟鞠养 岂敢毁伤 女慕贞絜 男效才良
            知过必改 得能莫忘 罔谈彼短 靡恃己长 信使可复 器欲难量 墨悲丝染 诗赞羔羊
            景行维贤 克念作圣 德建名立 形端表正 空谷传声 虚堂习听 祸因恶积 福缘善庆
            尺辟非宝 寸阴是竞 资父事君 曰严与敬 孝当竭力 忠则尽命 临深履薄 夙兴温清
            似兰斯馨 如松之盛 川流不息 渊澄取映 容止若思 言辞安定 笃初诚美 慎终宜令
            荣业所基 籍甚无竟 学优登仕 摄职从政 存以甘棠 去而益咏 乐殊贵贱 礼别尊卑
            上和下睦 夫唱妇随 外受傅训 入奉母仪 诸姑伯叔 犹子比儿 孔怀兄弟 同气连枝
            交友投分 切磨箴规 仁慈隐恻 造次弗离 节义廉退 颠沛匪亏 性静情逸 心动神疲
            守真志满 逐物意移 坚持雅操 好爵自縻 都邑华夏 东西二京 背邙面洛 浮渭据泾
            宫殿盘郁 楼观飞惊 图写禽兽 画彩仙灵 丙舍傍启 甲帐对楹 肆筵设席 鼓瑟吹笙
            升阶纳陛 弁转疑星 右通广内 左达承明 既集坟典 亦聚群英 杜稿钟隶 漆书壁经
            府罗将相 路侠槐卿 户封八县 家给千兵 高冠陪辇 驱毂振缨 世禄侈富 车驾肥轻
            策功茂实 勒碑刻铭 磻溪伊尹 佐时阿衡 奄宅曲阜 微旦孰营 桓公匡合 济弱扶倾
            绮回汉惠 说感武丁 俊乂密勿 多士实宁 晋楚更霸 赵魏困横 假途灭虢 践土会盟
            何遵约法 韩弊烦刑 起剪颇牧 用军最精 宣威沙漠 驰誉丹青 九州禹迹 百郡秦并
            岳宗恒岱 禅主云亭 雁门紫塞 鸡田赤城 昆池碣石 钜野洞庭 旷远绵邈 岩岫杳冥
            治本于农 务资稼穑 俶载南亩 我艺黍稷 税熟贡新 劝赏黜陟 孟轲敦素 史鱼秉直
            庶几中庸 劳谦谨敕 聆音察理 鉴貌辨色 贻厥嘉猷 勉其祗植 省躬讥诫 宠增抗极
            殆辱近耻 林皋幸即 两疏见机 解组谁逼 索居闲处 沉默寂寥 求古寻论 散虑逍遥
            欣奏累遣 感谢欢招 渠荷的历 园莽抽条 枇杷晚翠 梧桐早凋 陈根委翳 落叶飘飒
            游鲲独运 凌摩绛霄 耽读玩市 寓目囊箱 易輶攸畏 属耳垣墙 具膳餐饭 适口充肠
            饱饫烹宰 饥厌糟糠 亲戚故旧 老少异粮 妾御绩纺 侍巾帷房 纨扇圆洁 银烛炜煌
            昼眠夕寐 蓝筍象床 弦歌酒宴 接杯举觞 矫手顿足 悦豫且康 嫡后嗣续 祭祀烝尝
            稽颡再拜 悚惧恐惶 笺牒简要 顾答审详 骸垢想浴 执热愿凉 驴骡犊特 骇跃超骧
            诛斩贼盗 捕获叛亡 布射僚丸 嵇琴阮啸 恬笔伦纸 钧巧任钓 释纷利俗 并皆佳妙
            毛施淑姿 工颦妍笑 年矢每催 曦晖朗曜 璇玑悬斡 晦魄环照 指薪修祜 永绥吉劭
            矩步引领 俯仰廊庙 束带矜庄 徘徊瞻眺 孤陋寡闻 愚蒙等诮 谓语助者 焉哉乎也',
        //Chinese Traditional
        'CHT' => '繁體千字文                                      天地玄黃 宇宙洪荒
            日月盈昃 辰宿列張 寒來暑往 秋收冬藏 閏餘成歲 律召調陽 雲騰致雨 露結為霜
            金生麗水 玉出崑崗 劍號巨闕 珠稱夜光 果珍李柰 菜重芥薑 海鹹河淡 鱗潛羽翔
            龍師火帝 鳥官人皇 始製文字 乃服衣裳 推位讓國 有虞陶唐 吊民伐罪 周發殷湯
            坐朝問道 垂拱平章 愛育黎首 臣伏戎羌 遐邇壹體 率賓歸王 鳴鳳在樹 白駒食場
            化被草木 賴及萬方 蓋此身髮 四大五常 恭惟鞠養 豈敢毀傷 女慕貞絜 男效才良
            知過必改 得能莫忘 罔談彼短 靡恃己長 信使可覆 器欲難量 墨悲絲染 詩贊羔羊
            景行維賢 剋念作聖 德建名立 形端表正 空谷傳聲 虛堂習聽 禍因惡積 福緣善慶
            尺辟非寶 寸陰是競 資父事君 曰嚴與敬 孝當竭力 忠則盡命 臨深履薄 夙興溫清
            似蘭斯馨 如松之盛 川流不息 淵澄取映 容止若思 言辭安定 篤初誠美 慎終宜令
            榮業所基 籍甚無竟 學優登仕 攝職從政 存以甘棠 去而益詠 樂殊貴賤 禮別尊卑
            上和下睦 夫唱婦隨 外受傅訓 入奉母儀 諸姑伯叔 猶子比兒 孔懷兄弟 同氣連枝
            交友投分 切磨箴規 仁慈隱惻 造次弗離 節義廉退 顛沛匪虧 性靜情逸 心動神疲
            守真誌滿 逐物意移 堅持雅操 好爵自縻 都邑華夏 東西二京 背邙面洛 浮渭據涇
            宮殿盤鬱 樓觀飛驚 圖寫禽獸 畫彩仙靈 丙舍傍啟 甲帳對楹 肆筵設席 鼓瑟吹笙
            升階納陛 弁轉疑星 右通廣內 左達承明 既集墳典 亦聚群英 杜稿鐘隸 漆書壁經
            府羅將相 路俠槐卿 戶封八縣 家給千兵 高冠陪輦 驅轂振纓 世祿侈富 車駕肥輕
            策功茂實 勒碑刻銘 磻溪伊尹 佐時阿衡 奄宅曲阜 微旦孰營 桓公匡合 濟弱扶傾
            綺迴漢惠 說感武丁 俊乂密勿 多士實寧 晉楚更霸 趙魏困橫 假途滅虢 踐土會盟
            何遵約法 韓弊煩刑 起翦頗牧 用軍最精 宣威沙漠 馳譽丹青 九州禹跡 百郡秦并
            嶽宗恒岱 禪主云亭 雁門紫塞 雞田赤城 昆池碣石 鉅野洞庭 曠遠綿邈 岩岫杳冥
            治本於農 務資稼穡 俶載南畝 我藝黍稷 稅熟貢新 勸賞黜陟 孟軻敦素 史魚秉直
            庶幾中庸 勞謙謹敕 聆音察理 鑒貌辨色 貽厥嘉猷 勉其祗植 省躬譏誡 寵增抗極
            殆辱近恥 林皋幸即 兩疏見機 解組誰逼 索居閒處 沉默寂寥 求古尋論 散慮逍遙
            欣奏累遣 感謝歡招 渠荷的歷 園莽抽條 枇杷晚翠 梧桐早凋 陳根委翳 落葉飄颯
            游鯤獨運 凌摩絳霄 耽讀玩市 寓目囊箱 易輶攸畏 屬耳垣牆 具膳餐飯 適口充腸
            飽飫烹宰 饑厭糟糠 親戚故舊 老少異糧 妾御績紡 侍巾帷房 紈扇圓潔 銀燭煒煌
            晝眠夕寐 藍筍象床 弦歌酒宴 接杯舉觴 矯手頓足 悅豫且康 嫡後嗣續 祭祀烝嘗
            稽顙再拜 悚懼恐惶 箋牒簡要 顧答審詳 骸垢想浴 執熱願涼 驢騾犢特 駭躍超驤
            誅斬賊盜 捕獲叛亡 布射僚丸 嵇琴阮嘯 恬筆倫紙 鈞巧任釣 釋紛利俗 並皆佳妙
            毛施淑姿 工顰妍笑 年矢每催 曦暉朗曜 璇璣懸斡 晦魄環照 指薪修祜 永綏吉劭
            矩步引領 俯仰廊廟 束帶矜莊 徘徊瞻眺 孤陋寡聞 愚蒙等誚 謂語助者 焉哉乎也',
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
    final protected static function getFontFile($font, $default)
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
    final protected static function getTextstr($text, $default)
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
