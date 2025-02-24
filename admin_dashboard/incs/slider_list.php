
<div class="container" id="slider_table" style="display:none; width:1000px;">
  <table class="table table-bordered border-1">
    <h1 class="d-flex justify-content-center align-items-center mt-5 fw-bold">Slider details</h1>
    <thead class="table-dark mt-3 ">
      <tr >
        <th class="w-50 "> Slider title</th>
        <th class="w-25">Slider image</th>
        <th class="w-25 ">Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    require_once('conn.php');
    if(isset($_GET['slider_delete'])){
       $delete_slider=$_GET['slider_delete'];
       
       $query="DELETE FROM web_slider WHERE slider_id='$delete_slider'";
       $result=mysqli_query($conn,$query);
    }
    $query="SELECT * FROM web_slider";
    $result = mysqli_query($conn, $query);
    $sliders = array();
    while($row = mysqli_fetch_assoc($result)){
      $sliders[] = $row;
    }
    
    
    foreach ($sliders as $slider): ?>
<tr>
    <td><?php echo $slider['slider_title']; ?></td>
    <td><?php echo $slider['slider_path']; ?></td>
    <td class="d-flex justify-content-center align-items-center ">
        <a href="slider_edit.php?slider_id=<?php echo $slider['slider_id']?>" class="btn btn-success">Edit</a>
        <a href="?slider_delete=<?php echo $slider['slider_id']?>" class="btn btn-danger ml-2" style="margin-left:10px;">Delete</a>
    </td>
</tr>
<?php endforeach; ?>

     
    </tbody>
    <tfoot></tfoot>
  </table>
</div>
