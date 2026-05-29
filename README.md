# Simple Discord Widget

Simple Discord Widget (SDW) is a lightweight Discord server widget for websites.

## Requirements

1. Discord server widget must be enabled in your server settings.
2. Configure a valid server invite channel for the widget.
3. Set your server ID in `public_html/discord/discordConfig.php`.

## Project Structure

Keep the widget assets in `public_html`:

```
public_html/
	discord/
		ajax_discord.php
		discordConfig.php
		class/discord.php
		css/
		js/discord.js
	bootstrap/
		css/custom.css
		css/fontawesome/all.css
		css/webfonts/
	index.php
```

## Install

1. Add widget CSS:

```html
<link href="./discord/css/discord.css" rel="stylesheet">
<link href="./discord/css/light.css" rel="stylesheet">
```

Use `./discord/css/dark.css` instead of `light.css` for dark theme.

2. Add the widget script:

```html
<script src="./discord/js/discord.js"></script>
```

3. Add a target container where the widget should render:

```html
<div class="col-lg-4" id="discordWidget"></div>
```

4. Set your Discord server ID in:

```
public_html/discord/discordConfig.php
```
