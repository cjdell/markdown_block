<?php

namespace Concrete\Package\MarkdownBlock;

use Package;
use BlockType;
use Loader;

defined('C5_EXECUTE') or die(_("Access Denied."));

class controller extends Package {
	protected $pkgHandle = 'markdown_block';
	protected $appVersionRequired = '5.7.0.4';
	protected $pkgVersion = '0.0.1';

	public function getPackageName() {
		return t('Markdown Block');
	}

	public function getPackageDescription() {
		return t('Add a markdown block to your page.');
	}

	public function install() {
		$pkg = parent::install();

		BlockType::installBlockTypeFromPackage('markdown_block', $pkg);
	}

	public function uninstall() {
		parent::uninstall();
		$db = Loader::db();
		$db->Execute('DROP TABLE btMarkdownBlock');
	}
}