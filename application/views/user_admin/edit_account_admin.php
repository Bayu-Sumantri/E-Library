<?= form_open_multipart('login/edit_user_admin'); ?>
<section class="content">
	<div class="container-fluid">

		<style>
			.avatar {
				vertical-align: middle;
				width: 100px;
				height: 100px;
				border-radius: 50%;
			}
		</style>
		<h1 class="mt-3 text-center">Edit Account User</h1>


		<input type="hidden" name="id_user" value="<?=$user->id_user?>" readonly class="form-control">



		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col">
						<h4>Avatar</h5>
						</div>

						<div class="col">
							<div class="d-flex flex-row-reverse">
								<div class="p-2"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#profil"><i class="fa"> Ganti</i></button>
								</div>
								<div class="p-2"><button class="btn btn-danger"><i class="fa">Hapus</i></button></div>
							</div>
						</div>
						<!-- .row end -->
					</div>

					<img src="<?=base_url('assets/ennocuy/foto/'.$user->pic_user)?>" class="avatar" size="1" alt="...">

					<!-- Modal -->
					<div class="modal fade" id="profil" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="staticBackdropLabel">Ganti Foto</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="input-group">
										<input type="file" class="form-control" id="inputGroupFile04" name="pic_user" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
									<button type="submit" class="btn btn-primary">Simpan</button>
								</div>
							</div>
						</div>
					</div>



				</div>
			</div>

			<div class="card">
				<div class="card-body">

					<div class="row">
						<div class="col">
							<h4>Profile Settings</h5>
							</div>

							<div class="col">
								<div class="d-flex flex-row-reverse">
									<div class="p-2"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#email"><i class="fa"> Ganti</i></button>
									</div>
								</div>
							</div>
							<!-- .row end -->
						</div>

						<p>Your Name : <input type="text" name="nama_user" value="<?=$user->nama_user?>" readonly class="form-control"></p>
						<p>Your Email : <input type="text" name="email_user" value="<?=$user->email_user?>" readonly class="form-control"></p>
						<p>Role Account : <select class="form-select" aria-label="Default select example" name="id_level" disabled>
											<option >Role Account</option>
											<option value="1" <?php if ($user->id_level == '1') {
												echo "selected";
											} ?>>Admin</option>
											<option value="2" <?php if ($user->id_level == '2') {
												echo "selected";
											} ?>>User</option>
										</select></p>


						<!-- Modal -->
						<div class="modal fade" id="email" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="staticBackdropLabel">Ganti Email</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">


										<div class="form-floating mb-3">
											<input type="text" name="nama_user" class="form-control" id="floatingInput" value="<?=$user->nama_user?>" placeholder="New User">
											<label for="floatingInput">New Name</label>
										</div>

										<div class="form-floating mb-3">
											<input type="email" name="email_user" class="form-control" id="floatingInput" value="<?=$user->email_user?>" placeholder="New Email">
											<label for="floatingInput">New Email</label>
										</div>

										<select class="form-select" aria-label="Default select example" name="id_level">
											<option selected>Role Account</option>
											<option value="1" <?php if ($user->id_level == '1') {
												echo "selected";
											} ?>>Admin</option>
											<option value="2" <?php if ($user->id_level == '2') {
												echo "selected";
											} ?>>User</option>
										</select>



									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
										<button type="submit" class="btn btn-primary">Simpan</button>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>


				<div class="card">
					<div class="card-body">

						<div class="row">
							<div class="col">
								<h4>Password</h5>
								</div>

								<div class="col">
									<div class="d-flex flex-row-reverse">
										<div class="p-2"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#password"><i class="fa"> Ganti</i></button>
										</div>
									</div>
								</div>
								<!-- .row end -->
							</div>

							<p>Your Password : <input type="text" placeholder="**************" readonly class="form-control"></p>

							<!-- Modal -->
							<div class="modal fade" id="password" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="staticBackdropLabel">Ganti Password</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">


											<div class="form-floating mb-3">
												<input type="password" name="password" class="form-control" id="floatingInput" placeholder="New Password" autocomplete="off">
												<label for="floatingInput">New Password</label>
											</div>




										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
											<button type="submit" class="btn btn-primary">Simpan</button>
										</div>
									</div>
								</div>
							</div>


						</div>
					</div>


				</div>

			</section>
			<?= form_close(); ?>