<?php

namespace Concrete\Package\MarkdownBlock\Block\MarkdownBlock;

use \Concrete\Core\Block\BlockController;
use \Concrete\Package\MarkdownBlock\Models\Parsedown;

class Controller extends BlockController {
	public $helpers = array('form');

	protected $btDescription = "Add a markdown block to your page.";
	protected $btName = "Markdown";
	protected $btTable = 'btMarkdownBlock';
	protected $btInterfaceWidth = "400";
	protected $btInterfaceHeight = "500";

	public function view() {
    $parsedown = new Parsedown();
    $this->set('parsed', $parsedown->text($this->markdown));
	}

	public function getBlockTypeName() {
    return t($this->btName);
  }

	public function getBlockTypeDescription() {
    return t($this->btDescription);
  }

	public function add() {
		$this->set('title', '');
		$this->set('markdown', '');
	}
}
