# PHP template engine
A simple PHP template engine

Easy to use:

``` php
$template = new Template('var/www/html/project/template', []);
echo $template->render('home-page.php');
```
With parameters:
``` php
$template = new Template('var/www/html/project/template', ['lang' => 'fr']);
echo $template->render('home-page.php', ['title' => 'Home Page']);
```

``` html
<!doctype html>
<html lang="<?php echo $template->get('lang'); ?>">
<head>
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
  ...
  <!-- Le reste du contenu -->
  ...
</body>
</html>
```



