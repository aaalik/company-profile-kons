<div id="myCarousel" class="carousel slide" data-ride="carousel">
    		<!-- Indicators -->
    		<ol class="carousel-indicators">
     		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      		<li data-target="#myCarousel" data-slide-to="1"></li>
      		<li data-target="#myCarousel" data-slide-to="2"></li>
    		</ol>

    		<!-- Wrapper for slides -->
    <div class="carousel-inner">
       <div class="item active">
          <img src="<?php echo base_url()?>asset/img/hero-slide-1.jpg" alt="Los Angeles" style="width:100%;">
         </div>

         <div class="item">
           <img src="<?php echo base_url()?>asset/img/hero-slide-2.jpg" alt="Chicago" style="width:100%;">
         </div>
    
         <div class="item">
           <img src="<?php echo base_url()?>asset/img/hero-slide-3.jpg" alt="New york" style="width:100%;">
         </div>
       </div>

       <!-- Left and right controls -->
       <a class="left carousel-control" href="#myCarousel" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="right carousel-control" href="#myCarousel" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right"></span>
         <span class="sr-only">Next</span>
       </a>
    </div>
</div>	
<br>	
<br>	

<div class="container">	

   	<div class="col-md-12">
		<h3>Paket-paket</h3>
	</div>

	<div class="row">

		<?php foreach ($row->result() as $key) {?>
			<div class="col-md-4 ">
				<a href="<?php echo base_url('c_paket/detail/'.$key->url_title)?>">
					<div class="card h-100">
						<img class="card-img-top" style="width: 350px" src="http://placehold.it/700x400" alt="">
						<div class="card-body">
							<h4 class="card-title"><?php echo $key->title?></h4>
							<span class="label label-primary"><?php echo $key->tgl_berangkat?></span>
							<p class="card-text" style="color: black;">Mulai dari USD<?php echo $key->harga?>/orang</p>
						</div>
					</div>
				</a>
			</div>
		<?php } ?>

	</div>
</div>

