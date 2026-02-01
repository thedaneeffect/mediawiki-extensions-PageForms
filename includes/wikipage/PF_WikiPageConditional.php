<?php
/**
 * @author Dane
 * @file
 * @ingroup PF
 */

/**
 * Represents a conditional text block that only outputs if
 * the specified template has instances.
 */
class PFWikiPageConditional {
	private $mTemplateName;
	private $mText;

	function __construct( $templateName, $text ) {
		$this->mTemplateName = $templateName;
		$this->mText = $text;
	}

	function getTemplateName() {
		return $this->mTemplateName;
	}

	function getText() {
		return $this->mText;
	}
}
