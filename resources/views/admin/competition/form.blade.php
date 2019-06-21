@extends('admin.layouts.master')

@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><i class="fas fa-fw fa-users"></i> Competition <small>/ Edit Member</small></h1>

    <!-- div row -->
    <div class="row">

      <div class="col-sm-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Member</h6>
          </div>
          <div class="card-body">
            <!-- flash message -->
            @include('layouts.partials._alerts')
            <!-- end flash message -->
            <form action="{{ route('admin.competition.update', $member->id) }}" method="post">
              @csrf
              @method('PATCH')

                <div class="form-group row {{ $errors->has('team_name') ? 'has-error':'' }}">
                    <label class="col-sm-3 col-form-label">Team Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="team_name" class="form-control" value="{{ $member->team_name }}" placeholder="Insert team name...">

                        @if ($errors->has('team_name'))
                        <p class="text-danger">{{ $errors->first('team_name') }}</p>
                        @endif
                    </div>
                </div>

                <div class="form-group row {{ $errors->has('leader_name') ? 'has-error':'' }}">
                    <label class="col-sm-3 col-form-label">Leader Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="leader_name" class="form-control" value="{{ $member->leader_name }}" placeholder="Insert leader name...">

                        @if ($errors->has('leader_name'))
                        <p class="text-danger">{{ $errors->first('leader_name') }}</p>
                        @endif
                    </div>
                </div>

                <div class="form-group row {{ $errors->has('leader_gender') ? 'has-error':'' }}">
                    <label class="col-sm-3 col-form-label">Gender</label>
                    <div class="col-sm-9">
                        <select name="leader_gender" class="form-control">
                        <option value="" style="display:none;">-- Choose Gender --</option>
                        <option value="Laki-Laki" {{ $member->leader_gender == 'Laki-Laki' ? 'selected':'' }}>Laki-Laki</option>
                        <option value="Perempuan" {{ $member->leader_gender == 'Perempuan' ? 'selected':'' }}>Perempuan</option>
                        </select>

                        @if ($errors->has('leader_gender'))
                        <p class="text-danger">{{ $errors->first('leader_gender') }}</p>
                        @endif
                    </div>
                </div>

                <div class="form-group row {{ $errors->has('instance') ? 'has-error':'' }}">
                    <label class="col-sm-3 col-form-label">Instance</label>
                    <div class="col-sm-9">
                        <input type="text" name="instance" class="form-control" value="{{ $member->instance }}" placeholder="Insert instance...">

                        @if ($errors->has('instance'))
                        <p class="text-danger">{{ $errors->first('instance') }}</p>
                        @endif
                    </div>
                </div>

                <div class="form-group row {{ $errors->has('email') ? 'has-error':'' }}">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" name="email" class="form-control" value="{{ $member->email }}">

                        @if ($errors->has('email'))
                        <p class="text-danger">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                </div>

                <div class="form-group row {{ $errors->has('phone_number') ? 'has-error':'' }}">
                    <label class="col-sm-3 col-form-label">No HP/WA</label>
                    <div class="col-sm-9">
                        <input type="number" name="phone_number" class="form-control" value="{{ $member->phone_number }}" placeholder="Insert phone number/WA">

                        @if ($errors->has('phone_number'))
                        <p class="text-danger">{{ $errors->first('phone_number') }}</p>
                        @endif
                    </div>
                </div>

                <div class="form-group row {{ $errors->has('member_1') ? 'has-error':'' }}">
                    <label class="col-sm-3 col-form-label">Member 1</label>
                    <div class="col-sm-9">
                      <input type="text" name="member_1" class="form-control" value="{{ $member->member_1 }}" placeholder="Insert member 1 name ...">

                      @if ($errors->has('member_1'))
                        <p class="text-danger">{{ $errors->first('member_1') }}</p>
                      @endif
                    </div>
                </div>

                <div class="form-group row {{ $errors->has('member_2') ? 'has-error':'' }}">
                    <label class="col-sm-3 col-form-label">Member 2</label>
                    <div class="col-sm-9">
                        <input type="text" name="member_2" class="form-control" value="{{ $member->member_2 }}" placeholder="Insert member 2 name ...">

                        @if ($errors->has('member_2'))
                        <p class="text-danger">{{ $errors->first('member_2') }}</p>
                        @endif
                    </div>
                </div>

                <div class="form-group row {{ $errors->has('member_3') ? 'has-error':'' }}">
                    <label class="col-sm-3 col-form-label">Member 3</label>
                    <div class="col-sm-9">
                        <input type="text" name="member_3" class="form-control" value="{{ $member->member_3 }}" placeholder="Insert member 3 name ...">

                        @if ($errors->has('member_3'))
                        <p class="text-danger">{{ $errors->first('member_3') }}</p>
                        @endif
                    </div>
                </div>

                <div class="form-group row {{ $errors->has('member_4') ? 'has-error':'' }}">
                    <label class="col-sm-3 col-form-label">Member 4</label>
                    <div class="col-sm-9">
                        <input type="text" name="member_4" class="form-control" value="{{ $member->member_4 }}" placeholder="Insert member 4 name ...">

                        @if ($errors->has('member_4'))
                        <p class="text-danger">{{ $errors->first('member_4') }}</p>
                        @endif
                    </div>
                </div>

                <div class="form-group row {{ $errors->has('member_5') ? 'has-error':'' }}">
                    <label class="col-sm-3 col-form-label">Member 5</label>
                    <div class="col-sm-9">
                        <input type="text" name="member_5" class="form-control" value="{{ $member->member_5 }}" placeholder="Insert member 5 name ...">

                        @if ($errors->has('member_5'))
                        <p class="text-danger">{{ $errors->first('member_5') }}</p>
                        @endif
                    </div>
                </div>

              <button type="submit" name="submit" class="btn btn-success float-right"><i class="fas fa-check"></i> Save</button>
            </form>
          </div>
        </div>
      </div>

    </div>
    <!-- end div row -->

  </div>
  <!-- /.container-fluid -->
@endsection

@section('js')
    <!-- datatable js -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <script>

        $(function(){
            $("#menu-competition").addClass('active');
        });
    </script>
@endsection
