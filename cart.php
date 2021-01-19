<?php include 'layouts/header.php'; ?>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Acasă</a></li>
				  <li class="active">Coș</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Produs</td>
							<td class="description"></td>
							<td class="price">Preț</td>
							<td class="quantity">Cantitate</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td>
							
							

							
							
					</tbody>
				</table>
			</div>
		</div>
	</section> 

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Specificați datele personale</h3>
				
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_info">
							<li class="field adress_field">
								<label>Adresa:</label>
								<input type="text">
								<label>Nume</label>
								<input type="text">
								<label>Prenume</label>
								<input type="text">
								<label>Email</label>
								<input type="text">
							</li>
							
						</ul>
						<a class="btn btn-default update" href="checkout.html">Finalizarea comenzii</a>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>

	

<?php include 'layouts/footer.php'; ?>