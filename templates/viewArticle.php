<?php include "templates/includes/header.php" ?>
      <article class="post">
            <h1 style="width: 100%; margin-bottom: 10px; font-size: 2.5em;"><?php echo htmlspecialchars( $results['article']->title )?></h1>
            <div style="width: 100%; font-style: italic; color: #999; margin-bottom: 25px;"><?php echo htmlspecialchars( $results['article']->summary )?></div>
            <div style="width: 100%;"><?php echo $results['article']->content?></div>
            <p class="pubDate">Published on <?php echo date('j F Y', $results['article']->publicationDate)?></p>
      </article>
      <p><a href="./">Return to Homepage</a></p>
 
<?php include "templates/includes/footer.php" ?>