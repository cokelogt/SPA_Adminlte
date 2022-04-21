<h3>New Contact</h3>
<hr/>

<form class="form-horizontal" role="form">
    <div class="row">
        <div class="col-md-2"> <small>Code</small>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i> </i></span>
                </div>
                <input class="form-control-sm form-control" readonly="">
            </div>
        </div>
        <div class="col-md-3"> <small>Id*</small>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i> </i></span>
                </div>
                <input type="text" class="form-control form-control-sm" autocomplete="off">
            </div>
        </div>
        <div class="col-md-4"> <small>Condition</small>
            <div id="div_cond">
                <select class="form-control form-control-sm">
                    <option value="0" selected="">--Select--</option>
                    <option value="1">Contition A</option>
                    <option value="2">Contition B</option>
                </select>
            </div>
        </div>
        <div class="col-md-3"> <small>Tribute</small>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i> </i></span>
                </div>
                <input type="text" class="form-control form-control-sm" autocomplete="off">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6"> <small>Complete Name *</small>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i> </i></span>
                </div>
                <input type="text" class="form-control form-control-sm" autocomplete="off">
            </div>
        </div>
        <div class="col-md-6"> <small>Company</small>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i> </i></span>
                </div>
                <input type="text" required="" class="form-control form-control-sm" autocomplete="off">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7"><small>City *</small>
            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                    <span class="input-group-btn"><button type="button" data-target="#modal-inside" class="btn btn-info btn-sm" data-toggle="modal"><i class="fa fa-search"></i></button></span>
                </div>
                <input type="text" class="form-control input-sm">
            </div>
        </div>
        <div class="col-md-3"> <small>State</small>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i> </i></span>
                </div>
                <input type="text" required="" class="form-control form-control-sm">
            </div>
        </div>
        <div class="col-md-2"> <small>CP</small>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i> </i></span>
                </div>
                <input type="text" class="form-control form-control-sm">
                <input type="hidden" class="form-control form-control-sm">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6"><small>Address</small>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i> </i></span>
                </div>
                <input type="text" class="form-control form-control-sm" autocomplete="off">
            </div>
        </div>
        <div class="col-md-3"> <small>Mobile Number *</small>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                </div>
                <input type="number" pattern=".{0}|.{5,10}" class="form-control form-control-sm" autocomplete="off">
            </div>
        </div>
        <div class="col-md-3"> <small>Mobile Number 2</small>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                </div>
                <input type="number" pattern=".{0}|.{5,10}" class="form-control form-control-sm" autocomplete="off">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5"> <small>Web</small>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-globe"></i></span>
                </div>
                <input type="text" class="form-control form-control-sm">
            </div>
        </div>
        <div class="col-md-5"> <small>e-mail</small>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control form-control-sm" autocomplete="off">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3"> <small>Categories *</small>
            <select class="form-control form-control-sm">
            <option value="0" selected="">--Select--</option>
            <option value="1">Categorie A</option>
            <option value="2">Categorie B</option>
            </select>
        </div>
        <div class="col-md-3"> <small>Status *</small>
            <select class="form-control form-control-sm">
            <option value="0">--Select--</option>
            <option value="1">Active</option>
            <option value="2">Inactive</option>
            </select>
        </div>
        <div class="col-md-3"> <small>Discount</small>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-percent"></i></span>
                </div>
                <input type="text" class="form-control form-control-sm" autocomplete="off">
            </div>
        </div>
    </div>
    <div> <small>Notes</small>
        <textarea class="form-control"></textarea>
    </div>
</form>
<hr/>
<div class="col-lg-12">
    <button class="btn btn-success btn-sm pull-right" onclick="toastr.success('Contact registered successfully');Swal.close()">Submit</button>
</div>
<div id="modal-inside" class="modal fade" tabindex="-1" role="dialog" style="margin-top: 25px">
    <div class="modal-dialog" id="class_modal2" role="document">
        <div class="modal-content">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Default Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>One fine body…</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close">
                        Close Modal
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>