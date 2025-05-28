<?php

/**
 * @file OjsZulThemePlugin.php
 *
 * Copyright (c) 2014-2023 Simon Fraser University
 * Copyright (c) 2003-2023 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class OjsZulThemePlugin
 * @brief Example child theme plugin
 */

namespace APP\plugins\themes\ojsZul;

use PKP\plugins\ThemePlugin;

class OjsZulThemePlugin extends ThemePlugin {
	/**
	 * Initialize the theme's styles, scripts and hooks. This is only run for
	 * the currently active theme.
	 *
	 * @return null
	 */
	public function init() {
		$this->setParent('defaultthemeplugin');
		$this->modifyStyle('stylesheet', ['addLess' => ['styles/custom.less']]);
	}

	/**
	 * Get the display name of this plugin
	 * @return string
	 */
	public function getDisplayName() {
		return __('plugins.themes.ojsZul.name');
	}

	/**
	 * Get the description of this plugin
	 * @return string
	 */
	public function getDescription() {
		return __('plugins.themes.ojsZul.description');
	}
}

if (!PKP_STRICT_MODE) {
    class_alias('\APP\plugins\themes\ojsZul\OjsZulThemePlugin', '\OjsZulThemePlugin');
}
