
 @if(Session::has('Error'))
 <script>
      $(function() {
      $('#verify').modal('show');
       });
   </script>

   </div>
   @endif
@if(session('info')) )
<script>
$(function() {
$('#verify_code').modal('show');
});
</script>
@endif

<div id="verify_code" class="modal custom-modal fade"  role="dialog">
<div class="modal-dialog">
<div class="modal-content text-dark text-center">
  <div class="modal-header">
    <h3 class="modal-title text-center">{{session()->get('info') }}</h3>
  </div><!-- end modal-header -->
  <div class="modal-body d-flex justify-content-end">
  <button type="button" class="btn btn-sm btn-success" data-bs-dismiss="modal">Okay</button>
  </div><!-- end modal-bpdy -->
</div><!-- end modal-content -->
</div><!-- end modal-dialog -->
</div><!-- end edit-profile -->

<div id="verify" class="modal custom-modal fade"  role="dialog">
<div class="modal-dialog">
<div class="modal-content text-danger">
  <div class="modal-header">
    <h3 class="modal-title text-center">{{session()->get('Error') }}</h3>
  </div><!-- end modal-header -->
  <div class="modal-body d-flex justify-content-end">
  <button type="button" class="btn btn-sm btn-success" data-bs-dismiss="modal">Okay</button>
  </div><!-- end modal-bpdy -->
</div><!-- end modal-content -->
</div><!-- end modal-dialog -->
</div><!-- end edit-profile -->