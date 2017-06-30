<?php

return array(

	'extend' => 'Extensions',

	'fields' => 'Champs personnalisés',
	'fields_desc' => 'Créer des champs additionnels',

	'pagetypes' => 'Type de page du site',
	'pagetypes_desc' => 'Créer des types de pages',

	'variables' => 'Variables du site',
	'variables_desc' => 'Créer des variables additionnelles',

	'create_field' => 'Créer un champ',
	'editing_custom_field' => 'Edition du champ &ldquo;%s&rdquo;',
	'nofields_desc' => 'Aucun champ pour l\'instant',

	'create_variable' => 'Créer une variable',
	'editing_variable' => 'Édition de la variable &ldquo;%s&rdquo;',
	'novars_desc' => 'Aucune variable pour l\'instant',

	'create_pagetype' => 'Créer un nouveau type de page',
	'editing_pagetype' => 'Modifier un type de page &ldquo;%s&rdquo;',

	// form fields
	'type' => 'Type ',
	'type_explain' => 'Le type de contenu destiné à ce nouveau champ.',
	'notypes_desc' => 'Aucun type de page pour l\'instant.',

	'pagetype' => 'Type de page',
	'pagetype_explain' => 'Le type de page que vous voullez associer à ce champ.',

	'field' => 'Champ ',
	'field_explain' => 'Type de champ HTML',

	'key' => 'Clé unique ',
	'key_explain' => 'L\'identifiant unique de ce champ',
	'key_missing' => 'Veuillez renseigner une clé unique',
	'key_exists' => 'Cette clé est déjà utilisée',

	'label' => 'Intitulé ',
	'label_explain' => 'L\'intitulé lisible de ce champ',
	'label_missing' => 'Veuillez renseigner un intitulé',

	'attribute_type' => 'Type de fichier ',
	'attribute_type_explain' => 'Liste séparée par une virgule de types de fichiers autorisés, laisser vide empty to accept all.',

	// images
	'attributes_size_width' => 'Image (largeur maxi.) ',
	'attributes_size_width_explain' => 'Les images seront redimensionnées si elles sont plus grandes que la largeur maxi.',

	'attributes_size_height' => 'Image (hauteur maxi.) ',
	'attributes_size_height_explain' => 'Les images seront redimensionnées si elles sont plus grandes que la hauteur maxi.',

	// custom vars
	'name' => 'Nom ',
	'name_explain' => 'Un nom unique',
	'name_missing' => 'Veuillez renseigner un nom unique',
	'name_exists' => 'Nom déjà utilisé',

	'value' => 'Valeur ',
	'value_explain' => 'La donnée a stocker (jusqu\'à 64kb)',
	'value_code_snipet' => 'Fragment de code à insérer dans votre template :<br>
		<code>' . e('<?php echo site_meta(\'%s\'); ?>') . '</code>',

	// messages
	'variable_created' => 'La variable a été créée',
	'variable_updated' => 'La variable a été mise à jour',
	'variable_deleted' => 'La variable a été supprimée',

	'pagetype_created' => 'Votre type de page a été créé',
	'pagetype_updated' => 'Votre type de page a été mis à jour',
	'pagetype_deleted' => 'Votre type de page a été supprimée',

	'field_created' => 'Le champ a été créé',
	'field_updated' => 'Le champ a été mis à jour',
	'field_deleted' => 'Le champ a été supprimé'

);
