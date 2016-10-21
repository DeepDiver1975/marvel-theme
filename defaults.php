<?php

class OC_Theme {
	public function getTitle() {
		return $this->getEntity();
	}

	public function getName() {
		return $this->getEntity();
	}

	public function getHTMLName() {
		return $this->getEntity();
	}

	public function getSlogan() {
		return 'Sworn to protect a world that hates and fears them.';
	}

	public function getEntity() {
		return 'Marvelous Cloud';
	}

}
