<main class="main-content bgc-grey-100">
    <div id="mainContent">
      <div class="row gap-20 masonry pos-r">
        <div class="masonry-sizer col-md-6"></div>
        <div class="masonry-item col-md-6">
          <div class="bgc-white p-20 bd">
            <h6 class="c-grey-900">about</h6>
            <div class="mT-30">
            <?php
$result = $db_handle->runQuery("select * from aboutus where id='".$_GET['id']."'");
foreach($result as $row) { ?>


<form class="cmxform form-horizontal style-form" id="signupForm" action="aboutussave.php"
                enctype="multipart/form-data" 
                method="post">
                <input class="form-control " id="heading" name="idd"  type="hidden"  value="<?php echo $row['id'];?>" required />
              <div class="form-group"><label for="exampleInputPassword1">Images</label><input type="file" name="images"
               
                    class="form-control" id="exampleInputPassword1" placeholder="location"></div>
              <img src="<?php echo $row['images'];?>" alt="img" style="width:80px; height:80px;">
                <div class="form-group"><label for="exampleInputEmail1">Heading</label><input type="text"name="heading" value="<?php echo $row['heading'];?>" required 
                    class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter text"> </div>
                <div class="form-group"><label for="exampleInputPassword1">Description</label><textarea name="description"  required 
                    class="form-control" id="exampleInputPassword1" placeholder="description"><?php echo $row['description'];?></textarea></div>
                    
                      <button type="submit" class="btn btn-primary">Submit</button>

 
                    </form>
                    <?php }
                    ?>
            </div>
          </div>
          
        </div>
    </main>