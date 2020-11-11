
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
35
<div class="dropdown-product-item">
	<span class="dropdown-product-remove">
    	<a  class="remove-from-cart" rel="nofollow" href="{$product.remove_from_cart_url}" data-link-action="remove-from-cart" title="{l s='remove from cart' d='Shop.Theme.Actions'}"
        ><i class="material-icons">&#xe5cd;</i>
		</a>
	</span>
    {if $product.images}
        <img class="dropdown-product-thumb" src="{$product.images.0.bySize.small_default.url}" title="{$product.name}"/>
    {/if}
    <div class="dropdown-product-info">
        <a class="dropdown-product-title" href="shop-single.html">{$product.name|truncate:20:'...'}</a>
        <span class="dropdown-product-details">{$product.quantity} x {$product.price}</span>
        {if $product.customizations|count}
            <span class="dropdown-product-details">
        <ul>
            {foreach from=$product.customizations item='customization'}
                <li>
                    <ul>
                        {foreach from=$customization.fields item='field'}
                            <li>
                                {if $field.type == 'text'}
                                    <span>{$field.text nofilter}</span>
                                {else if $field.type == 'image'}
                                    <img src="{$field.image.small.url}">
                                {/if}
                            </li>
                        {/foreach}
                    </ul>
                </li>
            {/foreach}
        </ul>
    </span>
        {/if}
    </div>
</div>

<div id="_desktop_cart">
    <div class="blockcart cart-preview {if $cart.products_count > 0}active{else}inactive{/if}" data-refresh-url="{$refresh_url}">
        <div class="dropdown">
            <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons shopping-cart">shopping_cart</i>
                <span class="hidden-sm-down">{l s='Cart' d='Shop.Theme.Checkout'}</span>
                <span class="cart-products-count">({$cart.products_count})</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <div class="toolbar-dropdown">
                    {if $cart.products_count > 0}
                    {foreach from=$cart.products item=product}
                        {include 'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' product=$product}
                    {/foreach}
                    <div class="toolbar-dropdown-group">
                        {foreach from=$cart.subtotals item="subtotal"}
                            <div class="col-xs-6">{$subtotal.label}</span></div>
                            <div class="col-xs-6 text-right">{$subtotal.value}</div>
                        {/foreach}
                        <div class="col-xs-6">{$cart.totals.total.label}</div>
                        <div class="col-xs-6 text-right">{$cart.totals.total.value}</div>
                    </div>
                </div>
                <div class="toolbar-dropdown-total">
                    <a class="btn-checkout btn btn-primary" href="{$urls.pages.order}">{l s='Check Out' d='Shop.Theme.Actions'}</a>
                    <a class="btn-view btn btn-secondary" href="{$cart_url}">{l s='View cart' d='Shop.Theme.Actions'}</a>
                </div>
                {else}
                <p>{l s='Your cart is empy' d='Shop.Theme.Actions'}</p>
                {/if}
            </div>
        </div>
    </div>
</div>
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
24
25
26
27
28
29
30
31
32
33
34
<div id="_desktop_cart">
    <div class="blockcart cart-preview {if $cart.products_count > 0}active{else}inactive{/if}" data-refresh-url="{$refresh_url}">
        <div class="dropdown">
            <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="material-icons shopping-cart">shopping_cart</i>
                <span class="hidden-sm-down">{l s='Cart' d='Shop.Theme.Checkout'}</span>
                <span class="cart-products-count">({$cart.products_count})</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <div class="toolbar-dropdown">
                    {if $cart.products_count > 0}
                    {foreach from=$cart.products item=product}
                        {include 'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl' product=$product}
                    {/foreach}
                    <div class="toolbar-dropdown-group">
                        {foreach from=$cart.subtotals item="subtotal"}
                            <div class="col-xs-6">{$subtotal.label}</span></div>
                            <div class="col-xs-6 text-right">{$subtotal.value}</div>
                        {/foreach}
                        <div class="col-xs-6">{$cart.totals.total.label}</div>
                        <div class="col-xs-6 text-right">{$cart.totals.total.value}</div>
                    </div>
                </div>
                <div class="toolbar-dropdown-total">
                    <a class="btn-checkout btn btn-primary" href="{$urls.pages.order}">{l s='Check Out' d='Shop.Theme.Actions'}</a>
                    <a class="btn-view btn btn-secondary" href="{$cart_url}">{l s='View cart' d='Shop.Theme.Actions'}</a>
                </div>
                {else}
                <p>{l s='Your cart is empy' d='Shop.Theme.Actions'}</p>
                {/if}
            </div>
        </div>
    </div>
</div>

<div class="toolbar-dropdown-group">
    {foreach from=$cart.subtotals item="subtotal"}
        <div class="col-xs-6">{$subtotal.label}</span></div>
        <div class="col-xs-6 text-right">{$subtotal.value}</div>
    {/foreach}
    <div class="col-xs-6">{$cart.totals.total.label}</div>
    <div class="col-xs-6 text-right">{$cart.totals.total.value}</div>
</div>
<div class="toolbar-dropdown-group">
    <div class="col-xs-6">{l s='Total' d='Shop.Theme.Actions'}</span></div>
    <div class="col-xs-6 text-right">{$cart.subtotals.products.value}</div>
</div>