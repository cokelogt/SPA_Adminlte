<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1>Modal & Alerts</h1>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fa fa-edit"></i>
                            Modal Examples
                        </h3>
                    </div>
                    <div class="card-body">
                        <br>
                        <br>
                        <button type="button" class="btn btn-default" onclick="showModal(1,'modules/modals/example.php','sm')">
                            Launch Small Modal
                        </button>
                        <button type="button" class="btn btn-default" onclick="showModal(1,'modules/modals/example.php','md')">
                            Launch medium Modal
                        </button>
                        <button type="button" class="btn btn-default" onclick="showModal(1,'modules/modals/example.php','lg')">
                            Launch Large Modal
                        </button>
                        <button type="button" class="btn btn-default" onclick="showModal(1,'modules/modals/example.php','xl')">
                            Launch Extra Large Modal
                        </button>
                        <br/>
                    <hr/>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-default" onclick="showModal(1,'modules/modals/example2.php','lg')">
                            Launch modal over modal
                        </button>
                        <br>
                        <br>
                    </div>

                </div>
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fa fa-edit"></i>
                            Toastr Examples <small>built in AdminLTE</small>
                        </h3>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-success toastsDefaultSuccess" onclick="toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')">
                            Launch Success Toast
                        </button>
                        <button type="button" class="btn btn-info toastsDefaultInfo" onclick="toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')">
                            Launch Info Toast
                        </button>
                        <button type="button" class="btn btn-warning toastsDefaultWarning" onclick="toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')">
                            Launch Warning Toast
                        </button>
                        <button type="button" class="btn btn-danger toastsDefaultDanger" onclick="toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')">
                            Launch Danger Toast
                        </button>
                        <div class="text-muted mt-3">
                        </div>
                    </div>
                </div>
                <div class="card card-success card-outline">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fa fa-edit"></i>
                            SweetAlert2 Examples
                        </h3>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-default swalDefaultSuccess" onclick="sweetModal('modules/modals/sweet1.php',400,'exampleInputEmail1','animate__flipInX','animate__flipOutX')">
                            Launch Sweetalert whith html
                        </button>
                        <button type="button" class="btn btn-default swalDefaultSuccess" onclick="sweetModal('modules/modals/sweet2.php',900,'exampleInputEmail1','animate__flipInX','animate__flipOutX')">
                            Launch Sweetalert whith html and modal
                        </button>
                        <div class="text-muted mt-3">
                            For more examples look at <a href="https://sweetalert2.github.io/">https://sweetalert2.github.io/</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>