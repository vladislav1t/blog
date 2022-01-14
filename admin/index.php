<?php
include_once '../engine/Crud.php';
$blogs = new Crud();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>bs4 crud users - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script></head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">

    <div class="row flex-lg-nowrap">
        <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
            <div class="card p-3">
                <div class="e-navlist e-navlist--active-bg">
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link px-2 active" href="#"><i
                                        class="fa fa-fw fa-bar-chart mr-1"></i><span>Overview</span></a></li>
                        <li class="nav-item"><a class="nav-link px-2"
                                                href="https://www.bootdey.com/snippets/view/bs4-crud-users"
                                                target="__blank"><i
                                        class="fa fa-fw fa-th mr-1"></i><span>CRUD</span></a></li>
                        <li class="nav-item"><a class="nav-link px-2"
                                                href="https://www.bootdey.com/snippets/view/bs4-edit-profile-page"
                                                target="__blank"><i
                                        class="fa fa-fw fa-cog mr-1"></i><span>Settings</span></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="e-tabs mb-3 px-3">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" href="#">Users</a></li>
                </ul>
            </div>

            <div class="row flex-lg-nowrap">
                <div class="col mb-3">
                    <div class="e-panel card">
                        <div class="card-body">
                            <div class="card-title">
                                <h6 class="mr-2"><span>Users</span><small class="px-1">Be a wise leader</small></h6>
                            </div>
                            <div class="e-table">
                                <div class="table-responsive table-lg mt-3">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th class="align-top">
                                                <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0">
                                                    <input type="checkbox" class="custom-control-input" id="all-items">
                                                    <label class="custom-control-label" for="all-items"></label>
                                                </div>
                                            </th>
                                            <th>Photo</th>
                                            <th class="max-width">Name</th>
                                            <th class="sortable">Date</th>
                                            <th></th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $blogsAll = $blogs->all();
                                        if ($blogsAll):
                                            foreach ($blogsAll as $blog):
                                                ?>
                                                <tr>
                                                    <form>
                                                    <input type="hidden" name="id" value="<?php echo  $blog['id']?>" />
                                                    <input type="hidden" name="name" value="<?php echo  $blog['name']?>" />
                                                    <input type="hidden" name="description" value="<?php echo  $blog['description']?>" />
                                                    <input type="hidden" name="delete" value="" />
                                                    </form>
                                                    <td class="align-middle">
                                                        <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
                                                            <input type="checkbox" class="custom-control-input"
                                                                   id="item-1">
                                                            <label class="custom-control-label" for="item-1"></label>
                                                        </div>
                                                    </td>
                                                    <td class="align-middle text-center">
                                                        <div class="bg-light d-inline-flex justify-content-center align-items-center align-top"
                                                             style="width: 35px; height: 35px; border-radius: 3px;"><i
                                                                    class="fa fa-fw fa-photo" style="opacity: 0.8;"></i>
                                                        </div>
                                                    </td>
                                                    <td class="text-nowrap align-middle name"><?php echo  $blog['name']?></td>
                                                    <td class="text-nowrap align-middle"><span>09 Dec 2017</span></td>
                                                    <td class="text-center align-middle"><i
                                                                class="fa fa-fw text-secondary cursor-pointer fa-toggle-on"></i>
                                                    </td>
                                                    <td class="text-center align-middle">
                                                        <div class="btn-group align-top">
                                                            <button class="btn btn-sm btn-outline-secondary badge edit_button"
                                                                    type="button" data-toggle="modal"
                                                                    data-target="#user-form-modal">Edit
                                                            </button>
                                                            <button class="btn btn-sm btn-outline-secondary badge delete"
                                                                    type="button"><i class="fa fa-trash"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php
                                            endforeach;
                                        endif;
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <ul class="pagination mt-3 mb-0">
                                        <li class="disabled page-item"><a href="#" class="page-link">‹</a></li>
                                        <li class="active page-item"><a href="#" class="page-link">1</a></li>
                                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                                        <li class="page-item"><a href="#" class="page-link">›</a></li>
                                        <li class="page-item"><a href="#" class="page-link">»</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center px-xl-3">
                                <button class="btn btn-success btn-block" type="button" data-toggle="modal"
                                        data-target="#create-user-form-modal">New User
                                </button>
                            </div>
                            <hr class="my-3">
                            <div class="e-navlist e-navlist--active-bold">
                                <ul class="nav">
                                    <li class="nav-item active"><a href=""
                                                                   class="nav-link"><span>All</span>&nbsp;<small>/&nbsp;32</small></a>
                                    </li>
                                    <li class="nav-item"><a href="" class="nav-link"><span>Active</span>&nbsp;<small>/&nbsp;16</small></a>
                                    </li>
                                    <li class="nav-item"><a href="" class="nav-link"><span>Selected</span>&nbsp;<small>/&nbsp;0</small></a>
                                    </li>
                                </ul>
                            </div>
                            <hr class="my-3">
                            <div>
                                <div class="form-group">
                                    <label>Date from - to:</label>
                                    <div>
                                        <input id="dates-range" class="form-control flatpickr-input"
                                               placeholder="01 Dec 17 - 27 Jan 18" type="text" readonly="readonly">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Search by Name:</label>
                                    <div><input class="form-control w-100" type="text" placeholder="Name" value="">
                                    </div>
                                </div>
                            </div>
                            <hr class="my-3">
                            <div class="">
                                <label>Status:</label>
                                <div class="px-2">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="user-status"
                                               id="users-status-disabled">
                                        <label class="custom-control-label" for="users-status-disabled">Disabled</label>
                                    </div>
                                </div>
                                <div class="px-2">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="user-status"
                                               id="users-status-active">
                                        <label class="custom-control-label" for="users-status-active">Active</label>
                                    </div>
                                </div>
                                <div class="px-2">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="user-status"
                                               id="users-status-any" checked="">
                                        <label class="custom-control-label" for="users-status-any">Any</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- User Form Modal -->
            <div class="modal fade" role="dialog" tabindex="-1" id="user-form-modal">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Редактировать статью</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="py-1">
                                <form class="form edit-form" method="post" action="/engine/action.php">
                                    <input type="hidden" name="id" value="">
                                    <input type="hidden" name="update" value="1">
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Название</label>
                                                        <input class="form-control" type="text" name="name"
                                                               placeholder="John Smith" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <div class="form-group">
                                                        <label>Описание</label>
                                                        <textarea class="form-control " name="description" rows="5"
                                                                  placeholder="My Bio"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col d-flex justify-content-end">
                                            <button class="btn btn-primary" type="submit">Сохранить</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" role="dialog" tabindex="-1" id="create-user-form-modal">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Создать статью</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="py-1">
                                <form class="form" novalidate="" action="/engine/action.php" method="post">
                                    <input type="hidden" name="create" value="1">
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label>Название</label>
                                                        <input class="form-control" type="text" name="name"
                                                               placeholder="John Smith" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-3">
                                                    <div class="form-group">
                                                        <label>Описание</label>
                                                        <textarea name="description" class="form-control" rows="5"
                                                                  placeholder="My Bio"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col d-flex justify-content-end">
                                            <button class="btn btn-primary" type="submit">Сохранить</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    body {
        margin-top: 20px;
        background: #f8f8f8
    }
</style>

<script type="text/javascript">
$(document).on('click', '.edit_button', function (){
    $('form.edit-form input[name="id"]').val($(this).closest("tr").find('input[name="id"]').val());
    $('form.edit-form input[name="name"]').val($(this).closest("tr").find('input[name="name"]').val());
    $('form.edit-form textarea[name="description"]').val($(this).closest("tr").find('input[name="description"]').val());
})

$(document).on('click', '.delete', function (){

   if($(this).closest("tr").find('input[name="delete"]').val() != 1) {
       $(this).closest("tr").find('input[name="delete"]').val(1)
   }
        Swal.fire({
            title: 'Вы уверены что хотите уадить эту статью?',
            text: "Статья удаться навсегда!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Да!',
            cancelmButtonText: 'Нет!',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "/engine/action.php",
                    data: $(this).closest("tr").find('form').serialize(),
                    success(response) {
                       alert('asdas');
                    }
                });
                Swal.fire(
                    'Успешно!',
                    'Статья удалена!',
                    'success'
                )
            } else {
                $(this).closest("tr").find('input[name="delete"]').val('');
            }
        })
});

</script>
</body>
</html>