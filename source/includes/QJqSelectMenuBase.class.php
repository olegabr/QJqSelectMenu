<?php
	/**
	 * The base class for the QJqSelectMenu plugin.
	 * the basic functionality is implemented here.
	 */

	/**
	 * The base class for the QJqSelectMenu plugin.
	 * the basic functionality is implemented here.
	 * 
	 * @property string $Theme The theme used to shoe this tree. Possible values: default, default-rtl, classic, apple. The default is default.
	 * @property string[] $Plugins The plugins used by this jsTree instance. The ["themes", "json_data", "ui"] are the default.
	 * @property mixed[] $DataSource The data displayed in the tree. The format is described here: http://www.jstree.com/documentation/json_data
	 * @property bool|string $AlwaysCopy true, false or "multitree". Default is false.
	 * Defines how moves are handled - if set to true every move will be forced to a copy
	 * (leaving the original node in place).
	 * If set to "multitree" only moves between trees will be forced to a copy.
	 * @property string[] $MenuItems Menu items to be shown in a pop-up menu.
	 * Use the QJqSelectMenuMenu enumeration members to construct the array.
	 * It is set to [QJqSelectMenuMenu::All] by default.
	 */
	class QJqSelectMenuBase extends QJqSelectMenuGen {
		/**
		 * Defines how moves are handled - if set to true every move will be forced to a copy
		 * (leaving the original node in place).
		 * If set to "multitree" only moves between trees will be forced to a copy.
		 * @var bool|string true, false or "multitree". Default is false. 
		 */
//		protected $mixAlwaysCopy;

		public function  __construct($objParentObject, $strControlId = null) {
			parent::__construct($objParentObject, $strControlId);
			$this->AddJavascriptFile("../../plugins/QJqSelectMenu/jquery.ui.selectmenu.js");
			$this->AddCssFile("../../plugins/QJqSelectMenu/jquery.ui.selectmenu.css");
		}

		protected function makeJqOptions() {
			$strJqOptions = parent::makeJqOptions();
			if (strlen($strJqOptions)) {
				$strJqOptions .= ',';
			}
//			$strJqOptions .= $this->makeJsProperty('Plugins', 'plugins');
			if ($strJqOptions) $strJqOptions = substr($strJqOptions, 0, -2);
			return $strJqOptions;
		}
		
		public function GetControlJavaScript() {
			$strToReturn =
				sprintf('jQuery("#%s").%s({%s})'
					, $this->getJqControlId(), $this->getJqSetupFunction(), $this->makeJqOptions());
//
//			if (in_array(QJqSelectMenuPlugin::crrm, $this->strPluginArray)) {
//				if (in_array(QJqSelectMenuMenu::All  , $this->strMenuItemsArray) ||
//					in_array(QJqSelectMenuMenu::Cut  , $this->strMenuItemsArray) ||
//					in_array(QJqSelectMenuMenu::Copy , $this->strMenuItemsArray) ||
//					in_array(QJqSelectMenuMenu::Paste, $this->strMenuItemsArray)
//				) {
//					$strToReturn .=
//						sprintf('.on("move_node.jstree", function (e, data) {qcubed.recordControlModification("%s", "_DataJson", JSON.stringify(jQuery("#%s").jstree("get_json", -1)))})'
//							, $this->getJqControlId(), $this->getJqControlId());
//				}
//				if (in_array(QJqSelectMenuMenu::All, $this->strMenuItemsArray) || in_array(QJqSelectMenuMenu::Rename, $this->strMenuItemsArray)) {
//					$strToReturn .=
//						sprintf('.on("rename.jstree", function (e, data) {qcubed.recordControlModification("%s", "_DataJson", JSON.stringify(jQuery("#%s").jstree("get_json", -1)))})'
//							, $this->getJqControlId(), $this->getJqControlId());
//				}
//				if (in_array(QJqSelectMenuMenu::All, $this->strMenuItemsArray) || in_array(QJqSelectMenuMenu::Remove, $this->strMenuItemsArray)) {
//					$strToReturn .=
//						sprintf('.on("remove.jstree", function (e, data) {qcubed.recordControlModification("%s", "_DataJson", JSON.stringify(jQuery("#%s").jstree("get_json", -1)))})'
//							, $this->getJqControlId(), $this->getJqControlId());
//				}
//				if (in_array(QJqSelectMenuMenu::All, $this->strMenuItemsArray) || in_array(QJqSelectMenuMenu::Create, $this->strMenuItemsArray)) {
//					$strToReturn .=
//						sprintf('.on("create.jstree", function (e, data) {qcubed.recordControlModification("%s", "_DataJson", JSON.stringify(jQuery("#%s").jstree("get_json", -1)))})'
//							, $this->getJqControlId(), $this->getJqControlId());
//				}
//			}
			return $strToReturn;
		}

		public function __get($strName) {
			switch ($strName) {
//				case "Plugins" :
//					return $this->strPluginArray;

				default:
					try {
						return parent::__get($strName);
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
		
		public function __set($strName, $mixValue) {
			$this->blnModified = true;

			switch ($strName) {
//				case 'Plugins':
//					try {
//						$this->strPluginArray = QType::Cast($mixValue, QType::ArrayType);
//						break;
//					} catch (QInvalidCastException $objExc) {
//						$objExc->IncrementOffset();
//						throw $objExc;
//					}
				default:
					try {
						parent::__set($strName, $mixValue);
						break;
					} catch (QCallerException $objExc) {
						$objExc->IncrementOffset();
						throw $objExc;
					}
			}
		}
		
	}

?>
