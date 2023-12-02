<div class="title_left">
    <h3>Quản lý bình luận</h3>
</div>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_content">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Người gửi</th>
                            <th>Sản phẩm</th>
                            <th>Nội dung</th>
                            <th>Ngày gửi</th>
                            <th>Quản lý</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            if(isset($data['list_comment'])){
                                foreach($data['list_comment'] as $key => $comment){ ?>
                                <tr>
                                    <th scope="row"><?php echo ($key+1) ?></th>
                                    <td><?php echo $comment->user_name ?></td>
                                    <td><?php echo $comment->name ?></td>
                                    <td><?php echo $comment->content ?></td>
                                    <td><?php echo $comment->created_at ?></td>
                                    <td>
                                        <!-- Các nút quản lý bình luận, ví dụ: -->
                                        <button class="btn btn-sm btn-danger">Xóa</button>
                                    </td>
                                </tr>
                        <?php  }  } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
