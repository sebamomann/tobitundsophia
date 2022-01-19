<?php
	function templateReplace ($template, $placeholders)
	{
		$placeholders = array_merge($placeholders, ['<?' => '', '?>' => '']);
		return str_replace(array_keys($placeholders), $placeholders, $template);
	}

	function statBlockTitle (String $title)
	{
		$template = file_get_contents(__DIR__ . "/statTitle.html");
		$params["{{TITLE}}"] = $title;
		echo templateReplace($template, $params);
	}

	function statBlock (String $title, String $background, $count, $url = "", $sub = "")
	{
		if ($url != "")
		{
			$options = stream_context_create(['http' =>
				[
					'timeout' => 1 //10 seconds
				]
			                                 ]);
			$count = round(file_get_contents($url, FALSE, $options));
			if ($count === FALSE)
			{
				$count = "*-*";
			}
		}

		if ($sub != "")
		{
			$title .= "<span class='sub'>{$sub}</span>";
		}

		$template = file_get_contents(__DIR__ . "/stat.html");

		$params = ["{{TITLE}}" => $title,
			"{{COUNT}}" => $count,
			"{{BACKGROUND}}" => $background];

		echo templateReplace($template, $params);
	}