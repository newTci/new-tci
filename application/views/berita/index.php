<div class="col-sm-8 no-gutter col-lg-10">
	<div class="big-divider">
		<span class="text-divider">Berita</span>
	</div>
	<div class="row no-margin">
		<div class="col-sm-2 text-left no-gutter">
			<span class="interaksi-side-text">Trending</span>
		</div>
		<div class="col-sm-2 col-sm-offset-8 text-right no-gutter">
			<span class="interaksi-side-text">Rekomen</span>
		</div>
	</div>
	<div class="row no-margin">
		<div class="col-lg-2 col-sm-2 col-md-2 no-gutter">
			<div class="wrapper-box">
				<span class="hashtag">#ahok</span>
			</div>
			<div class="wrapper-box">
				<span class="hashtag">#ahok</span>
			</div>
			<div class="wrapper-box">
				<span class="hashtag">#ahok</span>
			</div>
		</div>
		<div class="col-lg-8 col-sm-8 col-md-8 no-gutter">
			<div class="col-lg-6 col-md-12">
				<div class="wrapper-berita">
					<h5 class="title-berita">
						Communication
					</h5>
					<?php foreach ($communication as $val) {?>
					<div class="rel">
						<i class="abs-icon fa fa-chevron-right" aria-hidden="true"></i>
						<a href="#" data-judul="<?php echo $val->judul; ?>" class="konten-berita"><?php echo $val->judul; ?></a>
					</div>
					<?php } ?>
					<div class="text-right"><button class="more-berita-btn" data-kategori="communication" class="paging-berita">MORE</button></div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="wrapper-berita">
					<h5 class="title-berita">
						Creative
					</h5>
					<?php foreach ($creative as $val) {?>
						<div class="rel">
							<i class="abs-icon fa fa-chevron-right" aria-hidden="true"></i>
							<a href="#" data-judul="<?php echo $val->judul; ?>" class="konten-berita"><?php echo $val->judul; ?></a>
						</div>
					<?php } ?>
					<div class="text-right"><a href="#" class="paging-berita">MORE</a></div>
				</div>
			</div>
			<div class="divider-konten col-lg-12 col-sm-12 col-md-12"></div>
			<div class="col-lg-6 col-md-12">
				<div class="wrapper-berita">
					<h5 class="title-berita">
						Finance
					</h5>
					<?php foreach ($finance as $val) {?>
						<div class="rel">
							<i class="abs-icon fa fa-chevron-right" aria-hidden="true"></i>
							<a href="#" data-judul="<?php echo $val->judul; ?>" class="konten-berita"><?php echo $val->judul; ?></a>
						</div>
					<?php } ?>
					<div class="text-right"><a href="#" class="paging-berita">MORE</a></div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="wrapper-berita">
					<h5 class="title-berita">
						Health
					</h5>
					<?php foreach ($health as $val) {?>
						<div class="rel">
							<i class="abs-icon fa fa-chevron-right" aria-hidden="true"></i>
							<a href="#" data-judul="<?php echo $val->judul; ?>" class="konten-berita"><?php echo $val->judul; ?></a>
						</div>
					<?php } ?>
					<div class="text-right"><a href="#" class="paging-berita">MORE</a></div>
				</div>
			</div>
			<div class="divider-konten col-lg-12 col-sm-12 col-md-12"></div>
			<div class="col-lg-6 col-md-12">
				<div class="wrapper-berita">
					<h5 class="title-berita">
						Social
					</h5>
					<?php foreach ($social as $val) {?>
						<div class="rel">
							<i class="abs-icon fa fa-chevron-right" aria-hidden="true"></i>
							<a href="#" data-judul="<?php echo $val->judul; ?>" class="konten-berita"><?php echo $val->judul; ?></a>
						</div>
					<?php } ?>
					<div class="text-right"><a href="#" class="paging-berita">MORE</a></div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="wrapper-berita">
					<h5 class="title-berita">
						Technology
					</h5>
					<?php foreach ($technology as $val) {?>
						<div class="rel">
							<i class="abs-icon fa fa-chevron-right" aria-hidden="true"></i>
							<a href="#" data-judul="<?php echo $val->judul; ?>" class="konten-berita"><?php echo $val->judul; ?></a>
						</div>
					<?php } ?>
					<div class="text-right"><a href="#" class="paging-berita">MORE</a></div>
				</div>
			</div>
		</div>
		<div class="col-lg-2 col-sm-2 col-md-2 no-gutter">
			<div class="wrapper-box">
				<span class="hashtag">#ahok</span>
			</div>
			<div class="wrapper-box">
				<span class="hashtag">#ahok</span>
			</div>
			<div class="wrapper-box">
				<span class="hashtag">#ahok</span>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(".more-berita-btn").click(function(event) {
 		var kategori = $(this).data('kategori');
 		$.ajax(
            {
                type:"post",
                url: "<?php echo base_url(); ?>tambah_berita",
                data:{kategori:kategori},
                success:function(response)
                {
                    console.log(response);
                }
            }
        );
 	});
</script>