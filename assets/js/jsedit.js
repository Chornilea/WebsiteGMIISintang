$(document).on("click", ".editberita", function () {
  var id 	 = $(this).data('kode');
  var judul = $(this).data('judul');
  var jenis  = $(this).data('jenis');
  var headline 	 = $(this).data('headline');
  var isi = $(this).data('isi');
  var foto  = $(this).data('foto');
  $(".modal-body #kode").val( id );
  $(".modal-body #edjudul").val( judul );
  $(".modal-body #edjenis").val( jenis );
  $(".modal-body #edheadline").val( headline );
  $(".modal-body #edisi").val( isi );
  $(".modal-body #edfoto").val( foto );
});
$(document).on("click", ".editsetting", function () {
  var kodesetting 	 = $(this).data('kodesetting');
  var namaweb = $(this).data('namaweb');
  var alamat  = $(this).data('alamat');
  var telepon 	 = $(this).data('telepon');
  var logo = $(this).data('logo');
  var corosal1  = $(this).data('corosal1');
  var corosal2  = $(this).data('corosal2');
  var konsep = $(this).data('konsep');
  var visimisi  = $(this).data('visimisi');
  var tujuan  = $(this).data('tujuan');
  $(".modal-body #idsetting").val( kodesetting );
  $(".modal-body #ednamaweb").val( namaweb );
  $(".modal-body #edalamat").val( alamat );
  $(".modal-body #edtelepon").val( telepon );
  $(".modal-body #edlogo").val( logo );
  $(".modal-body #edcorosal1").val( corosal1 );
  $(".modal-body #edcorosal2").val( corosal2 );
  $(".modal-body #edkonsep").val( konsep );
  $(".modal-body #edvisimisi").val( visimisi );
  $(".modal-body #edtujuan").val( tujuan );
});
$(document).on("click", ".editevent", function () {
  var id 	 = $(this).data('kodee');
  var judul = $(this).data('judule');
  var jenis  = $(this).data('jenise');
  var headline 	 = $(this).data('headlinee');
  var isi = $(this).data('isie');
  var foto  = $(this).data('foto');
  $(".modal-body #kodee").val( id );
  $(".modal-body #edjudule").val( judul );
  $(".modal-body #edjenise").val( jenis );
  $(".modal-body #edheadlinee").val( headline );
  $(".modal-body #edisie").val( isi );
  $(".modal-body #edfotoe").val( foto );
});
$(document).on("click", ".fasilitas", function () {
  var id 	 = $(this).data('kodef');
  $(".modal-body #kodef").val( id );
});
$(document).on("click", ".editor", function () {
  var id 	 = $(this).data('kodee');
  $("#kodef").val( id );
});
function ConfirmDialog(){
  var x = confirm("yakin akan hapus data!!")
  if(x) {
    return true;
  }else{
    return false;
  }
}
