@extends('admin.layouts.master')

@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><i class="fas fa-fw fa-users"></i> Competition <small>/ View Member</small></h1>

    <!-- div row -->
    <div class="row">

      <div class="col-sm-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">View Data Member</h6>
          </div>
            <div class="card-body">
                <!-- flash message -->
                @include('layouts.partials._alerts')
                <!-- end flash message -->

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Team Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext" value="{{ $member->team_name }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Team Leader</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext" value="{{ $member->leader_name }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Gender</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext" value="{{ $member->leader_gender }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Instance</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext" value="{{ $member->instance }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext" value="{{ $member->email }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">No HP/WA</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control-plaintext" value="{{ $member->phone_number }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Member 1</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext" value="{{ $member->member_1 }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Member 2</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext" value="{{ $member->member_2 }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Member 3</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext" value="{{ $member->member_3 }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Member 4</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext" value="{{ $member->member_4 }}" readonly>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Member 5</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control-plaintext" value="{{ $member->member_5 }}" readonly>
                    </div>
                </div>

                @if (!$member->payment)
                    <button type="button" class="btn btn-success" onclick="acceptParticipant()"><i class="fas fa-check"></i> Accept</button>
                @endif
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
            $("#menu-competition").addClass('active');
        });

        function acceptParticipant()
        {
            let y = confirm('Are you sure to accept this ?');
            if(y==true){
                window.location.href = "{{ route('admin.competition.accept', $member->id) }}";
            }
        }
    </script>
@endsection
