<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
    <link rel="stylesheet" type="text/css" href="css/base.css"/>
    <script type="text/javascript" src="./js/jquery-3.4.1.min.js"></script>
</head>
<body>

<div class="header">
    Welcome
</div>

<div style="margin-top: 10px;">
    <div style="margin-bottom: 10px; display: -webkit-box;">
        <div class="content">
            <div style="margin-top: 50px">
                今日要闻
                2019年07月02日 星期二北京市25°多云 | 预警
            </div>

            <div style="margin-top: 30px">
                <ul>
                    <li><a href="https://new.qq.com/omn/SJD20190/SJD2019070200385503.html">时政微视频丨脱贫路上的初心</a></li>
                    <li><a href="https://new.qq.com/omn/NEW20190/NEW2019070200650601.html">署名文章：习近平能源安全新战略的浙江探索</a></li>
                    <li><a href="https://new.qq.com/omn/20190702/20190702A098SA.html">习近平向2019世界新能源汽车大会致贺信 理上网来</a></li>
                    <li><a href="https://new.qq.com/omn/PEG20190/PEG2019070200505801.html">中流击水 破浪前行
                        新中国70年经济社会发展伟大飞跃</a></li>
                    <li><a href="https://new.qq.com/omn/20190702/20190702A05891.html">有信心让亿万百姓端稳“饭碗” 不忘初心 牢记使命</a></li>
                </ul>
            </div>

            <div>
                <a class="cf pics" href="http://new.qq.com/omn/20190702/20190702A0FQZO.html" target="_blank">
                    <img class="fl picture" src="http://inews.gtimg.com/newsapp_ls/0/9555770729_295195/0"
                         alt="香港立法会大楼附近恢复平静，市民摇头叹息">
                    <img class="fl picture"
                         src="http://inews.gtimg.com/newsapp_ls/0/9555770732_295195/0"
                         alt="香港立法会大楼附近恢复平静，市民摇头叹息">
                    <img class="fl picture"
                         src="http://inews.gtimg.com/newsapp_ls/0/9555770736_295195/0"
                         alt="香港立法会大楼附近恢复平静，市民摇头叹息">
                </a>
            </div>
        </div>

        <div class="login">
            <div id="login">
                <p class="login-title">Log In</p>
            </div>

            <div id="middle">
                <form name="login-form" method="post" action="/mysql/login.php" class="login-form">
                    <ul>
                        <li>
                            <span>账号:</span>
                            <input name="account" type="text" class="login-input" id="account"></li>
                        <li>
                            <span>密码:</span>
                            <input name="password" class="login-input" type="password" id="password"></li>
                        <li>
                            <span>验证码:</span>
                            <input name="verification" type="text" class="login-verify" id="verify"></li>
                    </ul>
                </form>

                <div id="verification">
                    <img name="validate" onclick="validate.src+='?' + Math.random();" src="mysql/verification.php" alt="点击刷新">
                </div>
            </div>

            <div id="login-button">
                <input type="submit" id="submit" value="提交登录" class="login-sub-button"/>
                <a href="register.html"><input type="submit" value="去注册" class="login-sub-button"/></a>
            </div>
        </div>
    </div>

    <div class="copyright">
        版权：段思思 电子商务一班
    </div>
</div>
<script type="text/javascript" src="./js/login.js"></script>
</body>
</html>