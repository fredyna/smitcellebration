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
                  <h3 class="h5 text-gray-900 mb-4">Workshop</h3>
                </div>
                <form class="user" method="post" action="{{ route('event.store') }}">

                  <!-- flash message -->
                  @include('layouts.partials._alerts')
                  <!-- end flash message -->

                  @csrf

                  <input type="hidden" class="form-control form-control-user" name="type" value="Workshop">

                  <div class="form-group {{ $errors->has('workshop') ? 'has-error':'' }}">
                    <select name="workshop" class="form-control" required>
                      <option value="" style="display:none;">-- Pilih Workshop --</option>
                      <option value="Mastering Flutter" {{ old('workshop') == 'Mastering Flutter'? 'selected':'' }}>Mastering Flutter</option>
                      <option value="Cyber Security" {{ old('workshop') == 'Cyber Security'? 'selected':'' }}>Cyber Security</option>
                    </select>

                    @if ($errors->has('workshop'))
                        <p class="text-danger">{{ $errors->first('workshop') }}</p>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('name') ? 'has-error':'' }}">
                    <input type="text" class="form-control form-control-user" name="name" placeholder="Masukan nama lengkap..." value="{{ old('name') }}" required>

                    @if ($errors->has('name'))
                        <p class="text-danger">{{ $errors->first('name') }}</p>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('gender') ? 'has-error':'' }}">
                    <select name="gender" class="form-control" required>
                      <option value="" style="display:none;">-- Pilih Jenis Kelamin --</option>
                      <option value="Laki-Laki" {{ old('gender') == 'Laki-Laki'? 'selected':'' }}>Laki-Laki</option>
                      <option value="Perempuan" {{ old('gender') == 'Perempuan'? 'selected':'' }}>Perempuan</option>
                    </select>

                    @if ($errors->has('gender'))
                        <p class="text-danger">{{ $errors->first('gender') }}</p>
                    @endif
                  </div>

                  <div class="form-group {{ $errors->has('instance') ? 'has-error':'' }}">
                    <input type="text" class="form-control form-control-user" name="instance" placeholder="Masukan instansi/institusi..." value="{{ old('instance') }}" required>

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

                  <div class="form-group {{ $errors->has('address') ? 'has-error':'' }}">
                    <textarea rows="3" class="form-control form-control-user" placeholder="Masukan alamat lengkap ..." name="address" required>{{ old('address') }}</textarea>

                    @if ($errors->has('address'))
                        <p class="text-danger">{{ $errors->first('address') }}</p>
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

