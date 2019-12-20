<form enctype="multipart/form-data" method="post" action="<?php echo base_url('Products/update/' . $product->p_code); ?>">

    <!--        <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                    <label class="col-md-3">Title</label>
                    <div class="col-md-9">
                        <input type="text" name="title" class="form-control" value="<?php echo $product->title; ?>">
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                    <label class="col-md-3">Description</label>
                    <div class="col-md-9">
                        <textarea name="description" class="form-control"><?php echo $product->description; ?></textarea>
                    </div>
                </div>
            </div>-->
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">P_Name</label>
                <div class="col-md-9">
                    <input type="text" name="p_name" id="p_name"  class="form-control" value="<?php echo $product->p_name; ?>">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">P_code</label>
                <div class="col-md-9">
                    <input type="text" name="p_code" value="<?php echo $product->p_code; ?>" id="p_code" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">P_price</label>
                <div class="col-md-9">
                    <input type="text" name="p_price" id="p_price" value="<?php echo $product->p_price; ?>"  class="form-control">
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">P_category</label>
                <div class="col-md-9">
                    <select name="p_category" value="<?php echo $product->p_category; ?>" class="form-control" id="exampleFormControlSelect1">
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
                    <textarea id="Related_product"  name="Related_product" class="form-control" 
                              data-role="tagsinput"><?php echo $product->Related_product; ?></textarea>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2">
            <div class="form-group">
                <label class="col-md-3">Products image</label>
                <div class="col-md-9">
                    <input name="p_img" type="file"  id="fileToUpload">
                    <input  name="product_old_image" value="<?php echo $product->p_img; ?>"type="hidden" name="fileToUpload" id="fileToUpload">

                    <img width="100" src="<?php echo base_url(); ?>uploads/<?php echo $product->p_img; ?>"
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2 pull-right">
                <input type="submit" name="Save" class="btn">
            </div>
        </div>
    </div>
</div>
</form>
<script>
    $('#Related_product').tagsinput({
        confirmKeys: [13, 44],
        maxTags: 20
    });

</script> 
