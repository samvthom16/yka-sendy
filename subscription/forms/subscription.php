
<form method="POST"  data-behaviour="yka-sendy-form" data-url="<?php _e($ajax_url);?>" content="text/html; charset=utf-8" data-token="<?php _e($nonce);?>" >

	<?php
		
		$html = "";
		$builder = ELEMENT_BUILDER::get_instance();
		
		foreach ($fields as $field) {
			$html .= $builder->get_form_element( $field );
		}

		echo $html;
	?>
	
	<div>
		<input type="hidden" name="list" value="<?php _e($args['id']); ?>"/>
		<input type="hidden" name="fields" value="<?php _e( implode(',', array_map( 'trim', explode( ',', $args['fields']) ) ) ); ?>" />
	</div>
	<div>
		<button type="submit" class="btn btn-primary sendy-sub-btn">Subscribe <i class="fa fa-refresh fa-spin" style="display:none"></i></button>
	</div>
	<div class="sendy-status space-one"></div>
</form>