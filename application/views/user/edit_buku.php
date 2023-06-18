<?php
        $genre               = explode(',', $rsk->genre);
        ?>
<section class="content">
	<div class="container-fluid">

		<div class="card card-danger mt-3">
			<div class="card-header">
				<h3 class="card-title">G. Riwayat Vaksinasi</h3>

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
				<?= form_open_multipart('Input_all/edit_jurnal'); ?>

				<input type="hidden" name="id_buku" value="<?= $rsk->id_buku?>">


				<div class="row mb-5" style="">
						<h1 class="text-center mt-3">GENRE YOUR BOOK</h1>
					<div class="col">



						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="genre[]"  <?php if (in_array("komedi", $genre)) {
                                            echo "checked";
                                        } ?> value="komedi" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								Komedi
							</label>
						</div><div class="form-check">
							<input class="form-check-input" type="checkbox" name="genre[]" <?php if (in_array("penelitian", $genre)) {
                                            echo "checked";
                                        } ?> value="penelitian" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								Penelitian
							</label>
						</div><div class="form-check">
							<input class="form-check-input" type="checkbox" name="genre[]" <?php if (in_array("romantis", $genre)) {
                                            echo "checked";
                                        } ?> value="romantis" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								Romantis
							</label>
						</div><div class="form-check">
							<input class="form-check-input" type="checkbox" name="genre[]" <?php if (in_array("fanfiction", $genre)) {
                                            echo "checked";
                                        } ?> value="fanfiction" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								Fanfiction
							</label>
						</div><div class="form-check">
							<input class="form-check-input" type="checkbox" name="genre[]"  <?php if (in_array("Sci-Fi", $genre)) {
                                            echo "checked";
                                        } ?> value="Sci-Fi" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								Science Fiction (Fiksi Ilmiah)
							</label>
						</div><div class="form-check">
							<input class="form-check-input" type="checkbox" name="genre[]" <?php if (in_array("fantasi", $genre)) {
                                            echo "checked";
                                        } ?> value="fantasi" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								Fantasi
							</label>
						</div><div class="form-check">
							<input class="form-check-input" type="checkbox" name="genre[]" <?php if (in_array("histori", $genre)) {
                                            echo "checked";
                                        } ?> value="histori" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								Histori
							</label>
						</div>

					</div>
					<div class="col">
						
						
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="genre[]" <?php if (in_array("horor", $genre)) {
                                            echo "checked";
                                        } ?> value="horor" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								Horor
							</label>
						</div><div class="form-check">
							<input class="form-check-input" type="checkbox" name="genre[]" <?php if (in_array("drama", $genre)) {
                                            echo "checked";
                                        } ?> value="drama" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								Drama
							</label>
						</div><div class="form-check">
							<input class="form-check-input" type="checkbox" name="genre[]" <?php if (in_array("musik", $genre)) {
                                            echo "checked";
                                        } ?> value="musik" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								Musik
							</label>
						</div><div class="form-check">
							<input class="form-check-input" type="checkbox" name="genre[]" <?php if (in_array("mecha", $genre)) {
                                            echo "checked";
                                        } ?> value="mecha" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								Mecha
							</label>
						</div><div class="form-check">
							<input class="form-check-input" type="checkbox" name="genre[]" <?php if (in_array("militer", $genre)) {
                                            echo "checked";
                                        } ?> value="militer" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								Militer
							</label>
						</div><div class="form-check">
							<input class="form-check-input" type="checkbox" name="genre[]" <?php if (in_array("megic", $genre)) {
                                            echo "checked";
                                        } ?> value="megic" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								Megic
							</label>
						</div><div class="form-check">
							<input class="form-check-input" type="checkbox" name="genre[]"  <?php if (in_array("food", $genre)) {
                                            echo "checked";
                                        } ?> value="food" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								Food
							</label>
						</div>

					</div><div class="col">
						
						
						<div class="form-check">
							<input class="form-check-input" type="checkbox" name="genre[]" <?php if (in_array("spiritual", $genre)) {
                                            echo "checked";
                                        } ?> value="spiritual" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								Spiritual
							</label>
						</div><div class="form-check">
							<input class="form-check-input" type="checkbox" name="genre[]" <?php if (in_array("humor", $genre)) {
                                            echo "checked";
                                        } ?> value="humor" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								Humor
							</label>
						</div><div class="form-check">
							<input class="form-check-input" type="checkbox" name="genre[]" <?php if (in_array("misteri", $genre)) {
                                            echo "checked";
                                        } ?> value="misteri" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								Misteri
							</label>
						</div><div class="form-check">
							<input class="form-check-input" type="checkbox" name="genre[]" <?php if (in_array("puisi", $genre)) {
                                            echo "checked";
                                        } ?> value="puisi" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								Puisi
							</label>
						</div><div class="form-check">
							<input class="form-check-input" type="checkbox" name="genre[]" <?php if (in_array("klasik", $genre)) {
                                            echo "checked";
                                        } ?> value="klasik" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								Klasik
							</label>
						</div><div class="form-check">
							<input class="form-check-input" type="checkbox" name="genre[]" <?php if (in_array("adventure", $genre)) {
                                            echo "checked";
                                        } ?> value="adventure" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								Adventure
							</label>
						</div><div class="form-check">
							<input class="form-check-input" type="checkbox" name="genre[]" <?php if (in_array("motivasi", $genre)) {
                                            echo "checked";
                                        } ?> value="motivasi" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheckDefault">
								Motivasi
							</label>
						</div>

					</div>
				</div>

				<textarea name="isi_buku" id="editor"><?= $rsk->isi_buku ?></textarea>

				<br>

				<div class="mb-3">
					<label for="formFile" class="form-label">Sampul Buku</label>
					<input class="form-control" type="file" id="formFile" name="sampul">
				</div>


				<button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane "> Submit</i></button>



				<?= form_close(); ?>
			</div>
		</section>


		<script src=" <?=base_url('assets/ennocuy/enno/')?>assets/tinymce/tinymce.min.js"></script>

		<script>
			tinymce.init({
				forced_root_block : false,
				selector: '#editor',
				width: 1000,
				height: 300,
				plugins: [
					'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
					'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
					'media', 'table', 'emoticons', 'template', 'help'
					],
				toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
				'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
				'forecolor backcolor emoticons | help',
				menu: {
					favs: { title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons' }
				},
				menubar: 'favs file edit view insert format tools table help',
				content_css: 'css/content.css' 
			});
		</script>