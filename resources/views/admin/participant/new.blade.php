@extends('admin.layouts.master')

@section('css')
    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

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
            <h6 class="m-0 font-weight-bold text-primary">New Event Participants</h6>
          </div>
          <div class="card-body">
            <!-- flash message -->
            @include('layouts.partials._alerts')
            <!-- end flash message -->
            
            <div class="table-responsive">
            @if (isset($participants))
                <table id="participant-table" class="table table-bordered table-hover table-striped">
            @else
                <table class="table table-bordered table-hover table-striped">
            @endif 
              
                <thead>
                  <tr class="table-info">
                    <th>#</th>
                    <th>Name</th>
                    <th>Instance</th>
                    <th>Type</th>
                    <th>Registered At</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @if (isset($participants) && $participants->count() > 0)
                        @foreach ($participants as $participant)
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
                                <td class="text-center">
                                    <a href="{{ route('admin.participants.show', $participant->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('admin.participants.edit', $participant->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                    <button type="button" class="btn btn-sm btn-danger" onclick="deleteData('{{ $participant->id }}')"><i class="fas fa-trash"></i></button>
        
                                    <form id="formparticipant-{{ $participant->id }}" action="{{ route('admin.participants.delete', $participant->id) }}" method="post" style="display:none;">
                                        @csrf
                                        <input type="hidden" name="idparticipant-{{ $participant->id }}" value="">
                                        <input type="submit" value="OK">
                                    </form>
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
    <!-- datatable js -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <script>

        $(function(){
            $("#menu-participants").addClass('active');
            $("#sub-menu-new").addClass('active');
            $('#participant-table').DataTable();
        });

        function deleteData(id)
        {
            let y = confirm('Are you sure to delete ?');
            if(y==true){
                $("#formparticipant-"+id).submit();
            }
        }
    </script>
@endsection