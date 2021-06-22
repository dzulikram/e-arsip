@extends('layout.app')

@section('content')
  <div class="content-wrapper">
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
            <h4 class="card-title">Daftar Approval</h4>
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
                        <label class="badge badge-gradient-info">SUBMITTED</label>
                    </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td> 14-Jun-2021 </td>
                    <td> <a href="#" class="btn btn-inverse-dark btn-sm"><i class="mdi mdi-eye"></i></a> </td>
                  </tr>
                  <tr>
                    <td>
                      3
                    </td>
                    <td> 7100001605 </td>
                    <td>
                        <label class="badge badge-gradient-info">SUBMITTED</label>
                    </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td> 17-Jun-2021 </td>
                    <td> <a href="#" class="btn btn-inverse-dark btn-sm"><i class="mdi mdi-eye"></i></a> </td>
                  </tr>
                  <tr>
                    <td>
                      4
                    </td>
                    <td> 7100001606 </td>
                    <td>
                        <label class="badge badge-gradient-info">SUBMITTED</label>
                    </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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

          