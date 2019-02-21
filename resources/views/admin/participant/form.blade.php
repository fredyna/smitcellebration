@extends('admin.layouts.master')

@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><i class="fas fa-fw fa-users"></i> Participants <small>/ New Participants</small></h1>

    <!-- div row -->
    <div class="row">

      <div class="col-sm-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Data Participant</h6>
          </div>
          <div class="card-body">
            <!-- flash message -->
            @include('layouts.partials._alerts')
            <!-- end flash message -->
            <form action="{{ route('admin.participants.update', $participant->id) }}" method="post">
              @csrf
              @method('PATCH')

              <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Type</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control-plaintext" value="{{ $participant->type == 'Seminar' ? 'Seminar Nasional':'Workshop' }}" readonly>
                  </div>
              </div>

              @if ($participant->type == 'Workshop')
                  <div class="form-group row {{ $errors->has('workshop') ? 'has-error':'' }}">
                    <label class="col-sm-3 col-form-label">Workshop Type</label>
                    <div class="col-sm-9">
                      <select name="workshop" class="form-control">
                        <option value="" style="display:none;">-- Choose Workshop --</option>
                        <option value="Mastering Flutter" {{ $participant->workshop == 'Mastering Flutter' ? 'selected':'' }}>Mastering Flutter</option>
                        <option value="Cyber Security" {{ $participant->workshop == 'Cyber Security' ? 'selected':'' }}>Cyber Security</option>
                      </select>

                      @if ($errors->has('workshop'))
                        <p class="text-danger">{{ $errors->first('workshop') }}</p>
                      @endif
                    </div>
                  </div>
              @endif

              <div class="form-group row {{ $errors->has('name') ? 'has-error':'' }}">
                  <label class="col-sm-3 col-form-label">Name</label>
                  <div class="col-sm-9">
                    <input type="text" name="name" class="form-control" value="{{ $participant->name }}" placeholder="Insert name...">

                    @if ($errors->has('name'))
                      <p class="text-danger">{{ $errors->first('name') }}</p>
                    @endif
                  </div>
              </div>

              <div class="form-group row {{ $errors->has('gender') ? 'has-error':'' }}">
                  <label class="col-sm-3 col-form-label">Gender</label>
                  <div class="col-sm-9">
                    <select name="gender" class="form-control">
                      <option value="" style="display:none;">-- Choose Gender --</option>
                      <option value="Laki-Laki" {{ $participant->gender == 'Laki-Laki' ? 'selected':'' }}>Laki-Laki</option>
                      <option value="Perempuan" {{ $participant->gender == 'Perempuan' ? 'selected':'' }}>Perempuan</option>
                    </select>

                    @if ($errors->has('gender'))
                      <p class="text-danger">{{ $errors->first('gender') }}</p>
                    @endif
                  </div>
              </div>

              <div class="form-group row {{ $errors->has('instance') ? 'has-error':'' }}">
                  <label class="col-sm-3 col-form-label">Instance</label>
                  <div class="col-sm-9">
                    <input type="text" name="instance" class="form-control" value="{{ $participant->instance }}" placeholder="Insert instance...">

                    @if ($errors->has('instance'))
                      <p class="text-danger">{{ $errors->first('instance') }}</p>
                    @endif
                  </div>
              </div>

              <div class="form-group row {{ $errors->has('email') ? 'has-error':'' }}">
                  <label class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" name="email" class="form-control" value="{{ $participant->email }}">

                    @if ($errors->has('email'))
                      <p class="text-danger">{{ $errors->first('email') }}</p>
                    @endif
                  </div>
              </div>

              <div class="form-group row {{ $errors->has('phone_number') ? 'has-error':'' }}">
                  <label class="col-sm-3 col-form-label">No HP/WA</label>
                  <div class="col-sm-9">
                    <input type="number" name="phone_number" class="form-control" value="{{ $participant->phone_number }}" placeholder="Insert phone number/WA">

                    @if ($errors->has('phone_number'))
                      <p class="text-danger">{{ $errors->first('phone_number') }}</p>
                    @endif
                  </div>
              </div>

              <div class="form-group row {{ $errors->has('address') ? 'has-error':'' }}">
                  <label class="col-sm-3 col-form-label">Address</label>
                  <div class="col-sm-9">
                    <textarea name="address" class="form-control" rows="3" placeholder="Insert address...">{{ $participant->address }}</textarea>

                    @if ($errors->has('address'))
                      <p class="text-danger">{{ $errors->first('address') }}</p>
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
        // Call the dataTables jQuery plugin
        $(document).ready(function() {
            $('#participant-table').DataTable();
        });

        $(function(){
            $("#menu-participants").addClass('active');
            $("#sub-menu-new").addClass('active');
        });

        function deleteData()
        {

        }
    </script>
@endsection