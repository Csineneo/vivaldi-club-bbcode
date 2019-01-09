<?php
use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return (new Extend\Formatter)
	->configure(function (Configurator $config) {
		$config->BBCodes->addCustom(
			'[audio]{URL}[/audio]',
			'<audio controls><source src="{URL}" type="audio/mpeg">你的瀏覽器不支持 HTML5 音頻，請使用 Vivaldi 瀏覽器訪問。</audio>'
		);

		$config->BBCodes->addCustom(
			'[video]{URL}[/video]',
			'<video width="100%" controls><source src="{URL}" type="video/mp4">你的瀏覽器不支持 HTML5 視頻，請使用 Vivaldi 瀏覽器訪問。</video>'
		);

	});
