
<div class="container" id="news_table" style="display:none; width:1000px;">

  <table class="table table-bordered border-1">
  <h1 class="d-flex justify-content-center align-items-center mt-5 fw-bold">News details</h1>
    <thead  class="table-dark">
      <tr>
        <th class="w-75">News Header</th>
        
        <th class="w-25">Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    require_once('conn.php');
    $query="SELECT * FROM news";
    $result = mysqli_query($conn, $query);
    $news_array = [];
    while($row = mysqli_fetch_assoc($result)){
    $news_array[]=$row;
    
    }
    
    
    foreach ($news_array as $news): ?>
<tr>
    
    <td><a href=""> <?php echo $news['news_header']; ?></a></td>
    
    <td class="d-flex justify-content-center align-items-center ">
    <a href="news_edit.php?news_id=<?php echo $news['news_id']; ?>" class="btn btn-success">Edit</a>

        <button class="btn btn-danger ml-2" style="margin-left:10px;">Delete</button>
    </td>
</tr>
<?php endforeach; ?>
      
       
    </tbody>
    <tfoot></tfoot>
  </table>
</div>