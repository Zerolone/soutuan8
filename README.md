# soutuan8
2010年6月2日23:42:56
规划网站后台程序功能
1、添加采集目标

2、采集内容、标题、价格、图片、网址，图片考虑直接采用原网站图片，可以加快速度，万一以后防盗链，再考虑。

3、网址补全功能

4、列表分类、排序

5、批量采集功能，采集失败后可以进行再次采集，可以无限循环，直到全部采集完。可以终止的。设定采集次数，采用参数传递（由于服务器限制原因，暂不考虑用蜘蛛的方式进行采集数据）

6、采集数据预览



当前规则均采用正则语法进行，以后再考虑使用普通的方式进行处理

简单的页面约定（待修改）
1、网页采用UTF8编码
2、网站的图片全部采用css调用， 这样可以方便制作多皮肤页面，具体可以查看test.css文件
3、网站至少兼容IE6-7 ， 尽量兼容FireFox、IE8-9
4、页面图片尽量优化，在Gif、JPG、PNG中找到最优化的方式
5、其他敬请补充


2010年6月3日21:46:16
后台雏形完成
功能如下：
1、自定义添加团购抓取页面
2、批量抓取团购网站内容
3、对于重复的内容，直接更新

