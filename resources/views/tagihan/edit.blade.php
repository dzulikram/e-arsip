@extends('layout.app')

@section('content')
  <div class="content-wrapper">
  <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <p class="card-description"> Edit Tagihan </p>
                        <form class="form-sample">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="badge badge-gradient-danger">REJECTED</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Input 1</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" value="Record1"/>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Input 2</label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" value="Record2"/>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Input 3</label>
                                <div class="col-sm-9">
                                <select class="form-control">
                                    <option>Select 1</option>
                                    <option>Select 2</option>
                                </select>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Input 4</label>
                                <div class="col-sm-9">
                                <input type="date" class="form-control" placeholder="dd/mm/yyyy"/>
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
                                    <button class="file-upload-browse btn btn-gradient-primary btn-rounded btn-icon" type="button"><i class="mdi mdi-upload"></i></button>
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
                                <button class="btn btn-gradient-primary btn-sm">Submit</button>
                            </div>
                        </div>
                        </form>
                  </div>
                </div>
              </div>
  </div>
@endsection

          