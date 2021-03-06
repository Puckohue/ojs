<?php

/**
 * @file plugins/citationParser/regex/RegexCitationParserPlugin.inc.php
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class RegexCitationParserPlugin
 * @ingroup plugins_citationParser_regex
 *
 * @brief Regular extraction based citation extraction plug-in.
 */


import('lib.pkp.plugins.citationParser.regex.PKPRegexCitationParserPlugin');

class RegexCitationParserPlugin extends PKPRegexCitationParserPlugin {
	/**
	 * Constructor
	 */
	function __construct() {
		parent::__construct();
	}
}

?>
