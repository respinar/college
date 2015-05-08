<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'literature',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'literature\Literature'              => 'system/modules/literature/classes/Literature.php',

	// Models
	'literature\LiteratureModel'         => 'system/modules/literature/models/LiteratureModel.php',
	'literature\LiteratureCategoryModel' => 'system/modules/literature/models/LiteratureCategoryModel.php',

	// Modules
	'literature\ModuleLiterature'        => 'system/modules/literature/modules/ModuleLiterature.php',
	'literature\ModuleLiteratureList'    => 'system/modules/literature/modules/ModuleLiteratureList.php',
	'literature\ModuleLiteratureDetail'  => 'system/modules/literature/modules/ModuleLiteratureDetail.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_literature_list'   => 'system/modules/literature/templates/modules',
	'mod_literature_detail' => 'system/modules/literature/templates/modules',
	'literature_short'      => 'system/modules/literature/templates/literature',
	'literature_full'       => 'system/modules/literature/templates/literature',
));
