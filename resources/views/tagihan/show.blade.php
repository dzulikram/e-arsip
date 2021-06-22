@extends('layout.app')

@section('content')
  <div class="content-wrapper">
  <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            <p class="card-description"> Detail Tagihan </p>
                <form class="form-sample">
                <div class="row">
                    <div class="col-md-6">
                        <label class="badge badge-gradient-info">SUBMITTED</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Input 1</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" value="Record1" disabled/>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Input 2</label>
                        <div class="col-sm-9">
                        <input type="text" class="form-control" value="Record2" disabled/>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Input 3</label>
                        <div class="col-sm-9">
                        <select class="form-control" disabled>
                            <option selected>Select 1</option>
                            <option>Select 2</option>
                        </select>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Input 4</label>
                        <div class="col-sm-9">
                        <input type="date" class="form-control" placeholder="dd/mm/yyyy" disabled/>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Input 5</label>
                            <input type="file" name="img" class="file-upload-default">
                        <div class="col-sm-6">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Pdf">                                
                        </div>
                        <div class="col-sm-3">                                
                            <button class="btn btn-gradient-primary btn-rounded btn-icon" type="button"><i class="mdi mdi-eye"></i></button>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Input 6</label>
                        <div class="col-sm-4">
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked> Select 1 </label>
                        </div>
                        </div>
                        <div class="col-sm-5">
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> Select 2  </label>
                        </div>
                        </div>
                    </div>                            
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-light btn-sm">Cancel</button>
                        <button class="btn btn-gradient-success btn-sm"><i class="mdi mdi-check"></i> Approve</button>
                        <a href="" class="btn btn-gradient-danger btn-sm" data-toggle="modal" data-target="#modalLoginForm"><i class="mdi mdi-close"></i> Reject</a>
                    </div>
                </div>
                </form>
            </div>
        </div>
        </div>
            </div>
            <div class="modal fade" id="modalLoginForm" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header text-center">
                    <h5 class="modal-title w-100 font-weight-bold">Catatan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <textarea id="w3review" name="w3review" rows="5" cols="55"></textarea>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-gradient-danger btn-sm"><i class="mdi mdi-close"></i> Reject</button>
                </div>
                </div>
        </div>
        </div>

@endsection

          