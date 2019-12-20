<form enctype="multipart/form-data" method="post" action="<?php echo base_url()?>index.php/Products/store">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">P_Name</label>
                <div class="col-md-9">
                    <input type="text" name="p_name" id="p_name" class="form-control">
                </div>
            </div>
        </div>
         <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">P_code</label>
                <div class="col-md-9">
                    <input type="text" name="p_code" id="p_code" class="form-control">
                </div>
            </div>
        </div>
         <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">P_price</label>
                <div class="col-md-9">
                    <input type="text" name="p_price" id="p_price"   class="form-control">
                </div>
            </div>
        </div>
         <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">P_category</label>
                <div class="col-md-9">
                    <select name="p_category"  class="form-control" id="exampleFormControlSelect1">
      <option>Pen</option>
      <option>book</option>
      <option>Mouse</option>
      <option>4</option>
      <option>5</option>
    </select>
<!--                    <input type="text" name="p_category" class="form-control">-->
                </div>
            </div>
        </div>
<!--        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">P_category</label>
                <div class="col-md-9">
                    <input type="text" name="title" class="form-control">
                </div>
            </div>
        </div>-->
        
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Related Products</label>
                
                <div class="col-md-9">
                    <textarea id="Related_product" name="Related_product" class="form-control"
                              data-role="tagsinput"></textarea>
                </div>
            </div>
        </div>
 <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Products image</label>
                <div class="col-md-9">
                <input name="p_img" type="file" id="fileToUpload">
                
            </div>
        </div>

       
    </div>
 <div class="col-md-8 col-md-offset-2 pull-right">
            <input type="submit" name="Save" class="btn" id="butsave">
        </div>
    </div>
</form>
<script>
    $('#Related_product').tagsinput({
confirmKeys: [13, 44],
maxTags: 20
});
    
</script> 
<!--<script>
$(document).ready(function() {
	$('#butsave').on('click', function() {
		$("#butsave").attr("disabled", "disabled");
		var p_name = $('#p_name').val();
		var p_code = $('#p_code').val();
	
		
		if(p_name!="" && p_code!="" ){
			$.ajax({
				url: "<?php echo base_url()?>index.php/Products/store",
				type: "POST",
				data: {
					p_name: p_name,
					p_code: p_code,
									
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#butsave").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html('Data added successfully !'); 						
					}
					else if(dataResult.statusCode==201){
						$("#error").show();
						$('#error').html('p_code already exists !');
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});
</script>-->
</form>
