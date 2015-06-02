# lwp-youtube-embed

Plugin home page: [Responsive YouTube Embed Plugin for WordPress](http://www.lightweightplugins.co/plugins/responsive-youtube-embeds/)

## Installation 

From GitHub, simply download the .zip and drag the folder "lwp-youtube-embed" into wp-content/plugins.

There's just two small files in the folder, make sure you're not including the Readme or Git files from the master folder.

## Usage

This plugin provides a shortcode "youtube" to embed responsive Youtube videos on your WordPress site. Most basic usage:

```
[youtube v="Fo4746XZgw8"]
```

## Settings and Defaults

There are a ton of things you can play with while embeding YouTube videos. I've selected a few that you can modify through additional parameters in the shortcode.

### autohide

This parameter indicates whether the video controls will automatically hide after a video begins playing. Supported values are:

* 2 (default) – If the player has a 16:9 or 4:3 aspect ratio, the video progress bar and player controls display or hide automatically. Otherwise, those controls are visible throughout the video.
* 1 – Regardless of the player's dimensions, the video progress bar and player controls display or hide automatically.
* 0 – Regardless of the player's dimensions, the video progress bar and player controls are visible throughout the video.

### autoplay

This parameter specifies whether the initial video will automatically start to play when the player loads. Supported values are 0 or 1. The default value is 0.