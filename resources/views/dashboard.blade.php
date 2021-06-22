@extends('layout.app')

@section('content')
  <div class="content-wrapper">
    <div class="row">
      <div class="col-3 grid-margin">   
        <button class="btn btn-gradient-info btn-lg btn-icon-text">
          <i class="mdi mdi-trending-up btn-icon-prepend mdi-36px"></i>
          <span class="d-inline-block text-left">
            <small class="font-weight-light d-block">Total Dok</small> 1237</span>
        </button>     
      </div>
      <div class="col-3 grid-margin">   
        <button class="btn btn-gradient-warning btn-lg btn-icon-text">
          <i class="mdi mdi-camera-timer btn-icon-prepend mdi-36px"></i>
          <span class="d-inline-block text-left">
            <small class="font-weight-light d-block">On Progress</small> 593 </span>
        </button>     
      </div>
      <div class="col-3 grid-margin">   
        <button class="btn btn-gradient-success btn-lg btn-icon-text">
          <i class="mdi mdi-checkbox-marked-circle-outline btn-icon-prepend mdi-36px"></i>
          <span class="d-inline-block text-left">
            <small class="font-weight-light d-block">Approved</small> 100</span>
        </button>     
      </div>
      <div class="col-3 grid-margin">   
        <button class="btn btn-gradient-danger btn-lg btn-icon-text">
          <i class="mdi mdi-close-circle-outline btn-icon-prepend mdi-36px"></i>
          <span class="d-inline-block text-left">
            <small class="font-weight-light d-block">Rejected</small> 12</span>
        </button>     
      </div>
    </div>          
    <div class="row">            
      <div class="col-12 grid-margin">
        <div class="card">          
          <div class="card-body">
          <span class="d-flex align-items-center purchase-popup">
            <form class="d-flex align-items-center h-100" action="#">
              <div class="input-group">              
                <input type="text" class="form-control bg-transparent border-0" placeholder="Search dokumen">
                <button type="button" class="btn btn-gradient-light btn-sm"><i class="mdi mdi-magnify"></i></button>
              </div>
            </form>
          </span>
            <h4 class="card-title">Daftar Verifikasi</h4>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th> No </th>
                    <th> No Dok Beban </th>
                    <th> Status </th>
                    <th> Progress </th>
                    <th> Last Update </th>
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1
                    </td>
                    <td> 7100001603 </td>
                    <td>
                      <label class="badge badge-gradient-info">SUBMITTED</label>
                    </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td> 09-Jun-2021 </td>
                    <td> <a href="{{url('/show')}}" class="btn btn-inverse-dark btn-sm"><i class="mdi mdi-eye"></i></a> </td>
                  </tr>
                  <tr>
                    <td>
                      2
                    </td>
                    <td> 7100001604 </td>
                    <td>
                      <label class="badge badge-gradient-warning">APPROVED BY USER 2</label>
                    </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td> 14-Jun-2021 </td>
                    <td> <a href="{{url('/show2')}}" class="btn btn-inverse-dark btn-sm"><i class="mdi mdi-eye"></i></a> </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td> 7100001605 </td>
                    <td>
                      <label class="badge badge-gradient-danger">REJECTED</label>
                    </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td> 17-Jun-2021 </td>
                    <td> <a href="{{url('/edit')}}" class="btn btn-inverse-success btn-sm"><i class="mdi mdi-pencil"></i></a> </td>
                  </tr>
                  <tr>
                    <td>
                      4
                    </td>
                    <td> 7100001606 </td>
                    <td>
                      <label class="badge badge-gradient-success">DONE</label>
                    </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td> 17-Jun-2021 </td>
                    <td> <a href="#" class="btn btn-inverse-dark btn-sm"><i class="mdi mdi-eye"></i></a> </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

          