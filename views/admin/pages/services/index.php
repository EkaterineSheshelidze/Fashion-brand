
<div>
    <a href="<?= HOST . 'admin/?page=services&action=create'?>" class="btn">Create New Service</a>
</div>

<div class="table-container">
    <table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th class='text'>Text</th>
        <th>Actions</th>
    </tr>

    
    <?php foreach ($data["services"] as $key => $value) { ?>
        <tr>
            <td><?=$value["id"]?></td>
            <td><?=$value["name"]?></td>
            <td class='text'><?=$value["text"]?></td>
            <td>
                <a class="action-btn edit" href="<?= HOST . 'admin/?page=services&action=edit&id='.$value['id']?>" >Edit</a>
                
                <a class="action-btn delete deleteServices" data-id="<?= $value['id'] ?>">Delete</a>
                
                
                
                <!-- <a class="action-btn delete">delete</a>
                <div>
                    <form method="post">
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="id" value="<?=$value["id"]?>">
                    </form>
                </div> -->

            </td>
        </tr>
   
    <?php }?>
        
   
    
    </table>
</div>