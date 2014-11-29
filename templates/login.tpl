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
<body class="login">
<div class="container">
    <form class="form-signin" role="form" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUser" class="sr-only">Username</label>
        <input type="email" id="inputUser" name="inputUser" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
        <input type="hidden" name="action" value="login" />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="{$PATH}js/bootstrap.min.js"></script>
</body>
</html>