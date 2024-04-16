<?php

require_once __DIR__ . '/router.php';


// get('/public', function (){
//   echo "hola";
// });

get("/", "/src/views/mainpage");

get("/about", "/src/views/about");



get("/blogs", "/src/views/blogs");

get('/blogs/$id', function (string $id) {

  $file_path = "./src/views/articles/article-$id.php";

  if (!file_exists($file_path)) {
    header("Location: /404");
    exit();
  }

  include_once($file_path);
});

any("/404", "/src/views/404");