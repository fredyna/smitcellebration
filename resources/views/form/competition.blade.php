@extends('form.master')

@section('content')
  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
            <div class="col-lg-6">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h3 text-gray-900 mb-4">SMIT Cellebration</h1>
                  <h3 class="h5 text-gray-900 mb-4">E-Spot Competition</h3>
                </div>
                <form class="user" method="post" action="{{ route('competition.store') }}">

                  <!-- flash message -->
                  @include('layouts.partials._alerts')
                  <!-- end flash message -->

                  @csrf

                  <div class="form-group {{ $errors->has('team_name') ? 'has-error':'' }}">
                    <input type="text" class="form-control form-control-user" name="team_name" placeholder="Masukan nama tim..." value="{{ old('team_name') }}" required>

                    @if ($errors->has('team_name'))
                        <p class="text-danger">{{ $errors->first('team_name') }}</p>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('leader_name') ? 'has-error':'' }}">
                    <input type="text" class="form-control form-control-user" name="leader_name" placeholder="Masukan nama ketua..." value="{{ old('leader_name') }}" required>

                    @if ($errors->has('leader_name'))
                        <p class="text-danger">{{ $errors->first('leader_name') }}</p>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('leader_gender') ? 'has-error':'' }}">
                    <select name="leader_gender" class="form-control" required>
                      <option value="" style="display:none;">-- Pilih Jenis Kelamin --</option>
                      <option value="Laki-Laki" {{ old('leader_gender') == 'Laki-Laki'? 'selected':'' }}>Laki-Laki</option>
                      <option value="Perempuan" {{ old('leader_gender') == 'Perempuan'? 'selected':'' }}>Perempuan</option>
                    </select>

                    @if ($errors->has('leader_gender'))
                        <p class="text-danger">{{ $errors->first('leader_gender') }}</p>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('instance') ? 'has-error':'' }}">
                    <input type="text" class="form-control form-control-user" name="instance" placeholder="Masukan instansi/institusi..." value="{{ old('instance') }}">

                    @if ($errors->has('instance'))
                        <p class="text-danger">{{ $errors->first('instance') }}</p>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('email') ? 'has-error':'' }}">
                    <input type="email" class="form-control form-control-user" name="email" placeholder="Masukan email..." value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <p class="text-danger">{{ $errors->first('email') }}</p>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('phone_number') ? 'has-error':'' }}">
                    <input type="number" class="form-control form-control-user" name="phone_number" placeholder="Masukan No HP/WA..." value="{{ old('phone_number') }}" required>

                    @if ($errors->has('phone_number'))
                        <p class="text-danger">{{ $errors->first('phone_number') }}</p>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('member_1') ? 'has-error':'' }}">
                    <input type="text" class="form-control form-control-user" name="member_1" placeholder="Masukan nama member 1..." value="{{ old('member_1') }}">

                    @if ($errors->has('member_1'))
                        <p class="text-danger">{{ $errors->first('member_1') }}</p>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('member_2') ? 'has-error':'' }}">
                    <input type="text" class="form-control form-control-user" name="member_2" placeholder="Masukan nama member 2..." value="{{ old('member_2') }}">

                    @if ($errors->has('member_2'))
                        <p class="text-danger">{{ $errors->first('member_2') }}</p>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('member_3') ? 'has-error':'' }}">
                    <input type="text" class="form-control form-control-user" name="member_3" placeholder="Masukan nama member 3..." value="{{ old('member_3') }}">

                    @if ($errors->has('member_3'))
                        <p class="text-danger">{{ $errors->first('member_3') }}</p>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('member_4') ? 'has-error':'' }}">
                    <input type="text" class="form-control form-control-user" name="member_4" placeholder="Masukan nama member 4..." value="{{ old('member_4') }}">

                    @if ($errors->has('member_4'))
                        <p class="text-danger">{{ $errors->first('member_4') }}</p>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('member_5') ? 'has-error':'' }}">
                    <input type="text" class="form-control form-control-user" name="member_5" placeholder="Masukan nama member 5..." value="{{ old('member_5') }}">

                    @if ($errors->has('member_5'))
                        <p class="text-danger">{{ $errors->first('member_5') }}</p>
                    @endif
                  </div>

                  <button type="submit" name="submit" value="submit" class="btn btn-success btn-user btn-block">
                    Daftar
                  </button>
                </form>
                <hr>
                <div class="text-center">
                  <span class="small">Copyright &copy; 2019 Komunitas SMIT</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>
@endsection

