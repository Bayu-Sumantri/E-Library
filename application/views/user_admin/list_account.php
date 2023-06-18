<!-- Content Header (Page header) -->

<section class="content">
    <div class="container-fluid">

	<!-- SELECT2 EXAMPLE -->
	<div class="mb-3 card card-info">
		<div class="card-header">
			<h3 class="card-title mb-2">List Account (User)</h3>

			<div class="card-tools">
				<button type="button" class="btn btn-tool" data-card-widget="collapse">
					<i class="fas fa-minus"></i>
				</button>
				<button type="button" class="btn btn-tool" data-card-widget="remove">
					<i class="fas fa-times"></i>
				</button>
			</div>
		</div>
		<!-- /.card-header -->
		<div class="card-body">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-danger	 mb-2" data-target="#exampleModalToggle2" data-toggle="modal"><i class="fa fa-plus" style="text-align: center;"> Tambah Account</i>
			</button>
			<table class="table table-hover table-bordered ">
				<thead>
					<tr class="text-center">

						<th>NO</th>
						<th>NAMA</th>
						<th>USERNAME</th>
						<th>EMAIL</th>
						<th>STATUS</th>
						<th colspan="22">AKSI</th>
					</tr>
				</thead>

				<?php

				$rsk = $this->db->query("SELECT * FROM tblogin1 WHERE id_level = '2'")->result();

				$no = 1;
				foreach ($rsk as $s) :

					?>

					<tbody>
						<tr class="text-center">
							<td><?php echo $no++ ?></td>
							<td><?php echo $s->nama_user ?></td>
							<td><?php echo $s->username?></td>
							<td><?php echo $s->email_user?></td>
							<td><?php echo $s->status_user?></td>
							<td colspan="2" onclick="javascript: return confirm('Yakin Hapus?') "><?php echo anchor('Dash/hapus_account_admin/' . $s->id_user, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?> 

							
						</td>
						<td>
							<?php echo anchor('Dash/edit_account_admin/' . $s->id_user, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>'); ?>
						</td>

					</tr>
				</tbody>

			<?php endforeach; ?>
		</table>
	</div>
	</div>



<!-- SELECT2 EXAMPLE -->
<div class=" card card-info mt-3">
	<div class="card-header">
		<h3 class="card-title mb-2">List Account (Admin)</h3>

		<div class="card-tools">
			<button type="button" class="btn btn-tool" data-card-widget="collapse">
				<i class="fas fa-minus"></i>
			</button>
			<button type="button" class="btn btn-tool" data-card-widget="remove">
				<i class="fas fa-times"></i>
			</button>
		</div>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<table class="table table-hover table-bordered">
			<thead>
				<tr class="text-center">

					<th>NO</th>
					<th>NAMA</th>
					<th>USERNAME</th>
					<th>EMAIL</th>
					<th>STATUS</th>
					<th colspan="22">AKSI</th>
				</tr>
			</thead>

			<?php

			$rsk = $this->db->query("SELECT * FROM tblogin1 WHERE id_level = '1'")->result();

			$no = 1;
			foreach ($rsk as $s) :

				?>

				<tbody>
					<tr class="text-center">
						<td><?php echo $no++ ?></td>
						<td><?php echo $s->nama_user ?></td>
						<td><?php echo $s->username?></td>
						<td><?php echo $s->email_user?></td>
						<td><?php echo $s->status_user?></td>
						<td> <div style="" onclick="javascript: return confirm('Yakin Hapus?') "> </div><?php echo anchor('#' . $s->id_user, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
					</td>
					<td>
						<?php echo anchor('Dash/edit_account_admin/' . $s->id_user, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>'); ?>
					</td>

				</tr>
			</tbody>

		<?php endforeach; ?>
	</table>
</div>
</div>





<!-- Modal register admin -->
<?= form_open_multipart('login/add_user_admin'); ?>

<div class="modal fade" data-bs-backdrop="static" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
	<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Creat Accaount</h1>
				<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">

				<div class="">
					<div class="form-floating mb-3">
						<input type="text" class="form-control" name="nama_user" id="floatingInput" placeholder="name@example.com">
						<label for="floatingInput">Full name</label>
					</div>
					<div class="form-floating mb-3">
						<input type="text" class="form-control" name="username" id="floatingInput" placeholder="name@example.com">
						<label for="floatingInput">Username</label>
					</div>
				</div>
				<div class="form-floating mb-3">
					<input type="email" class="form-control" name="email_user" id="floatingInput" placeholder="name@example.com">
					<label for="floatingInput">Email address</label>
				</div>
				<div class="form-floating mb-3">
					<input type="password" class="form-control" id="inputpass" name="password" placeholder="Password">
					<label for="floatingPassword">Password</label>
				</div>

				<select class="form-select mb-3" name="status_user" aria-label="Default select example">
					<option selected>Select Role</option>
					<option value="1">admin</option>
					<option value="2">user</option>
				</select>


				<div class="input-group">
					<input type="file" class="form-control" name="pic_user" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
				</div>
				<div class="form-check form-switch">
					<input class="form-check-input" type="checkbox" role="switch" onclick="lihat_password()">
					<label class="form-check-label" for="flexSwitchCheckDefault">Show Password</label>
				</div>

				<button class="btn btn-outline-primary mt-2">Created</button>

			</div>


		</div>
	</div>
</div>
<?= form_close(); ?>


<script>
	function lihat_password() {
		var x = document.getElementById("inputpass");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}
</script>

</section>
