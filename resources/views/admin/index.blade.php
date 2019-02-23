@extends('admin.layouts.master')

@section('content')
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><i class="fas fa-fw fa-tachometer-alt"></i> Dashboard</h1>

    <!-- div row -->
    <div class="row">

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">National Seminar</div>
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $seminar }}</div>
                  </div>
                  <div class="col">
                    <div class="progress progress-sm mr-2">
                      <div class="progress-bar bg-info" role="progressbar" style="width: {{ $prosen_seminar }}%" aria-valuenow="{{ $seminar }}" aria-valuemin="0" aria-valuemax="200"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Workshop - Mastering Flutter</div>
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $workshop1 }}</div>
                  </div>
                  <div class="col">
                    <div class="progress progress-sm mr-2">
                      <div class="progress-bar bg-info" role="progressbar" style="width: {{ $prosen_workshop1 }}%" aria-valuenow="{{ $workshop1 }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Workshop - Cyber Security</div>
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $workshop2 }}</div>
                  </div>
                  <div class="col">
                    <div class="progress progress-sm mr-2">
                      <div class="progress-bar bg-info" role="progressbar" style="width: {{ $prosen_workshop2 }}%" aria-valuenow="0" aria-valuemin="{{ $workshop2 }}" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">E-Spot Competition (Team)</div>
                <div class="row no-gutters align-items-center">
                  <div class="col-auto">
                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $competition }}</div>
                  </div>
                  <div class="col">
                    <div class="progress progress-sm mr-2">
                      <div class="progress-bar bg-info" role="progressbar" style="width: {{ $prosen_competition }}%" aria-valuenow="{{ $competition }}" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- end div row -->

    <!-- div row -->
    <div class="row">

      <div class="col-md-6">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">New Event Participants</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr class="table-info">
                    <th>#</th>
                    <th>Name</th>
                    <th>Instance</th>
                    <th>Type</th>
                    <th>Registered At</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $no = 1;
                  @endphp
                  @if (isset($new_participants) && $new_participants->count() > 0)
                    @foreach ($new_participants as $participant)
                      <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $participant->name }}</td>
                        <td>{{ $participant->instance }}</td>
                        <td>
                            {{ 
                                $participant->type == 'Seminar' ? 
                                    'Seminar Nasional':'Workshop'
                            }}
                        </td>
                        <td>
                            {{ 
                                $participant->created_at->localeMonth . ' ' . $participant->created_at->day . ', ' . 
                                $participant->created_at->year
                            }}
                        </td>
                      </tr>
                    @endforeach
                  @else
                      <tr>
                          <td colspan="5" class="text-center"><i>No data</i></td>
                      </tr>
                  @endif 
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">New Competition Team Participants</h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
                <thead>
                  <tr class="table-info">
                    <th>#</th>
                    <th>Team Name</th>
                    <th>Registered At</th>
                  </tr>
                </thead>
                <tbody>
                  @php
                    $no = 1;
                  @endphp
                  @if (isset($new_members) && $new_members->count() > 0)
                      @foreach ($new_members as $member)
                        <tr>
                          <td>{{ $no++ }}</td>
                          <td>{{ $member->team_name }}</td>
                          <td>
                              {{ 
                                  $member->created_at->localeMonth . ' ' . $member->created_at->day . ', ' . 
                                  $member->created_at->year
                              }}
                          </td>
                        </tr>
                      @endforeach
                  @else
                      <tr>
                          <td colspan="6" class="text-center"><i>No data</i></td>
                      </tr>
                  @endif 
                </tbody>
              </table>
            </div>
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
        $("#menu-home").addClass('active');
      });
    </script>
@endsection