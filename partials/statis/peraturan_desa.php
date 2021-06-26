<div class="">
  <form id="peraturanForm" onsubmit="formAction(); return false;">
    <div class="form-row align-items-center">
      <div class="col-auto">
        <div class="form-group">
          <label for="jenis_dokumen">Jenis</label>
          <select class="form-control" name="kategori" id="kategori" onchange="formAction()" style="cursor: pointer;">
            <option value="">Semua</option>
            <?php foreach($kategori as $s): ?>
              <option value="<?= $s['id'] ?>" <?php selected($s['id'], $kategori_dokumen) ?>><?= $s['nama'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <div class="col-auto">
        <div class="form-group">
          <label for="jenis_dokumen">Tahun</label>
          <select class="form-control" name="tahun" id="tahun" onchange="formAction()">
            <option value="">Semua</option>
            <?php foreach($tahun as $t): ?>
              <option value="<?= $t['tahun'] ?>" <?php selected($t['tahun'], $tahun_dokumen) ?> ><?= $t['tahun'] ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>
      <div class="col-auto">
        <div class="form-group">
          <label for="jenis_dokumen">Tentang</label>
          <input type="text" name="tentang" id="tentang" class="form-control" style="margin-top: 0rem;">
        </div>
      </div>
      <div class="col-auto">
        <button type="submit" class="btn btn-info mt-3"><i class="fa fa-search"></i> Cari</button>
      </div>
    </div>
  </form>
  <br/><br/>
  <table class="table table-bordered table-striped" id="jdih-table">
    <thead>
      <tr class="text-white" style="background-color: #1e4356;">
        <th>Judul Produk Hukum</th>
        <th>Jenis</th>
        <th>Tahun</th>
      </tr>
    </thead>
    <tbody id="tbody-dokumen">
    </tbody>
  </table>
</div>

<script type="text/javascript">
  $(document).ready(function() {
    $('#jdih-table').DataTable({
    	"dom": 'rt<"bottom"p><"clear">',
    	"destroy": true,
      "paging": false,
      "ordering": false
    });

    get_table();
  } );

  function get_table() {
    var url = "<?= site_url('first/ajax_table_peraturan')?>";

    $.ajax({
      type: "GET",
      url: url,
      dataType: "JSON",
      success: function(data)
      {
        var html;
        if (data.length == 0)
        {
          html = "<tr><td colspan='3' align='center'>No Data Available</td></tr>";
        }
        for (var i = 0; i < data.length; i++)
        {
          html += "<tr>"+"<td><a href='<?= site_url('dokumen_web/unduh_berkas/')?>"+data[i].id+"'>"+data[i].nama+"</a></td>"+
          "<td>"+data[i].kategori+"</td>"+
          "<td>"+data[i].tahun+"</td>";
        }
        $('#tbody-dokumen').html(html);
      },
      error: function(err, jqxhr, errThrown)
      {
        console.log(err);
      }
    })
  }

  function formAction()
  {
    $('#tbody-dokumen').html('');
    var url = "<?= site_url('first/filter_peraturan') ?>";
    var kategori = $('#kategori').val();
    var tahun = $('#tahun').val();
    var tentang = $('#tentang').val();

    $.ajax({
      type: "POST",
      url: url,
      data: {
        kategori: kategori,
        tahun: tahun,
        tentang: tentang
      },
      dataType: "JSON",
      success: function(data)
      {
        var html;
        if (data.length == 0)
        {
          html = "<tr><td colspan='3' align='center'>No Data Available</td></tr>";
        }
        for (var i = 0; i < data.length; i++)
        {
          html += "<tr>"+"<td><a href='<?= site_url('dokumen_web/unduh_berkas/')?>"+data[i].id+"'>"+data[i].nama+"</a></td>"+
          "<td>"+data[i].kategori+"</td>"+
          "<td>"+data[i].tahun+"</td>";
        }
        $('#tbody-dokumen').html(html);
      },
      error: function(err, jqxhr, errThrown)
      {
        console.log(err);
      }
    })
  }
</script>