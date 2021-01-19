   <?php include 'layouts/header.php';
    
         ?>

	 
	 <div id="contact-page" class="container">
    	<div class="bg">   	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Contactează-ne</h2>
	    				<div class="status alert alert-success" style="display: none"></div>
				    	<form id="main-contact-form" class="contact-form row" name="contact-form" method="POST" action="add_contact.php">
				            <div class="form-group col-md-6" action="add_contact.php">
				                <input type="text" name="nume" class="form-control" required="required" placeholder="Nume">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="subiect" class="form-control" required="required" placeholder="Subiect">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="mesaj" id="mesaj" required="required" class="form-control" rows="8" placeholder="Mesajul dumneavoastră"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" class="btn btn-primary pull-right" value="Trimite">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Contacte</h2>
	    				<address>
	    					<p>SRL "Yolo Shop"</p>
							<p>str.Cuza Vodă 20</p>
							<p>Chisinau, Moldova</p>
							<p>Mobile: +373 69 371 305</p>
							<p>Email: info@yoloshop.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Rețele de socializare</h2>
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div>

<?php include'layouts/footer.php' ?>