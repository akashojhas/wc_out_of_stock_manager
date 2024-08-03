<div class="shivg-stock-option-main-wrp">  
<div class="wrap"><h1>Stock Values Configurator</h1></div>
    <form method="post" action="' . admin_url( 'admin-post.php' ) . '">
        <div class="shivg-stock-option-hidden-field">
            <input type="hidden" id="_shivg_screen" name="_shivg_screen" value="options" class="shivg">
		    <input type="hidden" id="_shivg_post_id" name="_shivg_post_id" value="options" class="shivg">
		    <input type="hidden" id="_shivg_validation" name="_shivg_validation" value="" class="shivg">
		    <input type="hidden" id="_shivg_nonce" name="_shivg_nonce" value="" class="shivg">
		    <input type="hidden" id="_shivg_changed" name="_shivg_changed" value="" class="shivg">
        </div>
        <div class="shivg-stock-option-inner">
        <h2 class="sh-so-head">WooCommerce Out of Stock ! - Configure Stock Thresholds</h2>
        <button type="button" class="sh-so-toggle-btn">
         <span class="toggle-icon" aria-hidden="true"></span>
        </button>
        
        </div>  
        
    <input type="hidden" name="action" value="save_stock_values">
    <input type="hidden" name="_wpnonce" value="' . wp_create_nonce( 'save_stock_values' ) . '">
    <p><label for="stock_value_1">Stock Value 1:</label>
    <input type="text" id="stock_value_1" name="stock_value_1" value="' . esc_attr( $stock_value_1 ) . '"></p>
    <p><label for="stock_value_2">Stock Value 2:</label>
    <input type="text" id="stock_value_2" name="stock_value_2" value="' . esc_attr( $stock_value_2 ) . '"></p>
    <p><input type="submit" value="Save"></p>
    </form>
</div>