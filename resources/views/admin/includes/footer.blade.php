<footer class="main-footer">
    <strong>Copyright &copy; 2019 <a href="http://imaxinformatica.com.br/" target="_blank">Imaxinformatica.com.br</a>.</strong>
    Todos os direitos reservados
    <div class="float-right d-none d-sm-inline-block">
        <b>Versão</b> 1.0
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('admin-lte/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('admin-lte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('admin-lte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('admin-lte/plugins/sparklines/sparkline.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('admin-lte/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('admin-lte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('admin-lte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('admin-lte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('admin-lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('admin-lte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- Toastr -->
<script src="{{asset('admin-lte/plugins/toastr/toastr.min.js')}}"></script>
<!-- InputMask -->
<script src="{{asset('admin-lte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('admin-lte/plugins/inputmask/min/jquery.inputmask.bundle.min.js')}}"></script>
<!-- maskMoney -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('admin-lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('admin-lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin-lte/dist/js/adminlte.js')}}"></script>


<script type="text/javascript">
$('.select2').select2({
    allowClear: true,
    placeholder: {
        id: "",
        placeholder: "Escolha..."
    }
});

$('.input-slug').keyup(function() {
    var slug = slugify($(this).val());
    $(this).val(slug);
});
$('.act-delete').on('click', function(e) {
    e.preventDefault();
    $('#confirmationModal .modal-title').html('Confirmação');
    $('#confirmationModal .modal-body p').html('Tem certeza que deseja realizar esta ação?');
    let href = $(this).attr('href');
    $('#confirmationModal').modal('show').on('click', '#confirm', function() {
        window.location.href = href;
    });
});

$('.input-phone').focusout(function() {
    var phone = $(this).val().replace(/\D/g, '');
    if (phone.length > 10) {
        $(this).inputmask({
            "mask": "(99) 99999-9999",
            "placeholder": " "
        });
    } else {
        $(this).inputmask({
            "mask": "(99) 9999-99999",
            "placeholder": " "
        });
    }
});


$('.alert .close').click(function() {
    $(this).parent().hide();
});

$('.input-date').datepicker({
    language: 'pt-BR',
    format: 'dd/mm/yyyy',
    autoclose: true
});

$(".input-money").maskMoney({
    thousands: '.',
    decimal: ',',
    allowZero: true,
    symbolStay: true
});

$(".input-money").each(function() {
    if ($(this).val() == '') {
        $(this).val('0,00');
    }
});

$(".input-kg").maskMoney({
    thousands: '.',
    decimal: ',',
    precision: 3,
    allowZero: true,
    symbolStay: true
});

$(".input-kg").each(function() {
    if ($(this).val() == '') {
        $(this).val('0,000');
    }
});

function slugify(string) {
    const a = 'àáäâãåăæçèéëêǵḧìíïîḿńǹñòóöôœøṕŕßśșțùúüûǘẃẍÿź·/_,:;'
    const b = 'aaaaaaaaceeeeghiiiimnnnooooooprssstuuuuuwxyz------'
    const p = new RegExp(a.split('').join('|'), 'g')
    return string.toString().toLowerCase()
        .replace(/\s+/g, '-') // Replace spaces with -
        .replace(p, c => b.charAt(a.indexOf(c))) // Replace special characters
        .replace(/&/g, '-and-') // Replace & with ‘and’
        .replace(/[^\w\-]+/g, '') // Remove all non-word characters
        .replace(/\-\-+/g, '-') // Replace multiple - with single -
    /*
    .replace(/^-+/, '') // Trim - from start of text
    .replace(/-+$/, '') // Trim - from end of text
    */
}
</script>
@if(session()->has('success'))
<script>
$(document).ready(function() {
    toastr.success("{{session('success')}}");
});
</script>
@endif

@if(session()->has('error'))
<script>
$(document).ready(function() {
    toastr.error("{{session('error')}}");
});
</script>
@endif
@yield('scripts')