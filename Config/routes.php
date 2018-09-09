<?php

Router::connect('/discord', ['controller' => 'Discord', 'action' => 'index', 'plugin' => 'discord']);

Router::connect('/admin/discord', array('controller' => 'Discord', 'action' => 'index', 'plugin' => 'Discord', 'admin' => true));



