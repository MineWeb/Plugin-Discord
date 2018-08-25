<?php
class DiscordAppSchema extends CakeSchema {

    public $file = 'schema.php';

    public function before($event = array()) {
        return true;
    }

    public function after($event = array()) {}

    public $discord__infos = [
        'id' => ['type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'unsigned' => false, 'key' => 'primary'],
        'api_discord' => ['type' => 'string', 'null' => false, 'default' => null, 'length' => 1000, 'unsigned' => false],
    ];
}