<div class="">
  <table class="table table-bordered table-striped" id="info_publik">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul Informasi</th>
        <th>Tahun</th>
        <th>Kategori</th>
        <th>Tanggal Upload</th>
      </tr>
    </thead>
    <tfoot></tfoot>
  </table>
</div>

<script type="text/javascript">
  $(document).ready(function() {

    var url = "<?= site_url('first/ajax_informasi_publik')?>";
    table = $('#info_publik').DataTable({
      'processing': true,
      'serverSide': true,
      "pageLength": 10,
      'order': [],
      "ajax": {
        "url": url,
        "type": "POST"
      },
      //Set column definition initialisation properties.
      "columnDefs": [
      {
          "targets": [ 0 ], //first column / numbering column
          "orderable": false, //set not orderable
        },
        ],
        'language': {
          'url': BASE_URL + '/assets/bootstrap/js/dataTables.indonesian.lang'
        },
        'drawCallback': function (){
          $('.dataTables_paginate > .pagination').addClass('pagination-sm no-margin');
        }
      });

  } );

</script>
