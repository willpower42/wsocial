/*! willpower social 0.2.3 | http://www.willpower.art.br/wsocial | MIT License */

window.wsocial = window.wsocial || {};

$(function() {
	wsocial.cache = {
		$shareButtons: $('.social-sharing')
	}
});

wsocial.init = function () {
	wsocial.socialSharing();
}

wsocial.socialSharing = function () {
	var $buttons = wsocial.cache.$shareButtons,
		$shareLinks = $buttons.find('.wshare'),
		$url = $(location).attr('href'),
		$page_title = encodeURIComponent($('title').text()),
		$page_img = 'http://placehold.it/100/fff/fff.png';

	if ( $('[name="og:image"]').length ) {
		var $page_img = $('[name="og:image"]').attr('content');
	}

	$buttons.attr('data-permalink',$url);

	var $permalink = $buttons.attr('data-permalink');
	
	// Get share stats from respective APIs
	var $facebookLink = $('.share-facebook'),
		$twitterLink = $('.share-twitter'),
		$gplusLink = $('.share-google'),
		$pinterestLink = $('.share-pinterest');

	if ( $facebookLink.length ) {
		$.getJSON('https://graph.facebook.com/?id=' + $permalink + '&callback=?', function(data) {
			$facebookLink.find('.share-count').text(data.shares).addClass('is-loaded');
		});
		$facebookLink.attr('href','http://www.facebook.com/sharer.php?u=' + $permalink);
	}
	
	if ( $twitterLink.length ) {
		$.getJSON('https://cdn.api.twitter.com/1/urls/count.json?url=' + $permalink + '&callback=?', function(data) {
			$twitterLink.find('.share-count').text(data.count).addClass('is-loaded');
		});
		$twitterLink.find('.share-count').addClass('is-loaded');
		$twitterLink.attr('href','http://twitter.com/share?url=' + $permalink + '&amp;text=' + $page_title);
	}

	if ( $pinterestLink.length ) {
		$.getJSON('https://api.pinterest.com/v1/urls/count.json?url=' + $permalink + '&callback=?', function(data) {
			$pinterestLink.find('.share-count').text(data.count).addClass('is-loaded');
		});
		$pinterestLink.attr('href','http://pinterest.com/pin/create/link/?url=' + $permalink + '&amp;media=' + $page_img + '&amp;description=' + $page_title);
	};

	if ( $gplusLink.length ) {
		$gplusLink.find('.share-count').addClass('is-loaded');

		$gplusLink.attr('href','http://plus.google.com/share?url=' + $permalink);
	}


	// Share popups
	$shareLinks.on('click', function(e) {
		e.preventDefault();
		var popup = $(this).attr('class').replace('-','_'),
			link = $(this).attr('href'),
			w = 700,
			h = 400;

		// Set popup sizes
		switch (popup) {
			case 'share-twitter':
				h = 300;
				break;
			case 'share-google':
				w = 500;
				break;
		}
	
		window.open(link, popup, 'width=' + w + ', height=' + h);
	});
}

$(function() {
	window.wsocial.init();
});
