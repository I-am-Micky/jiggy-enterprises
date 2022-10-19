
<style type="text/css">
	.myowncolor{
		background-color: rgb(227, 87, 46);
		color: white;
	}
</style>

	

		<div class="col mt-2"  >

		
			
			<form class="" method="post" action="" enctype="multipart/form-data">
				<h2>Add Products</h2>
						<?php if (isset($_REQUEST['m'])){?>


        <div class="alert alert-success mt-3">
          <?php echo $_REQUEST['m'];?>
        </div>

        <?php

        }?>
					 <?php 
            if (!empty($errors)){
                echo "<ul class='alert alert-danger'>";
                foreach($errors as $key => $value){
                  echo "<li>$value</li>";
                }
                echo "</ul>";
            }
          ?>
				 <div class="control-group form-group">
            <div class="controls">
				<label class="form-label">
					Name :
				</label>
				<input type="text" name="name" class="form-control" id="prodname">
			</div>
		</div>


		 <div class="control-group form-group">
            <div class="controls">
				<label class="form-label">
					Price:
				</label>
				<input type="text" name="price" class="form-control" >
			</div>
		</div>

			
		 <div class="control-group form-group">
            <div class="controls">
				<label class="form-label">Select Category</label>
				<select name="category" class="form-select">
					<option>Choose Category name</option>

					<?php 

					include_once "jiggy/admin.php";

					//create object 
					$obj = new Admin();

					//make reference 
					$cat = $obj->getCategory();

					foreach ($cat as $key => $category){
                      $cat_id = $category['CAT_ID'];
                      $cat_name = $category['CATEGORY_NAME'];

                      echo "<option value='$cat_id'>$cat_name</option>";
                    }

					?>


				</select>
			</div>
		</div>

			 <div class="control-group form-group">
            <div class="controls">
				<label class="form-label">Select Brand</label>
				<select name="brand" class="form-select">
					<option>Choose Brand</option>

					<?php 

					include_once "jiggy/admin.php";

					//create object 
					$obj = new Admin();

					//make reference 
					$cat = $obj->getBrand();

					foreach ($cat as $key => $brand){
                      $brandid = $brand['BRAND_ID'];
                      $brandname = $brand['BRANDNAME'];

                      echo "<option value='$brandid'>$brandname</option>";
                    }

					?>


				</select>
			</div>
		</div>



				 <div class="control-group form-group">
            <div class="controls">
					<label class="form-label">Description (short):</label>
				<textarea rows="5" cols="50" name='description' class="form-control" id="description"  maxlength="300" style="resize:none"></textarea>
			</div>

			   <?php 
                  if(!empty($errors['description'])){
                    echo "<div class='text-danger'>".$errors['description']."</div>";
                  }
              ?>

		</div>




          <div class="control-group form-group">
            <div class="controls">
              <label>Picture:</label>

              <a href="https://www.remove.bg/" class="">Remove Background</a><br>
              <a type="button"><b>?</b></a>
              <div id="con"></div>

              <input type="file" class="form-control mt-2" id="emblem" name='myfile'>
              
            </div>
          </div>



        <input type="submit" class="btn myowncolor mt-2" id="btnaddproduct" name="btnaddproduct" value="Add Product" />

			</form>

		</div>

		<script type="text/javascript" language="javascript">
			function ?()
		</script>
