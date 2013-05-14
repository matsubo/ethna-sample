<!doctype html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>YA-Ethna Sample Page</title>
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>

  <h1>Test</h1>
    <p>Hello World!</p>

  <h1>Login</h1>


{foreach from=$ae item="message"}
<p>{$message}</p>
{/foreach}



  <form action="?action=login_execute" method="post">

  <input type="text" name="login" value="{$form.login}">
  <br />
  <input type="text" name="password" value="{$form.password}">
  <br />

  <input type="submit" value="Login">
  </form>

  </body>
</html>

