@extends('admin.layouts.master')

@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><i class="fas fa-fw fa-users"></i> Participants <small>/ View Participant</small></h1>

    <!-- div row -->
    <div class="row">

      <div class="col-sm-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">View Data Participant</h6>
          </div>
            <div class="card-body">
                <!-- flash message -->
                @include('layouts.partials._alerts')
                <!-- end flash message -->

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Type</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext" value="{{ $participant->type == 'Seminar' ? 'Seminar Nasional':'Workshop' }}" readonly>
                    </div>
                </div>

                @if ($participant->type == 'Workshop')
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Workshop Type</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control-plaintext" value="{{ $participant->workshop }}" readonly>
                        </div>
                    </div>
                @endif

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext" value="{{ $participant->name }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Gender</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext" value="{{ $participant->gender }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Instance</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext" value="{{ $participant->instance }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext" value="{{ $participant->email }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">No HP/WA</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control-plaintext" value="{{ $participant->no_hp }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Address</label>
                    <div class="col-sm-9">
                        <textarea class="form-control-plaintext" rows="3" readonly>{{ $participant->address }}</textarea>
                    </div>
                </div>

                <button type="button" class="btn btn-success" onclick="acceptParticipant()"><i class="fas fa-check"></i> Accept</button>
            </div>
        </div>
      </div>

    </div>
    <!-- end div row -->

  </div>
  <!-- /.container-fluid -->    
@endsection

@section('js')

    <script>
        $(function(){
            $("#menu-participants").addClass('active');
            $("#sub-menu-new").addClass('active');
        });

        function acceptParticipant()
        {
            let y = confirm('Are you sure to accept this ?');
            if(y==true){
                window.location.href = "{{ route('admin.participants.accept', $participant->id) }}";
            }
        }
    </script>
@endsection