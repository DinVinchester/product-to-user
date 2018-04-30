<?php
class ModelExtensionCmsUserproduct extends Model {

	public function install() {
		if (!$this->isExistField('user_id')) {
		    $this->db->query("ALTER TABLE `" . DB_PREFIX . "product` ADD COLUMN  `user_id` int(11) AFTER `product_id`");
		}
	}

	public function uninstall() {
		if ($this->isExistField('user_id')) {
		    $this->db->query("ALTER TABLE `" . DB_PREFIX . "product` DROP COLUMN  `user_id`");
		}
	}

	protected function isExistField($field)
	{
		$chk = $this->db->query("SHOW COLUMNS FROM `" . DB_PREFIX . "product` WHERE `field` = '{$field}'");
		return $chk->num_rows ? true : false;
	}

}
