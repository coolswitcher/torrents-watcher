<?php
return [
	/**
	 * Параметры подключения к transmmission
	 *
	 * RPC-HOST:
 	 * https://host.info/transmission/rpc/
 	 * http://localhost:9091/transmission/rpc/
	 */
	'transmission' => [
		'rpc'      => 'http://localhost:9091/transmission/rpc/',
		'username' => FALSE,
		'password' => FALSE,
		'webgui'   => 'http://localhost:9091/transmission/web/', //адрес веб-морды
		'bundle'   => 'com.transgui', //bundle Transmission WEB Gui (macOS Desktop App)
	],

	/**
	 * Папки на хосте для скачеченных файлов
	 */
	'download_dir' => [
		'default' =>'/pathto/Downloads',
		'xxx'     =>FALSE,
	],

	/**
	 * Настройка сервисов для уведомлений
	 * terminal-notifier | Pushover
	 * terminal-notifier: На macOS brew install terminal-notifier
	 */
	'notifiers' => [
		'pushover' => [
			'user'  => FALSE,
			'token' => FALSE,
		],
		'notifier' => '/usr/local/bin/terminal-notifier',
		'current'  => 'notifier', //активный notifier|pushover
	],

	'delete_source_files' => FALSE, //Удалять исходные torrent-файлы

	/**
	 * Паттерн по которому определяем xXx
	 * необязательно, не нужно не указываем
 	 * #.*(pornolab|xxx).*#iu, проверяются файлы и названия
	 */
	'xxx_pattern'         =>FALSE,
	'watch_dir'           => 'pathto/Downloads', //папка с торрент-файлами .torrent
];
