<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package Literature
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
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
	'literature\Literature'             => 'system/modules/literature/classes/Literature.php',

	// Modules
	'literature\ModuleLiterature'       => 'system/modules/literature/modules/ModuleLiterature.php',
	'literature\ModuleLiteratureList'   => 'system/modules/literature/modules/ModuleLiteratureList.php',
	'literature\ModuleLiteratureDetail' => 'system/modules/literature/modules/ModuleLiteratureDetail.php',

	// Models
	'literature\ModuleModel'            => 'system/modules/literature/models/ModuleModel.php',
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
