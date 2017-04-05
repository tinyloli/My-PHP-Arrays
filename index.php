<?php
  $company = 'Flogger';
  $title = 'Arrays';
  $topic = 'foods alli loves';
  $franchise = 'savory foods';

  // Let's create a simple array
  $food = array(
    'siopao (meat buns)',
    'salt & vinegar chips',
    'korean bbq',
    'brazilian food',
    'sausage, pepperoni & pizza',
    'hamburgers',
    'chicken katsu and rice',
    'spam masubi'
  );

  // Let's create an associative array
  $foodRating = array(
    'siopao (meat buns)' => 7,
    'salt & vinegar chips' => 7,
    'korean bbq' => 9,
    'brazilian food' => 8,
    'sausage, pepperoni & pizza' => 8,
    'hamburgers' => 7,
    'chicken katsu and rice' => 8,
    'spam masubi' => 7
  );

  // Count how many items are stored in the array $movies
  $foodLength = count($food);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <body>
    <main class="container py-4">
      <h1><?php echo $topic; ?>: <em><?php echo $franchise; ?></em></h1>
      <p>There are <?php echo $foodLength; ?> foods, specifically <em><?php echo $franchise; ?></em>.</p>
      <ul class="list-group pb-4" style="max-width: 20rem;">
        <?php
          foreach ($food as $food) {
              echo '<li class="list-group-item">'.$food.'</li>';
          }
          // Let's unset $movie so it can be used again later
          unset($food);
        ?>
      </ul>
      <p>The best <em><?php echo $franchise; ?></em> is <em><?php echo $movies[4]; ?></em>.</p>
      <hr>
      <h2 class="h5 mb-4">The <em><?php echo $franchise; ?></em> foods along with their rating out of 10:</h2>
      <ul class="list-group pb-4" style="max-width: 20rem;">
        <?php
          foreach ($foodRating as $movie => $year) {
              echo '<li class="list-group-item justify-content-between"><em>'.$movie.'</em> '.$year.'</li>';
          }
          // Let's unset $movie so it can be used again later
          unset($movie);
        ?>
      </ul>
    </main>
    <footer class="container">
      <hr>
      <?php echo '<p>Copyright &copy; '.date('Y').' '.$company.'. All rights reserved.</p>'; ?> 
  </body>
</html>