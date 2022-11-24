<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><i class="fas fa-fw fa-user-tie"></i> <?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-7">
            <?= form_error('role', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-dark mb-3" data-toggle="modal" data-target="#newRoleModal">
                <i class="fas fa-fw fa-folder-plus"></i> Add New Role</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($role as $r) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $r['role']; ?></td>
                            <td>
                                <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="btn btn-primary btn-sm">
                                    <i class="fas fa-fw fa-check"></i> Access</a>
                                <a href="" class="btn btn-dark btn-sm" data-toggle="modal" data-target="#exampleModaledit<?= $r['id']; ?>">
                                    <i class="fas fa-fw fa-pen"></i> Edit</a>
                                <button onclick="hapusRole('<?= base_url('admin/hapusrole/') . $r['id']; ?>')" class="btn btn-danger btn-sm Tombol hapus">
                                    <i class="fas fa-fw fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>


        </div>
    </div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/role'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="Role name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-fw fa-exclamation"></i>Close</button>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-fw fa-check"></i>Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal -->
<?php foreach ($role as $r) : ?>
    <div class="modal fade" id="exampleModaledit<?= $r['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newRoleModalLabel">Role Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/editrole'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" value="<?= $r['role']; ?>" id=" role" name="role" placeholder="Role name">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?= $r['id']; ?>" readonly placeholder="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach ?>