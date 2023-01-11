<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-warning"><i class="fa fa-fw fa-globe"></i> <strong><span><?php echo $row['fname']; ?></span> Admin Panel</strong>
            <!-- <a href="/login_project/admin/manage-user.php?id=<?php //echo $list['id'] 
                                                                    ?>"  class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-plus-circle"></i> Add Users</a> -->
        </div>
    </div>
    <!-- <div class="card border-white">
            <div class="card-header bg-transparent">
                <a href="/login_project/public/export.php"  class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fas fa-database"></i> Export</a>
            </div>
        </div> -->
    <hr>
    <div>
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="bg-info text-white">
                    <th>Sr.</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Gender</th>
                    <th>date_added</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php if (isset($result['0'])) {
                    // print_r($result['0']);
                    $sr_id = 1;
                    foreach ($result as $list) { ?>
                        <tr class="text-center">
                            <td><?php echo $list['id'] ?></td>
                            <td><?php echo $list['fname'] ?></td>
                            <td><?php echo $list['email'] ?></td>
                            <td><?php echo $list['phone'] ?></td>
                            <td><?php echo $list['gender'] ?></td>
                            <td><?php echo $list['date_added'] ?></td>

                            <!-- Modal -->
                            <!-- <td><a href="/login_project/images/<?php //echo $list['id'] 
                                                                    ?>" class="fa-fw text-primary images-edit" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?php //echo $list['id'] 
                                                                                                                                                                                                        ?>" data-path= "<?php //echo $list['path'] 
                                                                                                                                                                                                                                                ?>">preview</a></td> -->
                            <!-- -->

                            <td align="center">
                                <a href="/mvc_loginproject/index.php?function=manageUser&id=<?php echo $list['id'] ?>" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a> |
                                <a href="?function=user&type=delete&id=<?php echo $list['id'] ?>" class="text-danger"><i class="fa fa-fw fa-trash"></i> Delete</a>
                            </td>
                        </tr>

                    <?php
                        // $sr_id++;
                    } ?>

                    <!-- Modal -->

                    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Profile Picture</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                       
                                        <img id="img-preview" src="/login_project/images/<?php //echo $list['id'] 
                                                                                            ?>/<?php //echo $list['path'] 
                                                                                                                        ?>" data-mdb-img="/login_project/images/<?php echo $list['id'] ?>/<?php echo $list['path'] ?>" alt="" class="w-100">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    <!--  -->

                <?php } else { ?>
                    <tr>
                        <td colspan="10" align="center">No Records Found!</td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>