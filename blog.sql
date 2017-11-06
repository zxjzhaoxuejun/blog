-- phpMyAdmin SQL Dump
-- version 4.6.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 06, 2017 at 03:35 PM
-- Server version: 5.7.13-log
-- PHP Version: 5.6.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_article`
--

CREATE TABLE `blog_article` (
  `art_id` int(11) NOT NULL COMMENT '//id',
  `art_title` varchar(255) DEFAULT '' COMMENT '//文章标题',
  `art_tag` varchar(100) DEFAULT '' COMMENT '//关键词',
  `art_description` varchar(255) DEFAULT '' COMMENT '//简短描述',
  `art_thumb` varchar(255) DEFAULT '' COMMENT '//缩略图',
  `art_content` text COMMENT '//内容',
  `art_time` varchar(11) DEFAULT '0' COMMENT '//发布时间',
  `art_editor` varchar(50) DEFAULT '' COMMENT '//编辑者',
  `art_view` int(11) DEFAULT '0' COMMENT '//查看次数',
  `cate_id` int(11) DEFAULT '0' COMMENT '//分类'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='//文章';

--
-- Dumping data for table `blog_article`
--

INSERT INTO `blog_article` (`art_id`, `art_title`, `art_tag`, `art_description`, `art_thumb`, `art_content`, `art_time`, `art_editor`, `art_view`, `cate_id`) VALUES
(1, '今日新闻', '新闻，头条', '', '', '<p><span style="color: rgb(51, 51, 51); font-family: &quot;Microsoft Yahei&quot;, 微软雅黑, arial, 宋体, sans-serif; line-height: 28px; text-align: justify; widows: 1; background-color: rgb(255, 255, 255);">&nbsp;&nbsp;&nbsp;&nbsp;Adobe的Flash 播放器是一个很实用的标准工具之一，他在你用浏览器浏览网页时使用的最频繁，如果你的苹果电脑没有安装Adobe Flash Player，那么你就会无法看到网页上一些动态的动画效果。</span></p><p><br/></p>', '1509981283', '赵学军', 0, 4),
(2, '习近平致信祝贺国际竹藤组织成立二十周年', '习近平,竹藤组织', '11月6日，国际竹藤组织成立20周年志庆暨竹藤绿色发展与南南合作部长级高峰论坛在北京举行。国家主席习近平向国际竹藤组织致贺信。', '', '<p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; text-align: justify; white-space: normal; widows: 1; background-color: rgb(255, 255, 255);">&nbsp;&nbsp;&nbsp;&nbsp;11月6日，国际竹藤组织成立20周年志庆暨竹藤绿色发展与南南合作部长级高峰论坛在北京举行。国家主席习近平向国际竹藤组织致贺信。</p><p style="margin-top: 1.8em; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; text-align: justify; white-space: normal; widows: 1; background-color: rgb(255, 255, 255);">&nbsp;&nbsp;&nbsp;&nbsp;习近平指出，国际竹藤组织成立20年来，为加快全球竹藤资源开发、促进竹藤产区脱贫减困、繁荣竹藤产品贸易、推动可持续发展发挥了积极作用。</p><p style="margin-top: 1.8em; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; text-align: justify; white-space: normal; widows: 1; background-color: rgb(255, 255, 255);">&nbsp;&nbsp;&nbsp;&nbsp;习近平强调，中国共产党第十九次全国代表大会提出，中国坚持人与自然和谐共生，致力于建设社会主义生态文明，走绿色发展之路，建设美丽中国。中国将继续支持国际竹藤组织工作，愿同国际社会一道，积极落实2030年可持续发展议程，推动全球生态文明建设，推动构建人类命运共同体，共同建设更加美丽的世界。</p><p style="margin-top: 1.8em; margin-bottom: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; text-align: justify; white-space: normal; widows: 1; background-color: rgb(255, 255, 255);">&nbsp;&nbsp;&nbsp;&nbsp;国际竹藤组织成立于1997年，是第一个在中国设立的政府间国际组织。</p><p><br/></p>', '1509976701', 'zxj', 0, 1),
(3, '天津市人民政府副秘书长杜强接受组织审查', '天津市,杜强', '据天津市纪委消息：经天津市委批准，天津市人民政府副秘书长、办公厅党组成员杜强涉嫌严重违纪，目前正在接受组织审查。', '', '<p style="margin-top: 1.8em; margin-bottom: 0px; padding: 0px; text-indent: 2em; color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; white-space: normal; widows: 1; background-color: rgb(255, 255, 255);"><span style="font-weight: 700;">杜强简历：</span></p><p style="margin-top: 1.8em; margin-bottom: 0px; padding: 0px; text-indent: 2em; color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; white-space: normal; widows: 1; background-color: rgb(255, 255, 255);">杜强，男，汉族，中共党员，山东历城人，1962年7月出生，1982年1月参加工作，1990年1月加入中国共产党，在职大学学历。</p><p style="margin-top: 1.8em; margin-bottom: 0px; padding: 0px; text-indent: 2em; color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; white-space: normal; widows: 1; background-color: rgb(255, 255, 255);">1982.01-1986.12 天津市财政局财税管理三处干部；</p><p style="margin-top: 1.8em; margin-bottom: 0px; padding: 0px; text-indent: 2em; color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; white-space: normal; widows: 1; background-color: rgb(255, 255, 255);">1986.12-1988.07 财政部驻天津市财政局中央企业财务处干部、科员（1985.09-1988.06在中央财政金融学院财政学专业学习）；</p><p style="margin-top: 1.8em; margin-bottom: 0px; padding: 0px; text-indent: 2em; color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; white-space: normal; widows: 1; background-color: rgb(255, 255, 255);">1988.07-1992.03 财政部驻天津市财政局中央企业财务处办公室副主任；</p><p style="margin-top: 1.8em; margin-bottom: 0px; padding: 0px; text-indent: 2em; color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; white-space: normal; widows: 1; background-color: rgb(255, 255, 255);">1992.03-1993.06 财政部驻天津市财政局中央企业财务处监察科副科长；</p><p style="margin-top: 1.8em; margin-bottom: 0px; padding: 0px; text-indent: 2em; color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; white-space: normal; widows: 1; background-color: rgb(255, 255, 255);">1993.06-1994.12 财政部驻天津市财政局中央企业财务处办公室副主任；</p><p style="margin-top: 1.8em; margin-bottom: 0px; padding: 0px; text-indent: 2em; color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; white-space: normal; widows: 1; background-color: rgb(255, 255, 255);">1994.12-1995.08 财政部驻天津市财政监察专员办事处办公室副主任（副科级）；</p><p style="margin-top: 1.8em; margin-bottom: 0px; padding: 0px; text-indent: 2em; color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; white-space: normal; widows: 1; background-color: rgb(255, 255, 255);">1995.08-1999.05 财政部驻天津市财政监察专员办事处办公室副主任（副处级）；</p><p style="margin-top: 1.8em; margin-bottom: 0px; padding: 0px; text-indent: 2em; color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; white-space: normal; widows: 1; background-color: rgb(255, 255, 255);">1999.05-2000.11 天津市财政局财政监督处副处长；</p><p style="margin-top: 1.8em; margin-bottom: 0px; padding: 0px; text-indent: 2em; color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; white-space: normal; widows: 1; background-color: rgb(255, 255, 255);">2000.11-2001.11 天津市财政局（市地方税务局）办公室副主任；</p><p style="margin-top: 1.8em; margin-bottom: 0px; padding: 0px; text-indent: 2em; color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; white-space: normal; widows: 1; background-color: rgb(255, 255, 255);">2001.11-2003.12 天津市财政局（市地方税务局）办公室主任、金融处处长；</p><p style="margin-top: 1.8em; margin-bottom: 0px; padding: 0px; text-indent: 2em; color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; white-space: normal; widows: 1; background-color: rgb(255, 255, 255);">2003.12-2006.01 天津市财政局（市地方税务局）办公室主任（2001.09-2004.12在湖南大学网络学院财政学专业学习）；</p><p style="margin-top: 1.8em; margin-bottom: 0px; padding: 0px; text-indent: 2em; color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; white-space: normal; widows: 1; background-color: rgb(255, 255, 255);">2006.01-2007.03 天津市财政局（市地方税务局）副局长；</p><p style="margin-top: 1.8em; margin-bottom: 0px; padding: 0px; text-indent: 2em; color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; white-space: normal; widows: 1; background-color: rgb(255, 255, 255);">2007.03-2009.06 天津市人民政府金融服务办公室副主任（2006.09-2008.12在南开大学金融工程学院高级管理人员工商管理专业学习，获高级管理人员工商管理硕士学位）；</p><p style="margin-top: 1.8em; margin-bottom: 0px; padding: 0px; text-indent: 2em; color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; white-space: normal; widows: 1; background-color: rgb(255, 255, 255);">2009.06-2010.09 天津市委金融工作委员会委员，市人民政府金融服务办公室副主任；</p><p style="margin-top: 1.8em; margin-bottom: 0px; padding: 0px; text-indent: 2em; color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; white-space: normal; widows: 1; background-color: rgb(255, 255, 255);">2010.09-2014.06 天津市委金融工作委员会副书记，市人民政府金融服务办公室主任；</p><div class="seed-area" style="margin: 22px 30px 0px auto; padding: 0px; float: left; color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; text-align: justify; white-space: normal; widows: 1; background-color: rgb(255, 255, 255);"></div><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; text-indent: 2em; color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; white-space: normal; widows: 1; background-color: rgb(255, 255, 255);">2014.06-2015.06 天津市金融工作局党委书记、局长；</p><p style="margin-top: 1.8em; margin-bottom: 0px; padding: 0px; text-indent: 2em; color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; white-space: normal; widows: 1; background-color: rgb(255, 255, 255);">2015.06- 天津市人民政府副秘书长（正局级）、办公厅党组成员。（天津市纪委）</p><p><br/></p>', '1509977295', 'zxj', 0, 1),
(4, '深圳“鹦鹉案”二审开庭 律师坚持做无罪辩护', '', '天“鹦鹉案”在深圳中院二审。', '', '<p>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; text-align: justify; widows: 1; background-color: rgb(255, 255, 255);">今天“鹦鹉案”在深圳中院二审。王的妻子称丈夫养殖鹦鹉是出于爱好，此前完全没想到是保护动物。辩护律师认为，很多事情跟抓癞蛤蟆一样，老百姓不知情违法，在量刑定罪上应有区别。他还介绍，一审定案的鉴定意见称王所养鹦鹉是人工变异种，而检方提供的专家观点认为其不是人工变异种。</span></p>', '1509977427', 'zxj', 0, 1),
(5, '他婚后两年才见到妻子真面目 而今却患难与共50年', '', '我们结婚后两年，我才见到她的真面目，真的！没想到，如今却已经风风雨雨走过来50多年。尤其是我受伤后这30年，多亏有了她，否则真不敢想象今天的我会是什么样。”11月3日，躺在床上黄诚法一边在稿纸上写着什么，一边笑着说道。她的妻子陈阿近则在一边默默地给他喂水。', '', '<p><span style="color: rgb(60, 67, 77); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; widows: 1; background-color: rgb(255, 255, 255);">&nbsp;&nbsp;&nbsp;&nbsp;我们结婚后两年，我才见到她的真面目，真的！没想到，如今却已经风风雨雨走过来50多年。尤其是我受伤后这30年，多亏有了她，否则真不敢想象今天的我会是什么样。”11月3日，躺在床上黄诚法一边在稿纸上写着什么，一边笑着说道。她的妻子陈阿近则在一边默默地给他喂水。</span></p><p><span style="color: rgb(60, 67, 77); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; widows: 1; background-color: rgb(255, 255, 255);"><span style="color: rgb(60, 67, 77); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; widows: 1; background-color: rgb(255, 255, 255);">&nbsp;&nbsp;&nbsp;&nbsp;1963年，经人介绍，黄诚法与比小自己1岁的陈阿近结婚。“当时的惠安女是很传统的，结婚后还要住在娘家，除非有重大节庆才到夫家帮忙。就是见面，也带着斗笠，头巾，几乎看不到全脸。”直到两年后两人打算要小孩了，才住在一起。</span></span></p>', '1509977496', 'zxj', 0, 1),
(6, '大学宿舍合照新姿势 简直是用生命在比拼“一字马”', '一字马,休闲', '大学里网红的出现，很可能会和寝室有关，方寸之地，却是个藏龙卧虎之所。近日，郑州黄河科技学院的男生女生们纷纷在宿舍里比拼“一字马”，花样又秀出新高度。', '', '<p><span style="color: rgb(51, 51, 51); font-family: &quot;Hiragino Sans GB&quot;, &quot;Microsoft Yahei&quot;, 宋体; line-height: 28.8px; text-align: justify; widows: 1; background-color: rgb(255, 255, 255);">&nbsp;&nbsp;&nbsp;&nbsp;大学里网红的出现，很可能会和寝室有关，方寸之地，却是个藏龙卧虎之所。近日，郑州黄河科技学院的男生女生们纷纷在宿舍里比拼“一字马”，花样又秀出新高度。</span></p>', '1509977644', 'zxj_1', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `cate_id` int(11) NOT NULL COMMENT '//id',
  `cate_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '' COMMENT '//类名',
  `cate_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '' COMMENT '//l类名描述',
  `cate_keywords` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '' COMMENT '//seo关键字',
  `cate_description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT '' COMMENT '//seo描述',
  `cate_view` int(11) DEFAULT '0' COMMENT '//查看次数',
  `cate_order` tinyint(4) DEFAULT NULL COMMENT '//排序',
  `cate_pid` int(11) DEFAULT NULL COMMENT '//父级id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='文件分类';

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`cate_id`, `cate_name`, `cate_title`, `cate_keywords`, `cate_description`, `cate_view`, `cate_order`, `cate_pid`) VALUES
(1, '新闻', '搜集国内外最新新闻消息', '', '', 0, 1, 0),
(2, '体育', '发扬体育精神，增长国民体质', '', '', 0, 3, 0),
(3, '娱乐', '人人都有娱乐，娱乐天天有', '', '', 0, 2, 0),
(4, '热点新闻', '《今日头条》你关心的,才是头条! - ', '新闻，热点，今日', '', 0, 1, 1),
(5, '军事新闻', '军事频道_最多军迷首选的军事门户_新浪网', '军事，世界军事！', '最近的军事事件', 0, 3, 1),
(6, '百度新闻', '百度新闻搜索——全球最大的中文新闻平台', '', '', 0, 6, 1),
(7, '体育彩票', '国家体育总局体育彩票管理中心官方网站', '', '', 0, 1, 2),
(8, '新浪娱乐', '新浪娱乐首页_娱乐新闻_新浪网', '', '', 0, 8, 3),
(9, '腾讯娱乐', '娱乐首页_腾讯网', '', '', 0, 9, 3),
(15, '文化', '中国文化博大精心，让你慢慢品尝', '', '', 0, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(8) NOT NULL COMMENT '//id',
  `user_name` varchar(24) NOT NULL DEFAULT '' COMMENT '//用户名',
  `user_pass` varchar(255) NOT NULL DEFAULT '' COMMENT '//密码'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='管理员';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pass`) VALUES
(1, 'admin', 'eyJpdiI6InhKU1lGcDBIQ0YydDg5UXN1aStpQVE9PSIsInZhbHVlIjoiRjNlS3kyQUpPaThvaFNUN3RabVE4QT09IiwibWFjIjoiOTVhMGRjOTViZmY3MWFlYTM0M2IwNjQxNGY1NzZlNThlY2E3YTJmNDRjYTdiMTFmZjhmMmRlOTU0ODE3OTY1MCJ9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_article`
--
ALTER TABLE `blog_article`
  ADD PRIMARY KEY (`art_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_article`
--
ALTER TABLE `blog_article`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '//id', AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '//id', AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT COMMENT '//id', AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
