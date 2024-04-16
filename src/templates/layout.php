<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/public/stylesheets/main.css" />
  <link rel="shortcut icon" href="/public/favicon.ico" type="image/x-icon">
  <title>
    <?php echo (isset($title_page)) ? $title_page : "Document" ?>
  </title>
</head>

<body>

  <?php include($_SERVER['DOCUMENT_ROOT'] . '/src/components/navbar.component.php') ?>


  <main class="px-4 px-lg-6 px-xxl-20 d-flex flex-column gap-8">