@extends('layouts.admin')

@section('content')
<!-- Main content -->

<div class="content-header">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{ __('nt_opciones_de_menu') }}</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">{{ __('nt_inicio') }}</a></li>
            <li class="breadcrumb-item active">{{ __('nt_menu') }}</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">{{ __('nt_cinta_de_opciones') }}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-sm-4">

                  <div class="position-relative p-3 bg-gray" style="height: 180px">
                      <img src=""  class="img-fluid">
                      <div class="ribbon-wrapper ribbon-xl">
                          <div class="ribbon bg-primary text-lg">
                            {{ __('nt_inicio') }}
                          </div>
                        </div>
                    <br />
                    <small></small>
                  </div>

                </div>
                <div class="col-sm-4">
                  <div class="position-relative p-3 bg-gray" style="height: 180px">
                      <div class="ribbon-wrapper ribbon-xl">
                          <div class="ribbon bg-info text-lg">
                            {{ __('nt_quienes_somos') }}
                          </div>
                        </div>
                   <br />
                    <small></small>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="position-relative p-3 bg-gray" style="height: 180px">
                      <div class="ribbon-wrapper ribbon-xl">
                          <div class="ribbon bg-success text-lg">
                            {{ __('nt_servicios') }}
                          </div>
                        </div>
                     <br />
                    <small></small>
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-sm-4">
                  <div class="position-relative p-3 bg-gray" style="height: 180px">
                    <div class="ribbon-wrapper ribbon-lg">
                      <div class="ribbon bg-success text-lg">
                        {{ __('nt_productos') }}
                      </div>
                    </div>
                     <br />  <br />
                    <small></small>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="position-relative p-3 bg-gray" style="height: 180px">
                    <div class="ribbon-wrapper ribbon-xl">
                      <div class="ribbon bg-warning text-lg">
                        {{ __('Proyectos') }}
                      </div>
                    </div>
                     <br />  <br />
                    <small></small>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="position-relative p-3 bg-gray" style="height: 180px">
                    <div class="ribbon-wrapper ribbon-xl">
                      <div class="ribbon bg-danger text-lg">
                        {{ __('Clientes') }}
                      </div>
                    </div>
                    <br /><br />
                    <small></small>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
