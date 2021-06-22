@extends('layout.app')

@section('content')
  <div class="content-wrapper">
  <div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <p class="card-description"> Input Pembayaran </p>
            <form class="form-sample">
            <div class="row">
                <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Input 1</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" />
                    </div>
                </div>
                </div>
                <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Input 2</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" />
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
                    <input type="date" class="form-control" placeholder="dd/mm/yyyy" />
                    </div>
                </div>
                </div>
            </div>
            <div class="row">                
                <div class="col-md-6">
                    <button class="btn btn-light btn-sm">Cancel</button>
                    <button type="submit" class="btn btn-gradient-primary btn-sm">Submit</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
  </div>
@endsection

          