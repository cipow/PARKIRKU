@extends('panelAdmin.masterAdmin')

@section('sidebar')
  @include('panelAdmin.masterKonten.sidebar',['active'=>$active])
@endsection

@section('contentNavbar')
  @include('panelAdmin.masterKonten.contentNavbar',['titleTop'=>$titleTop])
@endsection

@section('layanan')
<div class="page-header">
  <h1>
    Kendaraan Masuk
    <small>
      <i class="ace-icon fa fa-angle-double-right"></i>
      Pengisian Form
    </small>
  </h1>
</div>

<div class="row">
  <div class="col-xs-12">
    <!-- PAGE CONTENT BEGINS -->

    <div class="tabbable">
      <ul class="nav nav-tabs" id="myTab">
        <li class="active">
          <a data-toggle="tab" href="#G">
            Gedung G
          </a>
        </li>

        <li>
          <a data-toggle="tab" href="#H">
            Gedung H
          </a>
        </li>

        <li>
          <a data-toggle="tab" href="#E">
            Gedung E
          </a>
        </li>

        <li>
          <a data-toggle="tab" href="#D">
            Gedung D
          </a>
        </li>

        <li>
          <a data-toggle="tab" href="#C">
            Gedung C
          </a>
        </li>

        <li>
          <a data-toggle="tab" href="#LB">
            Lapangan Basket
          </a>
        </li>

      </ul>

      <div class="tab-content">
        <div id="G" class="tab-pane fade in active">
          <form method="POST" action="{{ route('adminKendaraanTambah') }}" class="form-horizontal" role="form">
            {{ csrf_field() }}

            <div class="form-group">
              <div class="col-sm-3">
              </div>
              <div class="col-sm-9">
                <label><h3>Gedung G</h3></label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right"> Nomor PLAT </label>

              <div class="col-sm-9">
                <input class="col-xs-10 col-sm-5" name="noPlat" type="text" placeholder="H 1234 XYZ" autofocus />
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right"> Tipe Kendaraan </label>

              <div class="col-sm-9">
                <select class="col-xs-10 col-sm-5" name="tipe">
                  <option value="MOTOR">MOTOR</option>
                  <option value="MOBIL">MOBIL</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right">  </label>
              <input type="hidden" name="gedung" value="G">
              <div class="col-sm-9">
                <button class="btn btn-info" type="submit">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Submit
                </button>
              </div>
            </div>
          </form>
        </div>

        <div id="H" class="tab-pane fade">
          <form method="POST" action="{{ route('adminKendaraanTambah') }}" class="form-horizontal" role="form">
            {{ csrf_field() }}

            <div class="form-group">
              <div class="col-sm-3">
              </div>
              <div class="col-sm-9">
                <label><h3>Gedung H</h3></label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right"> Nomor PLAT </label>

              <div class="col-sm-9">
                <input class="col-xs-10 col-sm-5" name="noPlat" type="text" placeholder="H 1234 XYZ" autofocus />
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right"> Tipe Kendaraan </label>

              <div class="col-sm-9">
                <select class="col-xs-10 col-sm-5" name="tipe">
                  <option value="MOTOR">MOTOR</option>
                  <option value="MOBIL">MOBIL</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right">  </label>
              <input type="hidden" name="gedung" value="H">
              <div class="col-sm-9">
                <button class="btn btn-info" type="submit">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Submit
                </button>
              </div>
            </div>
          </form>
        </div>

        <div id="E" class="tab-pane fade">
          <form method="POST" action="{{ route('adminKendaraanTambah') }}" class="form-horizontal" role="form">
            {{ csrf_field() }}

            <div class="form-group">
              <div class="col-sm-3">
              </div>
              <div class="col-sm-9">
                <label><h3>Gedung E</h3></label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right"> Nomor PLAT </label>

              <div class="col-sm-9">
                <input class="col-xs-10 col-sm-5" name="noPlat" type="text" placeholder="H 1234 XYZ" autofocus />
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right"> Tipe Kendaraan </label>

              <div class="col-sm-9">
                <select class="col-xs-10 col-sm-5" name="tipe">
                  <option value="MOTOR">MOTOR</option>
                  <option value="MOBIL">MOBIL</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right">  </label>
              <input type="hidden" name="gedung" value="E">
              <div class="col-sm-9">
                <button class="btn btn-info" type="submit">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Submit
                </button>
              </div>
            </div>
          </form>
        </div>

        <div id="D" class="tab-pane fade">
          <form method="POST" action="{{ route('adminKendaraanTambah') }}" class="form-horizontal" role="form">
            {{ csrf_field() }}

            <div class="form-group">
              <div class="col-sm-3">
              </div>
              <div class="col-sm-9">
                <label><h3>Gedung D</h3></label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right"> Nomor PLAT </label>

              <div class="col-sm-9">
                <input class="col-xs-10 col-sm-5" name="noPlat" type="text" placeholder="H 1234 XYZ" autofocus />
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right"> Tipe Kendaraan </label>

              <div class="col-sm-9">
                <select class="col-xs-10 col-sm-5" name="tipe">
                  <option value="MOTOR">MOTOR</option>
                  <option value="MOBIL">MOBIL</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right">  </label>
              <input type="hidden" name="gedung" value="D">
              <div class="col-sm-9">
                <button class="btn btn-info" type="submit">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Submit
                </button>
              </div>
            </div>
          </form>
        </div>

        <div id="C" class="tab-pane fade">
          <form method="POST" action="{{ route('adminKendaraanTambah') }}" class="form-horizontal" role="form">
            {{ csrf_field() }}

            <div class="form-group">
              <div class="col-sm-3">
              </div>
              <div class="col-sm-9">
                <label><h3>Gedung C</h3></label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right"> Nomor PLAT </label>

              <div class="col-sm-9">
                <input class="col-xs-10 col-sm-5" name="noPlat" type="text" placeholder="H 1234 XYZ" autofocus />
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right"> Tipe Kendaraan </label>

              <div class="col-sm-9">
                <select class="col-xs-10 col-sm-5" name="tipe">
                  <option value="MOTOR">MOTOR</option>
                  <option value="MOBIL">MOBIL</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right">  </label>
              <input type="hidden" name="gedung" value="C">
              <div class="col-sm-9">
                <button class="btn btn-info" type="submit">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Submit
                </button>
              </div>
            </div>
          </form>
        </div>

        <div id="LB" class="tab-pane fade">
          <form method="POST" action="{{ route('adminKendaraanTambah') }}" class="form-horizontal" role="form">
            {{ csrf_field() }}

            <div class="form-group">
              <div class="col-sm-3">
              </div>
              <div class="col-sm-9">
                <label><h3>Lapangan Basket</h3></label>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right"> Nomor PLAT </label>

              <div class="col-sm-9">
                <input class="col-xs-10 col-sm-5" name="noPlat" type="text" placeholder="H 1234 XYZ" autofocus />
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right"> Tipe Kendaraan </label>

              <div class="col-sm-9">
                <select class="col-xs-10 col-sm-5" name="tipe">
                  <option value="MOTOR">MOTOR</option>
                  <option value="MOBIL">MOBIL</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-3 control-label no-padding-right">  </label>
              <input type="hidden" name="gedung" value="LB">
              <div class="col-sm-9">
                <button class="btn btn-info" type="submit">
                  <i class="ace-icon fa fa-check bigger-110"></i>
                  Submit
                </button>
              </div>
            </div>
          </form>
        </div>

      </div>
    </div>

    <!-- PAGE CONTENT ENDS -->
  </div>
</div>
@endsection