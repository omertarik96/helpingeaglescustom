<?php
function create_role_taxonomy() {
	register_taxonomy(
		'role',
		'post',
		array(
			'label' => 'Role',
			'hierarchical' => true,
			'rewrite' => array(
				'slug' => 'role'
			)
		)
	);
}

function create_urgency_taxonomy() {
	register_taxonomy(
		'urgency',
		'post',
		array(
			'label' => 'Urgency',
			'hierarchical' => true,
			'rewrite' => array(
				'slug' => 'urgency'
			)
		)
	);
}

function create_hcclocations_taxonomy() {
	register_taxonomy(
		'hcc',
		'post',
		array(
			'label' => 'HCC Campus',
			'hierarchical' => true,
			'rewrite' => array(
				'slug' => 'hcc'
			)
		)
	);
}


