<h1>Flower CRUD</h1>
<hr>
<div class="d-flex justify-content-end">
    <a href="<?php echo site_url('/addflower'); ?>" class="btn btn-primary"> Add Flower </a>
</div>
<hr>

<table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Detail</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if($persons) : ?>
        <?php foreach($persons as $person) : ?>
            <tr>
            <td><?php echo $person['id']; ?></td>
            <td><?php echo $person['name']; ?></td>
            <td><?php echo $person['detail']; ?></td>
            <td><?php echo $person['image']; ?></td>
            <td>
            <a href="<?php echo site_url('/editflower/'.$person['id']); ?>" 
            class="btn btn-warning"> Edit </a>
            <a href="<?php echo site_url('/deleteflower/'.$person['id']); ?>" 
            onclick="return confirm('ยืนยันการลบข้อมูล !')" class="btn btn-danger"> Delete </a>
            </td>
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>

  </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.js"></script>


<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>


