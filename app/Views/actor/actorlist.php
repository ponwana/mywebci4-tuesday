<table class="table">
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
    <?php if($persons) : ?>
        <?php foreach($persons as $person) : ?>
            <tr>
            <td><?php echo $person['id']; ?></td>
            <td><?php echo $person['name']; ?></td>
            <td><?php echo $person['address']; ?></td>
            <td><?php echo $person['image']; ?></td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>

  </tbody>
</table>