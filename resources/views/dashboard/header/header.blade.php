<!-- header -->
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="{{ route('special') }}">Today's special Offers !</a>
		</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		<div class="product_list_header">
			<form action="#" method="post" class="last">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="View your cart" class="button" />
                </fieldset>
            </form>
		</div>
		<div class="w3l_header_right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
								<li><a href="{{ route('login') }}">Login</a></li>
								<li><a href="{{ route('register') }}">Sign Up</a></li>
							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="w3l_header_right1">
			<h2><a href="mail.html">Contact Us</a></h2>
		</div>
		<div class="clearfix"> </div>
	</div>

	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="index.html"><span>Grocery</span> Store</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
          <li><a href="{{route('index')}}">Home</a><i>/</i></li>
					<li><a href="{{ route('events') }}">Events</a><i>/</i></li>
					<li><a href="{{route('about')}}">About Us</a><i>/</i></li>
					<li><a href="{{route('bestdeal')}}">Best Deals</a><i>/</i></li>
					<li><a href="{{route('service')}}">Services</a></li>
				</ul>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:01720972180">(+880) 01720972180</a></li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:shakil@techknightsolutions.com">shakil@techknightsolutions.com</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
