<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button data-target=".bs-navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <nav role="navigation" class="collapse navbar-collapse bs-navbar-collapse">
            <ul class="nav navbar-nav pull-left">
                {{ Theme::partial('theme.nav') }}
            </ul>
        </nav>
    </div>
</div>

<header>
    <div id="topbar" class="container">
        <h1 class="logo">{{{ Config::get('core::app.site-name') }}}</h1>
    </div>
</header>
