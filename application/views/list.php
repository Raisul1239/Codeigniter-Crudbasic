<?php // echo $head ?>
<div class="row">
    <div class="col-lg-12">           
        <h2>Products CRUD           
            <div class="pull-right">
               <a class="btn btn-primary"  method="post" href="<?php echo base_url()?>index.php/Products/create"> Create New Product</a>
            </div>
        </h2>
     </div>
</div>
<div class="table-responsive">
<table class="table table-bordered">
  <thead>
      <tr>
          <th>P_Name</th>
          <th>P_code</th>
          <th>P_price</th>
          <th>p_category</th>
          <th>Related Product</th>
          <th>Product image</th>
      
      </tr>
  </thead>
  <tbody>
   <?php foreach ($dat as $d) { 
//       print_r($dat);?>   
      
      <tr>
          <td><?php echo $d->p_name ?></td>
          <td><?php echo $d->p_code ?></td>
          <td><?php echo $d->p_price?></td>
          <td><?php echo $d->p_category?></td>
          <td><?php echo $d->Related_product ?></td>
          <td><img width="100" src="<?php echo base_url();?>uploads/<?php echo $d->p_img;?>"</td>          
      <td>
        <form method="DELETE" action="<?php echo base_url('Products/delete/'.$d->p_code)?>">
         <a class="btn btn-info btn-xs" href="<?php echo base_url('Products/edit/'.$d->p_code) ?>"><i class="glyphicon glyphicon-pencil"></i></a>
          <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove"></i></button>
        </form>
      </td>     
      </tr>
      <?php } ?>
  </tbody>
</table>
</div>

