<article class="article">
  <?php if (!empty($content['field_bild'])): ?>
    <figure class="article__teaser-image-container">
      <?php print render($content['field_bild']); ?>

      <h1 class="article__teaser-image-title">
        <?php print $title; ?>
      </h1>
    </figure>
  <?php endif; ?>

  <?php if (!empty($content['field_teaser_text'])): ?>
    <div class="article__teaser-container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
          <?php print render($content['field_teaser_text']); ?>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2">
      <?php if (empty($content['field_bild'])): ?>
        <h1 class="article__subheadline">
          <?php print $title; ?>
        </h1>
      <?php endif; ?>

      <div class="article__text">
        <?php if (!empty($content['field_titel_und_kurze_beschreibu'])): ?>
          <?php print render($content['field_titel_und_kurze_beschreibu']); ?>
        <?php endif; ?>
        <?php print render($content['webform']); ?>
      </div>
    </div>
  </div>
</article>