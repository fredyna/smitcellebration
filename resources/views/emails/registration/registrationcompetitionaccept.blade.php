@component('mail::message')

# Konfirmasi Pembayaran Registrasi E-Spot Competition (Mobile Legends) Berhasil
<center><img src="{{ asset('images/logo.png') }}" alt="Logo SMIT C#" width="100px"></center><br />
Hai {{ $member->team_name }}, <br />
Terimakasih telah melakukan pembayaran untuk acara E-spot Competition pada rangkaian acara SMIT Cellebration. Setelah konfirmasi dan mendapatkan email ini, Anda telah dinyatakan sebagai peserta resmi acara SMIT Cellebration.<br/>

<br/>
Siapkan identitas diri (KTP/KTM/SIM) untuk melakukan pendataan. Mohon datang lebih awal supaya acara dapat berjalan dengan baik dan tepat waktu. <br/><br/>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
