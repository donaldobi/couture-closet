@props( [
	'product_id'   => '',
	'quantity'     => '',
	'button_class' => '',
] )

<cc-add-to-cart-button product-id="{{ $product_id }}" quantity="{{ $quantity }}" class="d-none d-sm-inline">
	<button class="{{ $button_class }}" style="border: none; background: none; background-image: none;">Add to cart</button>
</cc-add-to-cart-button>
