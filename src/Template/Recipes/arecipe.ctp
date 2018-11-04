<html>
<div class = "recipe card col-md-8 offset-md-2">
  <div class = 'card-title'>
    <?= $response->name ?>
  </div>
  <img class = 'card-img-top col-md-6' src = <?=$response->_links[2]->href; ?>><br>
  <div class = 'card-body'>

        Preperation time: <?= $response->preparationTime->min; ?><br>
        Cooking time: <?= $response->cookingTime->min; ?>

  </div>
  <div class = 'card-body'>

        Ingredients<br>
      <?php foreach($response->ingredients as $ing) : ?>
        -<?= $ing->name;  ?> <br>
      <?php endforeach ?>

  </div>
  <div class = 'row col-md-12 card-body'>
    <br>
      <p class = "text-center">Instructions</p><br>
      <?php foreach($response->instructions as $ing) : ?>
        <?= $ing ?> <br>
      <?php endforeach ?>

    </div>
  </div>
</div>

</html>
