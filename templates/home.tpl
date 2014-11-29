<!DOCTYPE html>
<html lang="en">
<head>
    <title>OSGP - The open source game panel</title>

    <link href="{$PATH}css/bootstrap.min.css" rel="stylesheet"/>
    <link href="{$PATH}css/bootstrap-theme.min.css" rel="stylesheet"/>
    <link href="{$PATH}css/osgp.css" rel="stylesheet"/>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">OSGP</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="{if $URL eq 'Dashboard'}active{/if}"><a href="{$PATH}Dashboard/">Dashboard</a></li>
                <li class="{if $URL eq 'Servers'}active{/if}"><a href="{$PATH}Servers/">Servers</a></li>
                <li class="{if $URL eq 'Settings'}active{/if}"><a href="{$PATH}Settings/">Settings</a></li>
            </ul>

            <form class="navbar-form navbar-right" role="form" method="post">
                <div class="form-group">
                    <input type="text" name="username" placeholder="Username" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="pwd" placeholder="Password" class="form-control">
                </div>
                <input type="hidden" name="action" value="login" />
                <button type="submit" class="btn btn-success">Sign in</button>
            </form>
        </div>
    </div>
</nav>

<div class="container">
    <h1>{$URL}</h1>

    <hr />

    <footer>
        <p>&copy; <a href="https://github.com/DevChuckNorris/OSGP">OSGP</a> 2014</p>
    </footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="{$PATH}js/bootstrap.min.js"></script>
</body>
</html>