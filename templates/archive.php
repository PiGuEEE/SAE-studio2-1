<?php include "templates/includes/header.php" ?>
 
      <h1>Good Guy Arthur News</h1>
 
      <ul id="headlines" class="archive">
 
<?php foreach ( $results['articles'] as $article ) { ?>
 
        <li>
            <a href=".?action=viewArticle&amp;articleId=<?php echo $article->id?>">
                <h2 class="dateList">
                    <span class="pubDateDay"><?php echo date('j', $article->publicationDate)?></span>
                    <span class="pubDateMonth"><?php echo date('F', $article->publicationDate)?></span>
                    <span class="pubDateYear"><?php echo date('Y', $article->publicationDate)?></span>
                </h2>
                <p class="titleList"><?php echo htmlspecialchars( $article->title )?></p>
                <p class="summary"><?php echo htmlspecialchars( $article->summary )?></p>
            </a>
        </li>
 
<?php } ?>
 
      </ul>
 
      <p><?php echo $results['totalRows']?> article<?php echo ( $results['totalRows'] != 1 ) ? 's' : '' ?> in total.</p>
 
      <p><a href="./">Return to Homepage</a></p>
 
<?php include "templates/includes/footer.php" ?>