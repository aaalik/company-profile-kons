
<!--======================IMG===============-->
<div class="container" >
<div class="text-center">
      <img src="<?php echo base_url()?>asset/img/logo1.jpg" style="width:900px ; height:400px ; margin:0 auto" alt="New York">
      <div class="carousel-caption">
      
      </div>
    </div>
  </div>
  </div>
  <br>
  
<!-- ========================PILLS=========================== -->
<div class="container">
  <ul class="nav nav-tabs  nav-justified">
    <li class="active"><a data-toggle="tab" href="#menu1">DESKRIPSI</a></li>
    <li><a data-toggle="tab" href="#menu2">ITINERARY</a></li>
    <li><a data-toggle="tab" href="#menu3">FASILITAS</a></li>
    <li><a data-toggle="tab" href="#menu4">KETENTUAN</a></li>
  </ul>

  <div class="tab-content">
    <div id="menu1" class="tab-pane fade in active">
      <h3>DESKRIPSI</h3>
      <p><?php echo nl2br($row->deskripsi)?></p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>ITINERARY</h3>
      <p><?php echo nl2br($row->itinerary)?></p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>FASILITAS</h3>
      <p><?php echo nl2br($row->fasilitas)?></p>
    </div>
    <div id="menu4" class="tab-pane fade">
      <h3>KETENTUAN</h3>
      <p><?php echo nl2br($row->ketentuan)?></p>
    </div>
  </div>
</div>

<!-- ============================Paketttt================================== -->
<div class="container">	

<div class="col-md-12">
 <h3>Paket-paket</h3>
</div>

<div class="row">
 <div class="col-md-4 ">
       <div class="card h-100">
         <a href="#"><img class="card-img-top" style="width: 350px" src="http://placehold.it/700x400" alt=""></a>
         <div class="card-body">
           <h4 class="card-title">
             <a href="#">Project One</a>
           </h4>
           <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
         </div>
       </div>
 </div>

 <div class="col-md-4 ">
       <div class="card h-100">
         <a href="#"><img class="card-img-top" style="width: 350px" src="http://placehold.it/700x400" alt=""></a>
         <div class="card-body">
           <h4 class="card-title">
             <a href="#">Project One</a>
           </h4>
           <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
         </div>
       </div>
 </div>

 <div class="col-md-4 ">
       <div class="card h-100">
         <a href="#"><img class="card-img-top" style="width: 350px" src="http://placehold.it/700x400" alt=""></a>
         <div class="card-body">
           <h4 class="card-title">
             <a href="#">Project One</a>
           </h4>
           <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
         </div>
       </div>
 </div>
</div>
</div>
