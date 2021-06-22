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
                                <label class="badge badge-gradient-warning">APPROVED BY USER 2</label>
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
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group row">
                                <a href="{{url('/input-bayar')}}" class="btn btn-gradient-info btn-sm"><i class="mdi mdi-plus"></i> Tambah Pembayaran</a>
                                <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th> No </th>
                                        <th> Col 1 </th>
                                        <th> Col 2 </th>
                                        <th> Col 3 </th>
                                        <th> Col 4 </th>
                                        <th> Action </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td> 1 </td>
                                        <td> record1 </td>
                                        <td> record2 </td>
                                        <td> record3 </td>
                                        <td> record4 </td>
                                        <td> 
                                            <a href="#" class="btn btn-inverse-dark btn-sm"><i class="mdi mdi-eye"></i></a>
                                            <a href="#" class="btn btn-inverse-danger btn-sm"><i class="mdi mdi-close"></i></a>                                        
                                        </td>
                                    </tr>                                    
                                    </tbody>
                                </table>
                                </div>
                            </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group row">
                                <a href="{{url('/input-bayar')}}" class="btn btn-gradient-info btn-sm"><i class="mdi mdi-plus"></i> Tambah Flow</a>
                                <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th> No </th>
                                        <th> Col 1 </th>
                                        <th> Col 2 </th>
                                        <th> Col 3 </th>
                                        <th> Col 4 </th>
                                        <th> Action </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td> 1 </td>
                                        <td> record1 </td>
                                        <td> record2 </td>
                                        <td> record3 </td>
                                        <td> record4 </td>
                                        <td> 
                                            <a href="#" class="btn btn-inverse-dark btn-sm"><i class="mdi mdi-eye"></i></a>                                    
                                        </td>
                                    </tr>                                    
                                    </tbody>
                                </table>
                                </div>
                            </div> 
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <button class="btn btn-light btn-sm">Cancel</button>
                                <button class="btn btn-gradient-primary btn-sm"><i class="mdi mdi-check"></i> Submit</button>
                            </div>
                        </div>
                        </form>
                  </div>
                </div>
              </div>
  </div>
@endsection

          