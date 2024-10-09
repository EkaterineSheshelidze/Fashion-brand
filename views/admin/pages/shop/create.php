<form class="admin-form" method="post" enctype="multipart/form-data">
    <input type="hidden" name="action" value="store">

    <div class="form-group">
        <label for="">Shop Item Photo</label>
        <input type="file" name ="image"></input>
    </div>
    <div class="form-group">
        <label for="">Shop Item Title</label>
        <input type="text" name="title">
    </div>
    <div class="form-group">
        <label for="">Shop Item Price</label>
        <input type="text" name="price"></input>
    </div>
    <div class="form-group">
        <button class="btn">Insert</button>
    </div>

</form> 