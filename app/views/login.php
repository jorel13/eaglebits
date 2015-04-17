<!DOCTYPE html><html lang="en"><head>    <meta charset="utf-8"/>    <title>Bits</title>    <meta name="app-route" content="<?PHP echo get_controller() . '/' . get_action(); ?>">    <meta name="app-url" content="<?PHP echo home_url(); ?>">    <?PHP echo asset('Bits.css'); ?>    <!--[if IE]>    <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js"></script>    <![endif]--></head><body class="controller-<?PHP echo get_controller(); ?> action-<?PHP echo get_action(); ?>"><div id="auth" class="code-font">    <header>        <a href="">eaglec<span class="bit-embed"></span>de</a>    </header>    <form action="<?PHP echo home_url('auth/new'); ?>" method="POST">        <div>            <label class="login-label">                <span>Username</span>                <input autofocus="true" type="text" name="username" class="text">            </label>            <label class="login-label">                <span>Password</span>                <input type="password" name="password" class="text">            </label>        </div>        <div class="btn-container">            <input type="submit" class="btn btn-positive login-btn code-font" value="Login">        </div>    </form>    <?PHP if (isset($_GET['invalid'])) { ?><p>Invalid username or password</p><?PHP } ?>    <div class="main-content">        <h1 class="main-page-header">Popular Codebits</h1>        <div class="codebits-container">            <div class="one-codelet">                <div class="codelet-info">                    <div class="user-name">Lucille Bluth</div>                    <div class="codelet-stats">                        <div class="hearts-num">42</div>                        <div class="heart"></div>                    </div>                </div>                <div class="codelet-content iframe-wrap">                    <a href="http://codepen.io/adriangyuricska/pen/bNXaBj"></a>                    <img src = "../static/images/mail-pen.png" />                    <!--I AIN'T GOT TIME FOR NO IFRAME RN                    <iframe frameborder="0" data-src="http://codepen.io/carolineartz/pen/myBjEN" scrolling="no" allowtransparency="true" src="http://s.codepen.io/adriangyuricska/fullcpgrid/bNXaBj">                    </iframe>-->                </div>            </div>            <div class="one-codelet">                <div class="codelet-info">                    <div class="user-name">Buster Bluth</div>                    <div class="codelet-stats">                        <div class="hearts-num">50</div>                        <div class="heart"></div>                    </div>                </div>                <div class="codelet-content iframe-wrap">                    <a href="http://codepen.io/adriangyuricska/pen/bNXaBj"></a>                    <img src = "../static/images/hello-button.png" />                </div>            </div>            <div class="one-codelet">                <div class="codelet-info">                    <div class="user-name">Gob Bluth</div>                    <div class="codelet-stats">                        <div class="hearts-num">59</div>                        <div class="heart"></div>                    </div>                </div>                <div class="codelet-content iframe-wrap">                    <a href="http://codepen.io/adriangyuricska/pen/bNXaBj"></a>                    <img src = "../static/images/progress-bar.png" />                </div>            </div>            <div class="one-codelet">                <div class="codelet-info">                    <div class="user-name">Maeby Funke</div>                    <div class="codelet-stats">                        <div class="hearts-num">73</div>                        <div class="heart"></div>                    </div>                </div>                <div class="codelet-content iframe-wrap">                    <a href="http://codepen.io/adriangyuricska/pen/bNXaBj"></a>                    <img src = "../static/images/scroll.png" />                </div>            </div>            <div class="one-codelet">                <div class="codelet-info">                    <div class="user-name">Tobias Funke</div>                    <div class="codelet-stats">                        <div class="hearts-num">49</div>                        <div class="heart"></div>                    </div>                </div>                <div class="codelet-content iframe-wrap">                    <a href="http://codepen.io/adriangyuricska/pen/bNXaBj"></a>                    <img src = "../static/images/rotating-thing.png" />                </div>            </div>            <div class="one-codelet">                <div class="codelet-info">                    <div class="user-name">Ann Mayonegg</div>                    <div class="codelet-stats">                        <div class="hearts-num">47</div>                        <div class="heart"></div>                    </div>                </div>                <div class="codelet-content iframe-wrap">                    <a href="http://codepen.io/adriangyuricska/pen/bNXaBj"></a>                    <img src = "../static/images/hamburger.png" />                </div>            </div>            <div class="one-codelet">                <div class="codelet-info">                    <div class="user-name">Tony Wonder</div>                    <div class="codelet-stats">                        <div class="hearts-num">67</div>                        <div class="heart"></div>                    </div>                </div>                <div class="codelet-content iframe-wrap">                    <a href="http://codepen.io/adriangyuricska/pen/bNXaBj"></a>                    <img src = "../static/images/step-anim.png" />                </div>            </div>            <div class="one-codelet">                <div class="codelet-info">                    <div class="user-name">George Michael Bluth</div>                    <div class="codelet-stats">                        <div class="hearts-num">32</div>                        <div class="heart"></div>                    </div>                </div>                <div class="codelet-content iframe-wrap">                    <a href="http://codepen.io/adriangyuricska/pen/bNXaBj"></a>                    <img src = "../static/images/geometric-planes.png" />                </div>            </div>        </div>    </div>    <div class="more-codebits">        <button class="next-btn btn btn-positive code-font" value="View More">View more</button>    </div></div><?PHP get_footer(); ?>