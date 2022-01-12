<div class="container">
    <div class="clearfix" style="padding-bottom: 1rem;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/tryitnow/">VNPAY DEMO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link " href="/tryitnow/">Danh sách </a> </li>
                           <li class="nav-item">  <a class="nav-link active" href="/tryitnow/Home/CreateOrder">Tạo mới <span class="sr-only">(current)</span></a></li>
                </ul>
            </div>
        </nav>
    </div>

    <h3>Tạo mới đơn h&#224;ng</h3>
    <div class="table-responsive">
        {{-- <form action="/tryitnow/Home/CreateOrder" id="frmCreateOrder" method="post"> --}}
                <div class="form-group" wire:ignore>
                    <label for="language">Loại hàng hóa </label>
                    <select name="ordertype" id="ordertype" class="form-control">
                       @foreach ($ordertype as $key => $order )
                           <option value="{{ $key }}">{{ $order }}</option>
                       @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="Amount">Số tiền</label>
                    <input class="form-control" data-val="true" data-val-number="The field Amount must be a number." data-val-required="The Amount field is required." id="Amount" name="Amount" type="text" value="10000" />
                </div>
                <div class="form-group">
                    <label for="OrderDescription">Nội dung thanh toán</label>
                    <textarea class="form-control" cols="20" id="OrderDescription" name="OrderDescription" rows="2">
                                Thanh toan don hang thoi gian: 2022-01-08 14:54:25</textarea>
                </div>
                <div class="form-group">
                    <label for="bankcode">Ngân hàng</label>
                    <select name="bankcode" id="bankcode" class="form-control">
                        <option value="">Không chọn </option>
                        <option value="MBAPP">Ung dung MobileBanking</option>
                        <option value="VNPAYQR">VNPAYQR</option>
                        <option value="VNBANK">LOCAL BANK</option>
                        <option value="IB">INTERNET BANKING</option>
                        <option value="ATM">ATM CARD</option>
                        <option value="INTCARD">INTERNATIONAL CARD</option>
                        <option value="VISA">VISA</option>
                        <option value="MASTERCARD"> MASTERCARD</option>
                        <option value="JCB">JCB</option>
                        <option value="UPI">UPI</option>
                        <option value="VIB">VIB</option>
                        <option value="VIETCAPITALBANK">VIETCAPITALBANK</option>
                        <option value="SCB">Ngan hang SCB</option>
                        <option value="NCB">Ngan hang NCB</option>
                        <option value="SACOMBANK">Ngan hang SacomBank  </option>
                        <option value="EXIMBANK">Ngan hang EximBank </option>
                        <option value="MSBANK">Ngan hang MSBANK </option>
                        <option value="NAMABANK">Ngan hang NamABank </option>
                        <option value="VNMART"> Vi dien tu VnMart</option>
                        <option value="VIETINBANK">Ngan hang Vietinbank  </option>
                        <option value="VIETCOMBANK">Ngan hang VCB </option>
                        <option value="HDBANK">Ngan hang HDBank</option>
                        <option value="DONGABANK">Ngan hang Dong A</option>
                        <option value="TPBANK">Ngân hàng TPBank </option>
                        <option value="OJB">Ngân hàng OceanBank</option>
                        <option value="BIDV">Ngân hàng BIDV </option>
                        <option value="TECHCOMBANK">Ngân hàng Techcombank </option>
                        <option value="VPBANK">Ngan hang VPBank </option>
                        <option value="AGRIBANK">Ngan hang Agribank </option>
                        <option value="MBBANK">Ngan hang MBBank </option>
                        <option value="ACB">Ngan hang ACB </option>
                        <option value="OCB">Ngan hang OCB </option>
                        <option value="IVB">Ngan hang IVB </option>
                        <option value="SHB">Ngan hang SHB </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="language">Ngôn ngữ</label>
                    <select name="language" id="language" class="form-control">
                        <option value="vn">Tiếng Việt</option>
                        <option value="en">English</option>
                    </select>
                </div>
                <!--<button type="submit" class="btn btn-default" id="btnPopup">Thanh toán Popup</button>-->
            <button type="submit" class="btn btn-default" wire:click='createpayment()'>Thanh toán Redirect</button>
            <input name="__RequestVerificationToken" type="hidden" value="02co6nJxiIPwhm-KB9sZGNVDW2-aA-oadquxiG9nEFcLMauWxHBIblvc22aRgSUgpj5KsqcKOizQgb37r3oGorC-IaXucJVK4_DBO4HEE0U1" />
        {{-- </form> --}}
    </div>
    <p>
        &nbsp;
    </p>

    <footer class="footer">
        <p>&copy; VNPAY 2022</p>
    </footer>
</div> <!-- /container -->
@push('scripts')
<script>
    $(function(){
        $("#sortbyid").on('change', function(e){
            e.preventDefault();
            @this.set('sortid', e.target.value);

        });
    });
</script>
    <script>
        $(function(){
            $('#orderbyid').on('change',function(e){

            });
        });
    </script>
@endpush
