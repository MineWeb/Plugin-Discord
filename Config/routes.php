<?php
Router::connect('/discord', ['controller' => 'Discord', 'action' => 'index', 'plugin' => 'discord']);
Router::connect('/admin/support', array('controller' => 'Discord', 'action' => 'index', 'plugin' => 'Discord', 'admin' => true));

