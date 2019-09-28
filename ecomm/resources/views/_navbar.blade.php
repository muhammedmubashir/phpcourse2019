<!-- 
<ul class="main-nav nav navbar-nav">
	<li class="active"><a href="#">Home</a></li>
	<li><a href="#">Hot Deals</a></li>
	<li><a href="#">Categories</a></li>
	<li><a href="#">Laptops</a></li>
	<li><a href="#">Smartphones</a></li>
	<li><a href="#">Cameras</a></li>
	<li><a href="#">Accessories</a></li>
</ul>
 -->
<ul class="main-nav nav navbar-nav">

@foreach($categoryList as $category)
	<li> 
	<a href="productlist/{{ $category->category_id }}">
		{{ $category->name }}
	</a>
	</li>
@endforeach
</ul>