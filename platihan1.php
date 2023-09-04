
<!DOCTYPE html>
<html>
  <head>
    <title>PILKADES</title>
    <!-- meta -->
    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- css --> 
    <link rel="stylesheet" href="http://localhost/pilkades/assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="http://localhost/pilkades/assets/eksternal/font-awesome.min.css">
<link rel="stylesheet" href="http://localhost/pilkades/assets/eksternal/ionicons.min.css">
<link rel="stylesheet" href="http://localhost/pilkades/assets/dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="http://localhost/pilkades/assets/dist/css/skins/skin-blue.min.css">
<link rel="stylesheet" href="http://localhost/pilkades/assets/plugins/select2/select2.min.css">
<link rel="stylesheet" href="http://localhost/pilkades/assets/plugins/select2/AdminLTE-select2.min.css">
<!-- <link rel="stylesheet" href="assets/plugins/datatables/dataTables.bootstrap.css"> -->
<link rel="stylesheet" href="http://localhost/pilkades/assets/plugins/datatables/jquery.dataTables.css">
<link rel="stylesheet" href="http://localhost/pilkades/assets/plugins/sweetalert/dist/sweetalert.css">
<!-- iCheck -->
<link rel="stylesheet" href="http://localhost/pilkades/assets/plugins/iCheck/all.css">
<!-- Date Picker -->
<link href="http://localhost/pilkades/assets/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
<!-- Custom -->
<link rel="stylesheet" href="http://localhost/pilkades/assets/breadcrumb.css">

<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">

<style type="text/css">
/* table, th, td {
    border: 1px solid #C0C0C0;
    padding: 0.5rem;
    } */
    
tbody tr:hover {
    background: #FFFFAA;
}
.clickable{
    cursor: pointer;
}
.panel-heading span {
    margin-top: -20px;
    font-size: 15px;
}
.form-horizontal .form-group {
    margin-right: 0px;
    margin-left: 0px;
}
.form-group {
    margin-bottom: 5px;
}
.calon-img {
    margin: 0 auto;
    /* width: 100px; */
    padding: 3px;
    border: 3px solid #d2d6de;
}

.calon-img-frame {
    margin-top: 10px;
}

.numberCircle {
  border-radius: 50%;
  behavior: url(PIE.htc);
  /* remove if you don't care about IE8 */
  width: 45px;
  height: 45px;
  padding: 2px;
  background: #fff;
  border: 2px solid #666;
  color: #666;
  text-align: center;
  font: 32px Arial, sans-serif;
  margin: 0 auto;
}

.numberCircleSmall {
  border-radius: 30%;
  behavior: url(PIE.htc);
  /* remove if you don't care about IE8 */
  width: 28px;
  height: 28px;
  padding: 2px;
  background: #fff;
  border: 2px solid #666;
  color: #000;
  text-align: center;
  font-family: 'Righteous', cursive;
  margin: 0 auto;
}
.namaCalon {
  font-family: 'Lato',sans-serif;
  font-size: 16pt;  
  font-weight: bold;
  color: #d73925;
}

.detailCalon {
  font-family: 'Lato',sans-serif;
  font-size: 11pt;  
  font-weight: normal;
  line-height: 1.8em;
}

.detailCalonText {
  font-weight: bold;

}

.jmlSuaraCalon {
  font-weight: bold;
}

.jmlSuaraCalon .salah {
  background-color: #d73925;
  color: #fff;
}

</style>
    <!-- jQuery 2.2.3 -->
    <script src="http://localhost/pilkades/assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- <script src="assets/js//jquery-3.3.1.js"></script> -->
  </head>

  <body class="hold-transition sidebar-mini skin-blue">
    <div class="wrapper">
      <!-- header -->
      <header class="main-header">
  <!-- Logo -->
   
  <a href="http://localhost/pilkades/" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><img src="http://localhost/pilkades/assets/img/logo_pilkades_mini.png"></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><img src="http://localhost/pilkades/assets/img/logo_pilkades_mini2.png"></span>
  </a>

  <!-- nav -->
  <nav class="navbar navbar-static-top" role="navigation">
  <!-- Sidebar toggle button-->
  <a href="http://localhost/pilkades/assets/#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
  </a>
  <!-- Navbar Right Menu -->
  <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- User Account Menu -->
      <li class="dropdown user user-menu">
        <!-- Menu Toggle Button -->
        <a href="http://localhost/pilkades/assets/#" class="dropdown-toggle" data-toggle="dropdown">
          <!-- The user image in the navbar-->
          <img src="http://localhost/pilkades/assets/img/thumb__ser4.png" class="user-image" alt="User Image">
          <!-- hidden-xs hides the username on small devices so only the image appears. -->
          <span class="hidden-xs">Administrator </span>
        </a>
        <ul class="dropdown-menu">
          <!-- The user image in the menu -->
          <li class="user-header">
            <img src="http://localhost/pilkades/assets/img/thumb__ser4.png" class="img-circle" alt="User Image">
            <p>
              Administrator               <small></small>
            </p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-left">
              <a href="http://localhost/pilkades/Profile" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
              <a href="http://localhost/pilkades/Auth/logout" class="btn btn-default btn-flat">Log out</a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav></header> <!-- nav -->
      
      <!-- sidebar -->
      <aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="http://localhost/pilkades/assets/img/thumb__ser4.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Administrator </p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <!-- <li class="header">LIST MENU</li> -->
      <!-- Optionally, you can add icons to the links -->
      <li >
        <a href="http://localhost/pilkades/Home">
          <i class="fa fa-home"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="header">MENU UTAMA</li>
      
      <li class="active">
        <a href="http://localhost/pilkades/penyelenggara">
          <i class="fa fa-map-marker"></i>
          <span>Data Pokok </span>
        </a>
      </li>

      <li >
        <a href="http://localhost/pilkades/calon">
          <i class="fa fa-male"></i>
          <span>Daftar Calon</span>
        </a>
      </li> 
      

      <li class="header">HASIL PEMILIHAN</li>
      
      <!-- Kecamatan Only -->
      <li >
        <a href="http://localhost/pilkades/hasil">
          <i class="fa fa-pie-chart"></i>
          <span>Input Hasil Pemilihan</span>
        </a>
      </li>         
      
      <!-- Semua role -->
      <li class="header">REKAPITULASI</li>
      <li >
        <a href="http://localhost/pilkades/rekap">
          <i class="fa fa-table"></i>
          <span>Rekap Suara Masuk</span>
        </a>
      </li>      
      
      <li >
        <a href="http://localhost/pilkades/rekaphasil">
          <i class="fa fa-table"></i>
          <span>Rekap Perolehan</span>
        </a>
      </li>  
	     
      
      <!-- This links only appear to admin user(s)-->
      <li class="header">LAPORAN</li>
      <li >
        <a href="http://localhost/pilkades/laporan">
          <i class="fa fa-table"></i>
          <span>Laporan Hasil Pilkades</span>
        </a>
      </li>
        
      <li class="header">PENGATURAN</li>
      <li >
        <a href="http://localhost/pilkades/Pengguna">
          <i class="fa fa-users"></i>
          <span>Pengguna </span>
        </a>
      </li>

      <li >
        <a href="http://localhost/pilkades/tahapan">
          <i class="fa fa-toggle-on"></i>
          <span>On/Off Tahapan </span>
        </a>
      </li>
      
      
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>      
      <!-- content -->
      <div class="content-wrapper">
  <!-- headerContent -->
  <section class="content-header">
	<h1>
	  Data Pokok	  <small>Daftar desa penyelenggara pilkades serentak</small>
	</h1>
	
</section>  

  <!-- Main content -->
  <section class="content">
    <div class="msg" style="display:none;">
	</div>

<!-- Default box -->
<div class="box">
	<div class="alert alert-warning alert-dismissible" id="peringatan">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4><i class="icon fa fa-warning"></i> Perhatian!</h4>
		Mohon berhati-hati saat menghapus data desa, karena akan berpengaruh pada data calon.
	</div>
	<div class="box-body">

				<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Filter</h3>
				<span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up" data-toggle="tooltip" title="Collapse"></i></span>
			</div>
			<div class="panel-body">
				<form id="form-filter" class="form-horizontal">
					<div class="form-group">
						<label for="nama_kec" class="col-sm-2 control-label">Kecamatan</label>
						<div class="col-sm-4">
							<select  id="nama_kec" class="form-control">
<option value="" selected="selected"></option>
<option value="Cigasong">Cigasong</option>
<option value="Jatiwangi">Jatiwangi</option>
<option value="Lemahsugih">Lemahsugih</option>
<option value="Rajagaluh">Rajagaluh</option>
</select>
						</div>
					</div>
					<div class="form-group">
						<label for="nama_desa" class="col-sm-2 control-label">Desa</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="nama_desa">
						</div>
					</div>
					<div class="form-group">
						<label for="LastName" class="col-sm-2 control-label"></label>
						<div class="col-sm-4">
							<button type="button" id="btn-filter" class="btn btn-primary">Filter</button>
							<button type="button" id="btn-reset" class="btn btn-default">Reset</button>
					</div>
					</div>
				</form>
			</div> <!-- panel-body -->
		</div> <!-- panel -->
				<div class="panel panel-primary">
			<div class="panel-body">
				<div class="col-md-6 col-xs-12">
					<h4 class="text-muted"><b>Data Penyelenggaraan Pilkades Serentak Tahun 2019</b></h4>	        	</div>
	        	<div class="col-md-2 col-xs-12">
				<button class="btn btn-success btn-block" onclick="add_desa()"><i class="glyphicon glyphicon-plus"></i> Tambah</button>				</div>
				<div class="col-md-2 col-xs-12">
        			<button class="btn btn-default btn-block" onclick="reload_table()"><i class="glyphicon glyphicon-refresh"></i> Reload</button>
        		</div>
        		<div class="col-md-2 col-xs-12">
        			<a href="http://localhost/pilkades/penyelenggara/export" class="btn btn-default btn-block"><i class="fa fa-file-excel-o"></i> Export Excel</a>
        		</div>
			</div>
		</div>
		<div class="table-responsive">

			<div class="col-md-12">
				<table id="table" class="table table-condensed table-bordere table-hover" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th width= "30px" rowspan="2">No</th>
							<th rowspan="2">Kecamatan</th>
							<th rowspan="2">Desa</th>
							<th colspan="3" class="text-center">DPT</th>
							<th rowspan="2">Surat Suara</th>
							<th width= "130px" rowspan="2">Aksi</th>
						</tr>
						<tr>
							<th>Laki-laki</th>
							<th>Perempuan</th>
							<th>Jumlah</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
					<tfoot>
						<tr>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
						</tr>
					</tfoot>
				</table>
			</div><!-- /.tabel-responsive -->
		</div>
	</div><!-- /.box-body -->
	<div class="box-footer">
		&nbsp;
	</div><!-- /.box-footer-->
</div><!-- /.box -->

<script type="text/javascript">
	var table;
	$(document).ready(function() {
	//datatables
		table = $('#table').DataTable({
			"footerCallback": function ( row, data, start, end, display ) {
            var api = this.api(), data;
 
            // converting to interger to find total
            var intVal = function ( i ) {
                return typeof i === 'string' ?
                    i.replace(/[\$,]/g, '')*1 :
                    typeof i === 'number' ?
                        i : 0;
            };
 
            // computing column Total of the complete result 
            var dptlTotal = api
                .column( 3 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
            
            var dptpTotal = api
                .column( 4 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );
            
            var jmlTotal = api
                .column( 5 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 ); 
            
            var suratTotal = api
                .column( 6 )
                .data()
                .reduce( function (a, b) {
                    return intVal(a) + intVal(b);
                }, 0 );    

            // Update footer by showing the total with the reference of the column index 
            $( api.column( 0 ).footer() ).html('Total');
            $( api.column( 3 ).footer() ).html(dptlTotal);
            $( api.column( 4 ).footer() ).html(dptpTotal);
            $( api.column( 5 ).footer() ).html(jmlTotal);
            $( api.column( 6 ).footer() ).html(suratTotal);
            $( api.column( 7 ).footer() ).html('');
        },
			"processing": true, //Feature control the processing indicator.
			"serverSide": true, //Feature control DataTables' server-side processing mode.
			"order": [], //Initial no order.
			// Load data for the table's content from an Ajax source
			"ajax": {
			"url": "http://localhost/pilkades/penyelenggara/ajax_list",
			"type": "POST",
			"data": function ( data ) {
				data.nama_kec = $('#nama_kec').val();
				data.nama_desa = $('#nama_desa').val();
			}
			},
			//Set column definition initialisation properties.
			"columnDefs": [
					{
					"targets": [ 0 ], //first column / numbering column
					"orderable": false, //set not orderable
					},
				],
			aLengthMenu: [
		        [10, 25, 50, 100, 200, -1],
		        [10, 25, 50, 100, 200, "All"]
		    ],
		    iDisplayLength: 10
		});

		
	var input1 = document.getElementById('dpt_l');
	var input2 = document.getElementById('dpt_p');
	var input3 = document.getElementById('dpt_jml');
	//var input4 = document.getElementById('suratsuara');

	input1.addEventListener('change', function() {
	input3.value = parseInt(input1.value)+parseInt(input2.value);
	//input4.value = parseInt(input3.value)+parseInt((input3.value*2.5)/100);
	});

	input2.addEventListener('change', function() {
	input3.value = parseInt(input1.value)+parseInt(input2.value);
	//input4.value = parseInt(input3.value)+parseInt((input3.value*2.5)/100);
	});

	// btn filter
	$('#btn-filter').click(function(){ //button filter event click
		table.ajax.reload();  //just reload table
	});

	$('#btn-reset').click(function(){ //button reset event click
		$('#form-filter')[0].reset();
		table.ajax.reload();  //just reload table
	});

	});	

	//set input/textarea/select event when change value, remove class error and remove text help block 
    $("input").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("textarea").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });
    $("select").change(function(){
        $(this).parent().parent().removeClass('has-error');
        $(this).next().empty();
    });

	$(document).on('click', '.panel-heading span.clickable', function(e){
        var $this = $(this);
        if(!$this.hasClass('panel-collapsed')) {
            $this.parents('.panel').find('.panel-body').slideUp();
            $this.addClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        } else {
            $this.parents('.panel').find('.panel-body').slideDown();
            $this.removeClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
        }
    }) 	

	$("#peringatan").fadeTo(2000, 500).slideUp(500, function(){
		$("#peringatan").slideUp(500);
	});

	function myChangeFunction(input1) {
		var input2 = document.getElementById('dpt_p');
		input2.value = input1.value;
	}

	function add_desa()
	{
	    save_method = 'add';
	    $('#form')[0].reset(); // reset form on modals
	    $('.form-group').removeClass('has-error'); // clear error class
	    $('.help-block').empty(); // clear error string
	    $('#modal_form').modal('show'); // show bootstrap modal
	    $('.modal-title').text('Tambah Data'); // Set Title to Bootstrap modal title
	}

	function edit_desa(id)
	{
	    save_method = 'update';
	    $('#form')[0].reset(); // reset form on modals
	    $('.form-group').removeClass('has-error'); // clear error class
	    $('.help-block').empty(); // clear error string


	    //Ajax Load data from ajax
	    $.ajax({
	        url : "http://localhost/pilkades/penyelenggara/ajax_edit/" + id,
	        type: "GET",
	        dataType: "JSON",
	        success: function(data)
	        {
	        	
	            $('[name="id"]').val(data.id);
	            $('[name="kdkab"]').val(data.kdkab);
	            $('[name="kdkec"]').val(data.kdkec);
	            $('[name="kddesa"]').val(data.kddesa);
	            $('[name="dpt_l"]').val(data.dpt_l);
	            $('[name="dpt_p"]').val(data.dpt_p);
	            $('[name="dpt_jml"]').val(data.dpt_jml);
	            $('[name="suratsuara"]').val(data.suratsuara);
	            $('[name="ketua"]').val(data.ketua);
	            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
	            $('.modal-title').text('Edit Data'); // Set title to Bootstrap modal title

	        },
	        error: function (jqXHR, textStatus, errorThrown)
	        {
	            alert('Error get data from ajax');
	        }
	    });
	}

	function reload_table()
	{
	    table.ajax.reload(null,false); //reload datatable ajax 
	}

	function save()
	{
	    $('#btnSave').text('saving...'); //change button text
	    $('#btnSave').attr('disabled',true); //set button disable 
	    var url;

	    if(save_method == 'add') {
	        url = "http://localhost/pilkades/penyelenggara/ajax_add";
	    } else {
	        url = "http://localhost/pilkades/penyelenggara/ajax_update";
	    }

	    // ajax adding data to database

	    var formData = new FormData($('#form')[0]);
	    $.ajax({
	        url : url,
	        type: "POST",
	        data: formData,
	        contentType: false,
	        processData: false,
	        dataType: "JSON",
	        success: function(data)
	        {

	            if(data.status) //if success close modal and reload ajax table
	            {
	                $('#modal_form').modal('hide');
	                reload_table();
	            }
	            else
	            {
	                for (var i = 0; i < data.inputerror.length; i++) 
	                {
	                    $('[name="'+data.inputerror[i]+'"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
	                    $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
	                }
	            }
	            $('#btnSave').text('Simpan'); //change button text
	            $('#btnSave').attr('disabled',false); //set button enable 


	        },
	        error: function (jqXHR, textStatus, errorThrown)
	        {
	            alert('Error adding / update data');
	            $('#btnSave').text('save'); //change button text
	            $('#btnSave').attr('disabled',false); //set button enable 

	        }
	    });
	}

	function xdelete_desa(id)
	{
	    if(confirm('Menghapus data desa akan mengakibatkan daftar nama calon pada desaikut  tersebut terhapus. <br/>Are you sure delete this data? '))

	    {
	        // ajax delete data to database
	        $.ajax({
	            url : "http://localhost/pilkades/penyelenggara/ajax_delete/"+id,
	            type: "POST",
	            dataType: "JSON",
	            success: function(data)
	            {
	                //if success reload ajax table
	                $('#modal_form').modal('hide');
	                reload_table();
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error deleting data');
	            }
	        });

	    }
	}

	function delete_desa(id)
	{
		swal({
			title: "Anda yakin?",
			text: "Menghapus data desa akan mengakibatkan DAFTAR CALON pada desa tersebut ikut TERHAPUS.",
			type: "warning",
			showCancelButton: true,
			confirmButtonClass: "btn-danger",
			confirmButtonText: "Ya, hapus!",
			cancelButtonText: "Tidak",
			closeOnConfirm: false,
			closeOnCancel: false
		},

		function(isConfirm) {

		if (isConfirm) {

			$.ajax({
				url : "http://localhost/pilkades/penyelenggara/ajax_delete/"+id,
				type: "POST",
				dataType: "JSON",
				error: function(jqXHR, textStatus, errorThrown) {
					alert('Error deleting data');
				},

				success: function(data) {
					$('#modal_form').modal('hide');
	                reload_table();
					swal("Terhapus!", "Data berhasil dihapus.", "success");
				}
			});
		} else {
			swal("Dibatalkan", "Data batal dihapus :)", "error");
		}

	});

	}
</script>

<!-- Bootstrap modal -->
<div class="modal" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Person Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <input type="hidden" value="3210" name="kdkab"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Kecamatan</label>
                            <div class="col-md-9">
                                <select id="kdkec" name="kdkec" class="form-control" >
						           <option>-- Pilih Kecamatan --</option>
						           <option value='3210050'>Argapura</option><option value='3210041'>Banjaran</option><option value='3210020'>Bantarujeg</option><option value='3210080'>Cigasong</option><option value='3210030'>Cikijing</option><option value='3210031'>Cingambul</option><option value='3210150'>Dawuan</option><option value='3210190'>Jatitujuh</option><option value='3210140'>Jatiwangi</option><option value='3210170'>Kadipaten</option><option value='3210151'>Kasokandel</option><option value='3210180'>Kertajati</option><option value='3210010'>Lemahsugih</option><option value='3210120'>Leuwimunding</option><option value='3210200'>Ligung</option><option value='3210060'>Maja</option><option value='3210070'>Majalengka</option><option value='3210021'>Malausma</option><option value='3210130'>Palasah</option><option value='3210160'>Panyingkiran</option><option value='3210100'>Rajagaluh</option><option value='3210091'>Sindang</option><option value='3210110'>Sindangwangi</option><option value='3210090'>Sukahaji</option><option value='3210210'>Sumberjaya</option><option value='3210040'>Talaga</option>						        </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Desa</label>
                            <div class="col-md-9">
                                <select id="kddesa" name="kddesa" class="form-control">
						          <option>-- Pilih Desa --</option>
						          <option value='3210200014'>Ampel</option><option value='3210140006'>Andir</option><option value='3210060004'>Anggrawati</option><option value='3210050009'>Argalingga</option><option value='3210050008'>Argamukti</option><option value='3210040012'>Argasari</option><option value='3210190010'>Babajurang</option><option value='3210180006'>Babakan</option><option value='3210170005'>Babakan Anyar</option><option value='3210070001'>Babakan Jawa</option><option value='3210090013'>Babakan Manjeti</option><option value='3210100005'>Babakankareo</option><option value='3210020017'>Babakansari</option><option value='3210030024'>Bagjasari</option><option value='3210110010'>Balagedog</option><option value='3210150018'>Balida</option><option value='3210010003'>Bangbayang</option><option value='3210210003'>Banjaran</option><option value='3210060014'>Banjaran</option><option value='3210041009'>Banjaran</option><option value='3210030020'>Banjaransari</option><option value='3210110001'>Bantar Agung</option><option value='3210180011'>Bantarjati</option><option value='3210020016'>Bantarujeg</option><option value='3210200013'>Bantarwaru</option><option value='3210160004'>Bantrangsana</option><option value='3210021004'>Banyusari</option><option value='3210080008'>Baribis</option><option value='3210080009'>Batujaya</option><option value='3210150016'>Baturuyuk</option><option value='3210091007'>Bayureja</option><option value='3210200007'>Beber</option><option value='3210200004'>Beusi</option><option value='3210190001'>Biyawak</option><option value='3210150011'>Bojongcideres</option><option value='3210160006'>Bonang</option><option value='3210210010'>Bongas Kulon</option><option value='3210210009'>Bongas Wetan</option><option value='3210010002'>Borogojol</option><option value='3210110007'>Buahkapas</option><option value='3210021001'>Buninagara</option><option value='3210130006'>Buniwangi</option><option value='3210200006'>Buntu</option><option value='3210140009'>Burujul Kulon</option><option value='3210140008'>Burujul Wetan</option><option value='3210040006'>Campaga</option><option value='3210090001'>Candrajaya</option><option value='3210060003'>Cengal</option><option value='3210140004'>Cibentar</option><option value='3210040002'>Cibeureum</option><option value='3210070002'>Cibodas</option><option value='3210200001'>Cibogor</option><option value='3210140015'>Ciborelang</option><option value='3210010004'>Cibulan</option><option value='3210050002'>Cibunut</option><option value='3210140007'>Cicadas</option><option value='3210060016'>Cicalung</option><option value='3210040005'>Cicanir</option><option value='3210080007'>Cicenang</option><option value='3210070006'>Cicurug</option><option value='3210031003'>Cidadap</option><option value='3210210012'>Cidenok</option><option value='3210030017'>Cidulang</option><option value='3210060011'>Cieurih</option><option value='3210010009'>Cigaleuh</option><option value='3210080003'>Cigasong</option><option value='3210060001'>Cihaur</option><option value='3210070011'>Cijati</option><option value='3210160001'>Cijurey</option><option value='3210090012'>Cikalong</option><option value='3210050014'>Cikaracak</option><option value='3210070010'>Cikasarung</option><option value='3210040003'>Cikeusal</option><option value='3210090016'>Cikeusik</option><option value='3210020019'>Cikidang</option><option value='3210030016'>Cikijing</option><option value='3210031012'>Cikondang</option><option value='3210090014'>Cikoneng</option><option value='3210030026'>Cilangcang</option><option value='3210031008'>Cimanggugirang</option><option value='3210020012'>Cimangguhilir</option><option value='3210041011'>Cimeong</option><option value='3210021006'>Cimuncang</option><option value='3210020020'>Cinambo</option><option value='3210031010'>Cingambul</option><option value='3210031002'>Cintaasih</option><option value='3210090002'>Ciomas</option><option value='3210170003'>Cipaku</option><option value='3210120011'>Ciparay</option><option value='3210010001'>Cipasung</option><option value='3210020010'>Cipeundeuy</option><option value='3210060005'>Cipicung</option><option value='3210100012'>Cipinang</option><option value='3210030028'>Cipulus</option><option value='3210021007'>Ciranca</option><option value='3210031009'>Ciranjeng</option><option value='3210010019'>Cisalak</option><option value='3210130012'>Cisambeng</option><option value='3210100013'>Cisetu</option><option value='3210030014'>Cisoka</option><option value='3210041004'>Darmalarang</option><option value='3210150012'>Dawuan</option><option value='3210010018'>Dayeuhwangi</option><option value='3210130005'>Enggalwangi</option><option value='3210151010'>Gandasari</option><option value='3210200003'>Gandawesi</option><option value='3210150014'>Gandu</option><option value='3210040014'>Ganeas</option><option value='3210210002'>Garawangi</option><option value='3210091002'>Garawastu</option><option value='3210210014'>Gelokmulya</option><option value='3210150013'>Genteng</option><option value='3210041001'>Genteng</option><option value='3210151003'>Girimukti</option><option value='3210021010'>Girimukti</option><option value='3210041013'>Girimulya</option><option value='3210091006'>Gunung Kuning</option><option value='3210020018'>Gununglarang</option><option value='3210040013'>Gunungmanik</option><option value='3210151008'>Gunungsari</option><option value='3210050011'>Gunungwangi</option><option value='3210020021'>Haurgeulis</option><option value='3210050010'>Haurseah</option><option value='3210041002'>Hegarmanah</option><option value='3210050013'>Heubeulisuk</option><option value='3210170002'>Heuleut</option><option value='3210120010'>Heuleut</option><option value='3210091004'>Indrakila</option><option value='3210021005'>Jagamulya</option><option value='3210030025'>Jagasari</option><option value='3210151004'>Jatimulya</option><option value='3210160003'>Jatipamor</option><option value='3210040004'>Jatipamor</option><option value='3210190012'>Jatiraga</option><option value='3210151001'>Jatisawit</option><option value='3210160005'>Jatiserang</option><option value='3210140013'>Jatisura</option><option value='3210190008'>Jatitengah</option><option value='3210190009'>Jatitujuh</option><option value='3210140011'>Jatiwangi</option><option value='3210090019'>Jayi</option><option value='3210110005'>Jerukleueut</option><option value='3210170004'>Kadipaten</option><option value='3210041010'>Kagok</option><option value='3210010008'>Kalapadua</option><option value='3210030027'>Kancana</option><option value='3210130010'>Karamat</option><option value='3210150020'>Karanganyar</option><option value='3210120009'>Karangasem</option><option value='3210170006'>Karangsambung</option><option value='3210080010'>Karayunan</option><option value='3210041008'>Kareo</option><option value='3210160008'>Karyamukti</option><option value='3210151009'>Kasokandel</option><option value='3210030019'>Kasturi</option><option value='3210070004'>Kawunggirang</option><option value='3210080001'>Kawunghilir</option><option value='3210200017'>Kedungkancana</option><option value='3210200019'>Kedungsari</option><option value='3210010014'>Kepuh</option><option value='3210060012'>Kertabasuki</option><option value='3210180007'>Kertajati</option><option value='3210040016'>Kertarahayu</option><option value='3210200002'>Kertasari</option><option value='3210180008'>Kertasari</option><option value='3210180005'>Kertawinangun</option><option value='3210200016'>Kodasari</option><option value='3210031013'>Kondangmekar</option><option value='3210021011'>Kramatraya</option><option value='3210070003'>Kulur</option><option value='3210100007'>Kumbung</option><option value='3210080006'>Kutamanggu</option><option value='3210120002'>Lame</option><option value='3210040007'>Lampuyang</option><option value='3210021008'>Lebakwangi</option><option value='3210010005'>Lemah Putih</option><option value='3210010017'>Lemahsugih</option><option value='3210110004'>Lengkongkulon</option><option value='3210110003'>Lengkongwetan</option><option value='3210140005'>Leuwenggede</option><option value='3210200015'>Leuweunghapit</option><option value='3210151002'>Leuwikidang</option><option value='3210120005'>Leuwikujang</option><option value='3210110009'>Leuwilaja</option><option value='3210200018'>Leuwiliang Baru</option><option value='3210120012'>Leuwimunding</option><option value='3210160007'>Leuwiseeng</option><option value='3210170001'>Liangjulang</option><option value='3210200010'>Ligung</option><option value='3210200009'>Ligung Lor</option><option value='3210140016'>Loji</option><option value='3210210013'>Loji Kobong</option><option value='3210060008'>Maja Selatan</option><option value='3210060009'>Maja Utara</option><option value='3210070012'>Majalengka Kulon</option><option value='3210070007'>Majalengka Wetan</option><option value='3210200011'>Majasari</option><option value='3210130013'>Majasuka</option><option value='3210021003'>Malausma</option><option value='3210060006'>Malongpong</option><option value='3210150017'>Mandapa</option><option value='3210031004'>Maniis</option><option value='3210010007'>Margajaya</option><option value='3210040001'>Margamukti</option><option value='3210010015'>Mekar Wangi</option><option value='3210040017'>Mekarhurip</option><option value='3210180001'>Mekarjaya</option><option value='3210010010'>Mekarmulya</option><option value='3210180009'>Mekarmulya</option><option value='3210040008'>Mekarraharja</option><option value='3210140010'>Mekarsari</option><option value='3210050012'>Mekarwangi</option><option value='3210120003'>Mindi</option><option value='3210120013'>Mirat</option><option value='3210031011'>Muktisari</option><option value='3210070013'>Munjul</option><option value='3210031006'>Nagarakembang</option><option value='3210120006'>Nanggerang</option><option value='3210090020'>Nanggewer</option><option value='3210060018'>Nunuk Baru</option><option value='3210090010'>Padahanten</option><option value='3210110002'>Padaherang</option><option value='3210010012'>Padarek</option><option value='3210170007'>Pagandon</option><option value='3210060017'>Pageraji</option><option value='3210100001'>Pajajar</option><option value='3210180003'>Pakubeureum</option><option value='3210090015'>Palabuan</option><option value='3210180002'>Palasah</option><option value='3210130007'>Palasah</option><option value='3210210015'>Pancaksuji</option><option value='3210190015'>Pangkalanpari</option><option value='3210060015'>Paniis</option><option value='3210210005'>Paningkiran</option><option value='3210210007'>Panjalin Kidul</option><option value='3210210011'>Panjalin Lor</option><option value='3210190003'>Panongan</option><option value='3210041012'>Panyindangan</option><option value='3210160009'>Panyingkiran</option><option value='3210190004'>Panyingkiran</option><option value='3210120001'>Parakan</option><option value='3210210006'>Parapatan</option><option value='3210120014'>Parungjaya</option><option value='3210060010'>Pasanggrahan</option><option value='3210190002'>Pasindangan</option><option value='3210130008'>Pasir</option><option value='3210091001'>Pasirayu</option><option value='3210180012'>Pasiripis</option><option value='3210150019'>Pasirmalati</option><option value='3210160002'>Pasirmuncang</option><option value='3210120007'>Patuanan</option><option value='3210100003'>Payung</option><option value='3210190011'>Pilangsari</option><option value='3210140001'>Pinangraja</option><option value='3210190007'>Putridalem</option><option value='3210100010'>Rajagaluh</option><option value='3210100008'>Rajagaluh Kidul</option><option value='3210100011'>Rajagaluh Lor</option><option value='3210120004'>Rajawangi</option><option value='3210210008'>Rancaputat</option><option value='3210190005'>Randegan Kulon</option><option value='3210190006'>Randegan Wetan</option><option value='3210151007'>Ranjikulon</option><option value='3210151006'>Ranjiwetan</option><option value='3210031005'>Rawa</option><option value='3210050006'>Sadasari</option><option value='3210010006'>Sadawangi</option><option value='3210100006'>Sadomas</option><option value='3210050001'>Sagara</option><option value='3210180014'>Sahbandar</option><option value='3210040011'>Salado</option><option value='3210090017'>Salagedang</option><option value='3210150021'>Salawana</option><option value='3210020013'>Salawangi</option><option value='3210041006'>Sangiang</option><option value='3210091003'>Sangkanhurip</option><option value='3210031001'>Sedaraja</option><option value='3210210004'>Sepat</option><option value='3210070014'>Sidamukti</option><option value='3210020014'>Silihwangi</option><option value='3210080004'>Simpeureum</option><option value='3210010011'>Sinargalih</option><option value='3210150015'>Sinarjati</option><option value='3210091005'>Sindang</option><option value='3210030021'>Sindang</option><option value='3210130004'>Sindanghaji</option><option value='3210020009'>Sindanghurip</option><option value='3210070005'>Sindangkasih</option><option value='3210060013'>Sindangkerta</option><option value='3210041003'>Sindangpala</option><option value='3210030015'>Sindangpanji</option><option value='3210100004'>Sindangpano</option><option value='3210110006'>Sindangwangi</option><option value='3210130011'>Sindangwasa</option><option value='3210100009'>Singawada</option><option value='3210021009'>Sukadana</option><option value='3210050007'>Sukadana</option><option value='3210090011'>Sukahaji</option><option value='3210010013'>Sukajadi</option><option value='3210180013'>Sukakerta</option><option value='3210010016'>Sukamaju</option><option value='3210020022'>Sukamenak</option><option value='3210030018'>Sukamukti</option><option value='3210180010'>Sukamulya</option><option value='3210040015'>Sukaperna</option><option value='3210140002'>Sukaraja Kulon</option><option value='3210140003'>Sukaraja Wetan</option><option value='3210030022'>Sukasari</option><option value='3210050005'>Sukasari Kaler</option><option value='3210050004'>Sukasari Kidul</option><option value='3210180004'>Sukawana</option><option value='3210200012'>Sukawera</option><option value='3210190013'>Sumber Kulon</option><option value='3210190014'>Sumber Wetan</option><option value='3210210001'>Sumberjaya</option><option value='3210030023'>Sunalari</option><option value='3210041007'>Sunia</option><option value='3210041005'>Suniabaru</option><option value='3210140012'>Surawangi</option><option value='3210140014'>Sutawangi</option><option value='3210080002'>Tajur</option><option value='3210040009'>Talagakulon</option><option value='3210040010'>Talagawetan</option><option value='3210090018'>Tanjungsari</option><option value='3210120008'>Tanjungsari</option><option value='3210130003'>Tarikolot</option><option value='3210070009'>Tarikolot</option><option value='3210200005'>Tegalaren</option><option value='3210060007'>Tegalsari</option><option value='3210100002'>Teja</option><option value='3210050003'>Tejamulya</option><option value='3210080005'>Tenjolayar</option><option value='3210070008'>Tonjong</option><option value='3210130002'>Trajaya</option><option value='3210110008'>Ujungberung</option><option value='3210020015'>Wadowetan</option><option value='3210060002'>Wanahayu</option><option value='3210151005'>Wanajaya</option><option value='3210200008'>Wanasalam</option><option value='3210031007'>Wangkelang</option><option value='3210130009'>Waringin</option><option value='3210130001'>Weragati</option><option value='3210021002'>Werasari</option>						        </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Jumlah DPT</label>
                            <div class="col-md-3">
                                <input name="dpt_l" id="dpt_l" class="form-control" type="number" step="1" min="0">
                                <span class="text-muted"><small>Laki-laki</small></span>
                                <span class="help-block"></span>
                            </div>
                            <div class="col-md-3">
                                <input name="dpt_p" id="dpt_p" class="form-control" type="number" step="1" min="0">
                                <span class="text-muted"><small>Perempuan</small></span>
                                <span class="help-block"></span>
                            </div>
                            <div class="col-md-3">
                                <input name="dpt_jml" id="dpt_jml" class="form-control" type="text" readonly="readonly">
                                <span class="text-muted"><small>Jumlah</small></span>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Jumlah Surat Suara</label>
                            <div class="col-md-3">
                                <input name="suratsuara" id="suratsuara" placeholder="Surat Suara" class="form-control" type="number" step="1" min="0">
                                
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Ketua Panitia</label>
                            <div class="col-md-9">
                                <input name="ketua" placeholder="Ketua Panitia Pilkades" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->  </section>
</div> <!-- headerContent --><!-- mainContent -->
    
      <!-- footer -->
      <footer class="main-footer no-print">
	<!-- To the right -->
	<div class="pull-right hidden-xs">
        <small>Version 1.0beta</small>
    </div>
	<!-- Default to the left -->
	<strong>&copy; 2019 <a href="#">TAPEM</a>.</strong> All rights reserved.
</footer>    
      <div class="control-sidebar-bg"></div>
    </div>

    <!-- js -->
    <!-- REQUIRED JS SCRIPTS -->
<!-- Bootstrap 3.3.6 -->
<script src="http://localhost/pilkades/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="http://localhost/pilkades/assets/plugins/select2/select2.min.js"></script>
<script src="http://localhost/pilkades/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="http://localhost/pilkades/assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="http://localhost/pilkades/assets/dist/js/app.min.js"></script>
<!-- Sweet Alert -->
<script src="http://localhost/pilkades/assets/plugins/sweetalert/dist/sweetalert.min.js"></script>
<!-- iCheck -->
<script src="http://localhost/pilkades/assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<!-- Date Picker -->
<script src="http://localhost/pilkades/assets/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="http://localhost/pilkades/assets/plugins/datepicker/locales/bootstrap-datepicker.id.js" type="text/javascript"></script>
<!-- My Ajax -->
<script type="text/javascript">
	var MyTable = $('#list-data').dataTable({
		  "paging": true,
		  "lengthChange": true,
		  "searching": true,
		  "ordering": true,
		  "info": true,
		  "autoWidth": false
		});

	window.onload = function() {
		tampilPengguna();
			}

	function myFunction() {
	  var x = document.getElementById("password");
	  if (x.type === "password") {
	      x.type = "text";
	  } else {
	      x.type = "password";
	  }
	}

	function myFunction2() {
	  var x = document.getElementById("password2");
	  if (x.type === "password") {
	      x.type = "text";
	  } else {
	      x.type = "password";
	  }
	}

	function refresh() {
		MyTable = $('#list-data').dataTable();
	}

	function effect_msg_form() {
		// $('.form-msg').hide();
		$('.form-msg').show(1000);
		setTimeout(function() { $('.form-msg').fadeOut(1000); }, 3000);
	}

	function effect_msg() {
		// $('.msg').hide();
		$('.msg').show(1000);
		setTimeout(function() { $('.msg').fadeOut(1000); }, 3000);
	}

	function tampilPengguna() {
		$.get('http://localhost/pilkades/Pengguna/tampil', function(data) {
			MyTable.fnDestroy();
			$('#data-pengguna').html(data);
			refresh();
		});
	}

	var id_pengguna;
	$(document).on("click", ".konfirmasiHapus-pengguna", function() {
		id_pengguna = $(this).attr("data-id");
	})
	$(document).on("click", ".hapus-dataPengguna", function() {
		var id = id_pengguna;
		
		$.ajax({
			method: "POST",
			url: "http://localhost/pilkades/Pengguna/delete",
			data: "id=" +id
		})
		.done(function(data) {
			$('#konfirmasiHapus').modal('hide');
			tampilPengguna();
			$('.msg').html(data);
			effect_msg();
		})
	})

	
	$(document).on("click", ".update-dataPengguna", function() {
		var id = $(this).attr("data-id");
		
		$.ajax({
			method: "POST",
			url: "http://localhost/pilkades/Pengguna/update",
			data: "id=" +id
		})
		.done(function(data) {
			$('#tempat-modal').html(data);
			$('#update-pengguna').modal('show');
		})
	})

	$('#form-tambah-pengguna').submit(function(e) {
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: 'http://localhost/pilkades/Pengguna/prosesTambah',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilPengguna();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-tambah-pengguna").reset();
				$('#tambah-pengguna').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$(document).on('submit', '#form-update-pengguna', function(e){
		var data = $(this).serialize();

		$.ajax({
			method: 'POST',
			url: 'http://localhost/pilkades/Pengguna/prosesUpdate',
			data: data
		})
		.done(function(data) {
			var out = jQuery.parseJSON(data);

			tampilPengguna();
			if (out.status == 'form') {
				$('.form-msg').html(out.msg);
				effect_msg_form();
			} else {
				document.getElementById("form-update-pengguna").reset();
				$('#update-pengguna').modal('hide');
				$('.msg').html(out.msg);
				effect_msg();
			}
		})
		
		e.preventDefault();
	});

	$('#tambah-pengguna').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('#update-pengguna').on('hidden.bs.modal', function () {
	  $('.form-msg').html('');
	})

	$('.select2').select2({
	    sortResults: function(results, container, query) {
	        if (query.term) {
	            // use the built in javascript sort function
	            return results.sort(function(a, b) {
	                if (a.text.length > b.text.length) {
	                    return 1;
	                } else if (a.text.length < b.text.length) {
	                    return -1;
	                } else {
	                    return 0;
	                }
	            });
	        }
	        return results;
	    }
	});
	
	$('inputxxx').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue',
        increaseArea: '20%' // optional
    });
    
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    	
</script>  </body>
</html>