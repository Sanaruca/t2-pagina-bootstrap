<?php

$title_page = "Blogs | UX Central";

include_once("./src/templates/layout.php");
require_once("./src/components/Article_link.class.component.php");

?>
<section>
  <h1>All Articles</h2>
    <p>I write new articles every Saturday. Be sure to be subscribed to read the latest article</p>
    <div class="blogs-content | row justify-content-between">


      <?php
      ArticleLink::render(
        "The Importance of User-Centered Design in Product Development",
        "/blogs/1",
        "/public/images/image.jpg"
      )
        ?>


      <?php
      ArticleLink::render(
        "5 Key Elements of an Intuitive User Interface",
        "/blogs/2",
        "/public/images/image_3.jpg"
      )
        ?>



      <?php
      ArticleLink::render(
        "The Future of UX: Emerging Trends and Technologies",
        "/blogs/3",
        "/public/images/image_1.jpg"
      )
        ?>


      <?php
      ArticleLink::render(
        "From Ideation to Implementation: A Guide to the Product Design Process",
        "/blogs/4",
        "/public/images/image_2.jpg"
      )
        ?>


      <?php
      ArticleLink::render(
        "The Fundamentals of Good UX Design",
        "/blogs/5",
        "/public/images/image_9.jpg"
      )
        ?>

      <?php
      ArticleLink::render(
        "The Role of Empathy in UX Design",
        "/blogs/6",
        "/public/images/image_10.jpg"
      )
        ?>



</section>



<?php include_once("./src/templates/footer.php") ?>