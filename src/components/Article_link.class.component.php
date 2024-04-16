<?php
class ArticleLink
{
  public static function test()
  {
    echo "HOLA MI PANA";
  }

  public static function render(
    string $article_name,
    string $article_link,
    string $article_img_src = "",
    string $article_img_alt = "image without description"
  ) {

    echo <<<HTML
      <a href="$article_link" class="blogs-content__article-link">
      <div class="blogs-content__article-link__img-content">
      <img class="blogs-content__article-link__img-content__img" src="$article_img_src" alt="$article_img_alt" />
      </div>
      <h3 class="blogs-content__article-link__title">
        $article_name
      </h3>
      <p>16 June 2023</p>
    </a>
    HTML;
  }
}

function app()
{
  ArticleLink::test();
}

?>