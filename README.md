# Pong (HW)

## Background

As part of their display for World Digital Preservation Day 2018, I produced a reimplementation of classic
video game Pong that could be played on the Bodleian Libaries' "Heritage Window" in Blackwell Hall. This is
a 3200 × 1080 pixel video wall comprised of 15 large screens. The left-hand 9 screens (1920 × 1080 pixels)
are used for the game while the right-hand 6 (1280 × 1080 pixels) display a carousel of a set of images
about digital preservation and the Bodleian's commitment to the practice.

The game can be played by one or two players. It's designed to be played using controllers connected via
the JS Gamepad API, but can also be played using the keyboard (and a keyboard is needed to start the game).

PHP is used to simplify the generation of the list of images to appear in the carousel, but if you'd prefer
you can rename the index.php file to index.html and use it without the slides, or manually hard-code the
slides in (or substitute your own slide mechanism).

One of my goals was to start a conversation about the aims of digital preservation and how this game -
while superficially faithful to the original - is *not* an example of digital preservation.

Blog post about the game: https://danq.me/2018/11/30/pong/

## Usage

Tested in Firefox, Chrome, and Safari (gamepad support doesn't seem to work on Safari). Designed to be run
full-screen on a 3200 × 1080 or higher resolution display. You can simulate this in your browser using
debug tools: enable the mobile testing/responsive/device toolbar and set the resolution to 3200 × 1080, and
rescale down. You could also edit the code to make it work at a more-commonplace resolution.

If using gamepads, note that browsers don't allow pages access to gamepads until you've interacted with the
device. So you may need to press a button (any button!) on each gamepad before the page will "see" it.
Odd-numbered gamepads (by connection order) are assigned to the first player, even-numbered ones to the
second player.

Put slide images in the slides folder; the PHP script will automatically detect them on page load and put
them into the rotation. Three sample images are provided.

You can run in a local server with e.g.: `php -S`

Controls:

* 1 - start a 1-player game (the computer will control the paddle on the right)
* 2 - start a 2-player game
* W / "up" on odd-numbered controller - move player 1 up
* S / "down" on odd-numbered controller - move player 1 down
* cursor key up / "up" on even-numbered controller - move player 2 up
* cursor key down / "down" on even-numbered controller - move player 2 down

## Development

The game can be further tweaked mostly via `pong.js`, in which a set of constants can be used to configure
e.g. the difficulty of the computer opponent, the number of rounds in the game, and so on.

## License

This is free and unencumbered software released into the public domain under The Unlicense. Product and
organisation names such as Pong, Bodleian Libraries etc. may be protected trademarks and are not covered
by this license. All resources used in the game were sourced under compatible licenses e.g. CC0/public
domain.
