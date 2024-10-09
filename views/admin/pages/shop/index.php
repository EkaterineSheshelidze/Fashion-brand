<div>
    <a href="<?= HOST . 'admin/?page=shop&action=create'?>" class="btn">Create New Shop Item</a>
</div>


<div class="table-container">
    <table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Image</th>
        <th>Price</th>
        <th>Actions</th>
    </tr>

    
    <?php foreach ($data["shop"] as $key => $value) { ?>
        <tr>
            <td><?=$value["id"]?></td>
            <td><?=$value["title"]?></td>
            <td><?=$value["image"]?></td>
            <td><?=$value["price"]?></td>

            <td>
                <!--  -->
                <a class="action-btn edit" href="<?= HOST . 'admin/?page=shop&action=edit&id='.$value['id']?>">Edit</a>
                <a class="action-btn delete deleteShop" data-id="<?= $value['id'] ?>">Delete</a>

            </td>
        </tr>
   
    <?php }?>
        
   
    
    </table>
</div>