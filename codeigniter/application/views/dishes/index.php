<h2><?php echo $title2; ?></h2>
<?php foreach ($dishes as $item): ?>
  <h3><?php echo $item['name']; ?></h3>
  <div>
    <p><?php echo $item['description']; ?></p>
    <p><?php echo $item['price']; ?></p>
  </div>
<?php endforeach; ?>
