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
					<div class="wrapper-inside-berita">
						<?php foreach ($communication as $val) {?>
						<div class="rel">
							<i class="abs-icon fa fa-chevron-right" aria-hidden="true"></i>
							<a href="<?php echo base_url()."berita/".$val->nama_kupasprofesi."/".$val->id_berita."-".$val->judul; ?>" data-judul="<?php echo $val->judul; ?>" data-kategori="<?php echo $val->nama_kupasprofesi?>" data-id="<?php echo $val->id_berita; ?>" class="konten-berita"><?php echo $val->judul; ?></a>
						</div>
						<?php } ?>
					</div>
					<div class="text-right"><button class="more-berita-btn" data-kategori="communication" class="paging-berita">MORE</button></div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="wrapper-berita">
					<h5 class="title-berita">
						Creative
					</h5>
					<div class="wrapper-inside-berita">
						<?php foreach ($creative as $val) {?>
							<div class="rel">
								<i class="abs-icon fa fa-chevron-right" aria-hidden="true"></i>
								<a href="#" data-kategori="<?php echo $val->nama_kupasprofesi?>" data-judul="<?php echo $val->judul; ?>" data-id="<?php echo $val->id_berita; ?>" class="konten-berita"><?php echo $val->judul; ?></a>
							</div>
						<?php } ?>
					</div>
					<div class="text-right"><button class="more-berita-btn" data-kategori="creative" class="paging-berita">MORE</button></div>
				</div>
			</div>
			<div class="divider-konten col-lg-12 col-sm-12 col-md-12"></div>
			<div class="col-lg-6 col-md-12">
				<div class="wrapper-berita">
					<h5 class="title-berita">
						Finance
					</h5>
					<div class="wrapper-inside-berita">
						<?php foreach ($finance as $val) {?>
							<div class="rel">
								<i class="abs-icon fa fa-chevron-right" aria-hidden="true"></i>
								<a href="#" data-kategori="<?php echo $val->nama_kupasprofesi?>" data-judul="<?php echo $val->judul; ?>" data-id="<?php echo $val->id_berita; ?>" class="konten-berita"><?php echo $val->judul; ?></a>
							</div>
						<?php } ?>
					</div>
					<div class="text-right"><button class="more-berita-btn" data-kategori="finance" class="paging-berita">MORE</button></div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="wrapper-berita">
					<h5 class="title-berita">
						Health
					</h5>
					<div class="wrapper-inside-berita">
						<?php foreach ($health as $val) {?>
							<div class="rel">
								<i class="abs-icon fa fa-chevron-right" aria-hidden="true"></i>
								<a href="#" data-kategori="<?php echo $val->nama_kupasprofesi?>" data-judul="<?php echo $val->judul; ?>" data-id="<?php echo $val->id_berita; ?>" class="konten-berita"><?php echo $val->judul; ?></a>
							</div>
						<?php } ?>
					</div>
					<div class="text-right"><button class="more-berita-btn" data-kategori="health" class="paging-berita">MORE</button></div>
				</div>
			</div>
			<div class="divider-konten col-lg-12 col-sm-12 col-md-12"></div>
			<div class="col-lg-6 col-md-12">
				<div class="wrapper-berita">
					<h5 class="title-berita">
						Social
					</h5>
					<div class="wrapper-inside-berita">
						<?php foreach ($social as $val) {?>
							<div class="rel">
								<i class="abs-icon fa fa-chevron-right" aria-hidden="true"></i>
								<a href="#" data-kategori="<?php echo $val->nama_kupasprofesi?>" data-judul="<?php echo $val->judul; ?>" data-id="<?php echo $val->id_berita; ?>" class="konten-berita"><?php echo $val->judul; ?></a>
							</div>
						<?php } ?>
					</div>
					<div class="text-right"><button class="more-berita-btn" data-kategori="social" class="paging-berita">MORE</button></div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12">
				<div class="wrapper-berita">
					<h5 class="title-berita">
						Technology
					</h5>
					<div class="wrapper-inside-berita">
						<?php foreach ($technology as $val) {?>
							<div class="rel">
								<i class="abs-icon fa fa-chevron-right" aria-hidden="true"></i>
								<a href="#" data-kategori="<?php echo $val->nama_kupasprofesi?>" data-judul="<?php echo $val->judul; ?>" data-id="<?php echo $val->id_berita; ?>" class="konten-berita"><?php echo $val->judul; ?></a>
							</div>
						<?php } ?>
					</div>
					<div class="text-right"><button class="more-berita-btn" data-kategori="technology" class="paging-berita">MORE</button></div>
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
	var endpoint_health, endpoint_communication,endpoint_finance,endpoint_social,endpoint_technology,endpoint_creative;
	endpoint_health = 0;
	endpoint_communication=0;
	endpoint_finance=0;
	endpoint_social=0;
	endpoint_technology=0;
	endpoint_creative=0;
	$.each($(".konten-berita"), function(index, el) {
		var str = $(this).text()
		str = "<?php echo base_url();?>berita/" + $(this).data('kategori') + "/" + $(this).data('id') + "/" + str.replace(/\s+/g, '-').replace(',','-');
		$(this).attr({
			href: str
		});
	});

	$(".more-berita-btn").click(function(event) {
		var parent = $(this).parent('div.text-right')
		var wrapper = parent.siblings('.wrapper-inside-berita')
		var elem = wrapper.find('.rel').eq(0);
 		var kategori = $(this).data('kategori');
 		var btn = $(this)
		var endpoint = (increment(kategori, 0) == 0) ? increment(kategori, 9) : increment(kategori, 0)
		btn.attr('disabled', true);
 		$.ajax(
            {
                type:"post",
                url: "<?php echo base_url(); ?>tambah_berita",
                data:{
        				kategori:kategori,
        				endpoint:endpoint
                },
                success:function(response)
                {
                	//$(".buffering").fadeOut('fast');
                	btn.attr('disabled', false);
                	if ( response.length == 0 ) {
                		btn.fadeOut('fast');
				    }
                	increment(kategori, 5);
					$.each(response, function(index, el) {
						appendjudul(wrapper,elem,el.judul, el.id_berita, el.nama_kupasprofesi)
					});
					ellipsis();
					$.each($(".dnone"), function(index, el) {
						$(this).show("slow")
					});
					$.each($(".konten-berita-append"), function(index, el) {
						$(this).removeClass('konten-berita-append')
					});
                }
            }
        );
 	});

 	function increment(endpoint, result) {
 		var text;
 		switch (endpoint) {
 			case "health":
 				endpoint_health += result;
 				text = endpoint_health
 				break;
 			case "communication":
 				endpoint_communication += result;
 				text = endpoint_communication
 				break;
 			case "technology":
 				endpoint_technology += result
 				text = endpoint_technology
 				break;
 			case "creative":
 				endpoint_creative += result;
 				text = endpoint_creative
 				break;
 			case "social":
 				endpoint_social += result;
 				text = endpoint_social
 				break;
 			case "finance":
 				endpoint_finance += result
 				text = endpoint_finance
 				break;
 		}
 		return text;
	}

	function appendjudul(parent, selector, judul, id, kategori){
		var str = judul
		str = str.replace(/\s+/g, '-').replace(',','-');
		var elem = $("<div><i class='abs-icon fa fa-chevron-right' aria-hidden='true'></i><a></a></div>")
		.addClass('rel dnone')
		.find("a")
		.addClass('konten-berita konten-berita-append')
		.attr("href", "<?php echo base_url(); ?>berita/"+kategori+"/"+id+"/"+str)
		.data('judul', judul)
		.html(judul)
		.end()
		.appendTo(parent)
	}

	function ellipsis(){
		$('.konten-berita-append').each(function() {
	    var text = $(this).text();
	   	
		if(text.length > 14) {
		 	var trimmedString = text.substr(0, 24);
	    	trimmedString = trimmedString.substr(0, Math.min(trimmedString.length, trimmedString.lastIndexOf(" ")))
			$(this).text(trimmedString + '...')
			//$(this).text(text.substring(0, 18) + '..')
		}
		});
	}

	
</script>