<!-- mtliani faili -->
<form class="admin-form" method="post" enctype="multipart/form-data">
    <input type="hidden" name="action" value="update">
    <input type="hidden" name="id" value="<?= $data["shop"]["id"]?>">

    <div class="form-group">
        <label for="">Shop Item Photo</label>
        <input type="file" name ="image"></input>
    </div>
    <div class="form-group">
        <label for="">Shop Item Title</label>
        <input type="text" name="title" value="<?= $data["shop"]["title"]?>">
    </div>
    <div class="form-group">
        <label for="">Shop Item Price</label>
        <input type="text" name="price" value="<?= $data["shop"]["price"]?>">
    </div>
    <div class="form-group">
        <button class="btn">Update</button>
    </div>

</form> 