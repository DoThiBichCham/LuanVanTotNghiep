<div class="title_left">
    <h3>Danh sách tác giả</h3>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_content">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Image</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address<th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if(isset($data['list_author'])){
                                foreach($data['list_author'] as $key => $author){ ?>
                                <tr>
                                    <th scope="row"><?php echo ($key+1) ?></th>
                                    <td><?php echo $author->full_name ?></td>
                                    <td>
                                        <?php 
                                            if($author->image!=""){ ?>
                                                <img height="50" width="50" style="object-fit:cover" src="./public/uploads/<?php echo $author->image ?>" alt="">
                                            <?php }else{ ?>
                                                <img height="50" width="50" style="object-fit:cover" src="https://i.pinimg.com/280x280_RS/2e/45/66/2e4566fd829bcf9eb11ccdb5f252b02f.jpg" alt="">
                                            <?php }  ?>
                                    </td>
                                    <td><?php echo $author->phone ?></td>
                                    <td>
                                        <?php echo $author->email ?>
                                    </td>
                                    <td>
                                        <?php echo (isset($author->address_detail) && $author->address_detail!="")?$author->address_detail.', ':"" ?>
                                        <?php echo $author->commune.', '.$author->district.', '.$author->conscious.', '.$author->country ?><td>
                                </tr>
                        <?php  }  } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>