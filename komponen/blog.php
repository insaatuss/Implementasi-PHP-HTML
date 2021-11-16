<!--grid system bagian 2-->
<div id="blog" class="py-5">
	
	<div class="container">
		
		<div class="row">

			<!--box -->
			<!-- foreach :

					Untuk setiap => $artikel menjadi $data
			 -->
			<? foreach ($artikel as $data) {
				
				require('kecil/blog_card.php');
			}?>

		</div>

	</div>

</div>