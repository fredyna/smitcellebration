@component('mail::message')

# Registrasi Acara SMIT Cellebration Berhasil
<center><img src="{{ asset('images/logo.png') }}" alt="Logo SMIT C#" width="100px"></center><br />
Hai {{ $member->team_name }}, <br />
Terimakasih telah registrasi di acara E-spot Competition (PUBG) pada rangkaian acara SMIT Cellebration. Untuk melanjutkan pendaftaran, Tim Anda dikenakan tagihan sebesar : Rp 100.000,- (Seratus Ribu Rupiah).<br/>

<br/>
Tagihan tersebut dapat dibayarkan dengan transfer melalui rekening xxxx-xxxx-xxxx (BRI) a/n Fulan/Fulani atau dapat juga dibayarkan secara langsung melalui panitia a/n Fulan/Fulani 08xx xxxx xxxx (WA).<br/><br/>
Jika Anda membayar tagihan melalui transfer, maka Anda dapat melakukan konfirmasi pembayaran ke email smitphb@gmail.com atau konfirmasi via WA a/n Fulan/Fulani 08xx xxxx xxxx dengan subject BuktiBayar_espot_NamaTimAnda dan dilampirkan foto/hasil scan bukti transfer. Setelah konfirmasi pembayaran berhasil dilakukan, maka Anda akan mendapatkan email konfirmasi.
<br/><br/>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
