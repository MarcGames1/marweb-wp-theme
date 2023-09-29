<?php
function marweb_register_block_patterns_category() {
	register_block_pattern_category(
		'marweb',
		array(
			'label' => esc_html__( 'MarWeb', 'marweb' ),
		)
	);
}
