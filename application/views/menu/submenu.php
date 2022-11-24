<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"><i class="fas fa-fw fa-folder-open"></i> <?= $title; ?></h1>

    <div class="row">
        <div class="col-lg">
            <!-- pesan eror -->
            <?php if (validation_errors()) : ?>
                <div class="alert alert-success" role="alert">
                    <?php validation_errors(); ?>
                </div>
            <?php endif; ?>
            <?= $this->session->flashdata('message'); ?>
            <!-- akhir pesan eror -->

            <!-- //tombol tambah -->
            <a href="" class="btn btn-dark mb-3" class="btn btn-dark" data-toggle="modal" data-target="#logout">
                <i class="fas fa-fw fa-folder-plus"></i> Add New Submenu</a>
            <!-- tabel -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Menu</th>
                        <th scope="col">url</th>
                        <th scope="col">icon</th>
                        <th scope="col">Active</th>
                        <th scope="col">Action</th>


                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($submenu as $sm) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $sm['title']; ?></td>
                            <td><?= $sm['menu']; ?></td>
                            <td><?= $sm['url']; ?></td>
                            <td><?= $sm['icon']; ?></td>
                            <td><?= $sm['is_active']; ?></td>
                            <td>
                                <button href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalsubedit<?= $sm['id']; ?>">
                                    <i class="fas fa-fw fa-pen"></i> Edit</button>
                                <button onclick="hapusSubmenu('<?= base_url('menu/hapussubmenu/') . $sm['id']; ?>')" class="btn btn-dark btn-sm">
                                    <i class="fas fa-fw fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- Akhir tabel -->

        </div>

    </div>

    <!-- misal eroor tinggal aktifkan divnya-->
    <!-- </div> -->
</div>

<!-- MODAL -->

<div class="modal fade" id="logout" tabindex="-1" aria-labellebdy="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Add New Submenu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('menu/submenu'); ?>" method="post">
                <div class="modal-body">
                    <div class="form group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url">
                    </div>
                    <div class="form group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
                    </div>
                    <div class="form-group">
                        <div class="form-check">

                            <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" aria-label="Checkbox fot following text input" checked>
                            <label for="is_active" class="form_check_label">Aktif</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-fw fa-exclamation"></i>Close</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-fw fa-check"></i>Add</button>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- modal edit -->

<?php foreach ($submenu as $sm) : ?>

    <div class="modal fade" id="exampleModalsubedit<?= $sm['id']; ?>" tabindex="-1" aria-labellebdy="exampleModalsubeditLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalsubeditLabel">Edit submenu </h5>

                    <span aria-hidden="true">&times;</span>
                </div>
                <form action="<?= base_url('menu/submenuedit'); ?>" method="post">
                    <div class="modal-body">
                        <div class="form group">
                            <input type="text" value="<?= $sm['title'] ?>" class="form-control" id="title" name="title" placeholder="Submenu title">
                        </div>
                        <div class="form group">
                            <input type="hidden" class="form-control" id="id" name="id" readonly value="<?= $sm['id'] ?>">


                        </div>
                        <div class="form-group">    
                            <select name="menu_id" id="menu_id" class="form-control">
                                <option value="<?= $sm['menu_id']; ?>"><?= $sm['menu']; ?></option>
                                <?php foreach ($menu as $m) : ?>
                                    <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form group">
                            <input type="text" value="<?= $sm['url'] ?>" class="form-control" id="url" name="url" placeholder="Submenu url">
                        </div>
                        <div class="form group">
                            <input type="text" value="<?= $sm['icon'] ?>" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
                        </div>
                        <div class="form-group">
                            <div class="form-check">

                                <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" aria-label="Checkbox fot following text input" checked>
                                <label for="is_active" class="form_check_label">Aktif</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-fw fa-exclamation"></i>Close</button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-fw fa-pen"></i>Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php endforeach; ?>