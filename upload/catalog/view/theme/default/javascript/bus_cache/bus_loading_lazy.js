/* Аўтар: "БуслікДрэў" ( https://buslikdrev.by/ ) */
/* © 2016-2024; BuslikDrev - Усе правы захаваны. */

window.busLoadingLazy = {
	'validate':!('loading' in HTMLImageElement.prototype && 'loading' in HTMLIFrameElement.prototype) && 'onscroll' in window,
	'setting':{
		browser:{name:'', version:0},
		elements: '[loading="lazy"][data-busloadinglazy-src], [loading="lazy"][data-busloadinglazy-id]',
		element:'',
		fps: 10,
		fpsNow: 0,
		offsetTop: 50,
		width: 0,
		lazy: false,
		start: 0,
		quantity: 10,
		exception: {},
		debug: false
	},
	'browser':function() {
		'use strict';
		if ('userAgentData' in window.navigator) {
			if ('length' in window.navigator.userAgentData.brands && window.navigator.userAgentData.brands.length) {
				return {name:window.navigator.userAgentData.brands[window.navigator.userAgentData.brands.length-1]['brand'], version:window.navigator.userAgentData.brands[window.navigator.userAgentData.brands.length-1]['version']};
			} else if ('brand' in window.navigator.userAgentData.brands) {
				return {name:window.navigator.userAgentData.brands['brand'], version:window.navigator.userAgentData.brands['version']};
			} else {
				return {name:'', version:0};
			}
		} else {
			var userAgent = window.navigator.userAgent.toLowerCase();
			var browsers = userAgent.match(/(firefox|chrome|safari|brave|vivaldi|edge|msie|opera|yabrowser|huaweibrowser|miuibrowser)\/(\d+\.)/);
			if (browsers && browsers[1] == 'chrome' && browsers[2] >= '40.0') {
				var browsers2 = userAgent.match(/(brave|vivaldi|edge|msie|opera|yabrowser|huaweibrowser|miuibrowser)\/(\d+\.)/);
				if (browsers2) {
					browsers = browsers2;
				}
			}
			if (!browsers) {
				browsers = ['','',1000];
			}
			if (busLoadingLazy.setting['debug']) {
				console.log(browsers)
			}

			return {name:browsers[1], version:parseFloat(browsers[2])};
		}
	},
	'res':function(min, max) {
		'use strict';
		var status = false;

		if (!(typeof min == 'number' || typeof min == 'string')) {
			min = 0;
		}

		if (!(typeof max == 'number' || typeof max == 'string')) {
			max = 0;
		}

		if ('matchMedia' in window) {
			if (min > 0 && min > max) {
				status = window.matchMedia('(min-width: ' + min + 'px)').matches
			} else if (min > 0 && min < max) {
				status = window.matchMedia('(min-width: ' + min + 'px) and (max-width: ' + max + 'px)').matches
			} else if (min == 0 && min < max) {
				status = window.matchMedia('(max-width: ' + max + 'px)').matches
			} else {
				status = true;
			}
		} else {
			min = Number(min);
			max = Number(max);
			if (busApp.setting['lg'] == true && window.innerWidth >= min) {
				status = true;
			} else if (busApp.setting['md'] == true && window.innerWidth >= min && window.innerWidth <= max) {
				status = true;
			} else if (busApp.setting['xs'] == true && window.innerWidth < max) {
				status = true;
			} else {
				status = true;
			}
		}

		return status;
	},
	'status':false,
	'start':function(setting) {
		'use strict';
		busLoadingLazy.setting['fpsNow'] += 1;

		if (busLoadingLazy.setting['fpsNow'] > busLoadingLazy.setting['fps']) {
			document.dispatchEvent(new CustomEvent('busLoadingLazy', {bubbles: true}));
			busLoadingLazy.setting['fpsNow'] = 0;
		}

		if (typeof setting === 'object' && !('target' in setting)) {
			for (var i in setting) {
				busLoadingLazy.setting[i] = setting[i];
			}
		}

		if (typeof busLoadingLazy.setting['browser'] != 'undefined') {
			var status;

			if (typeof busLoadingLazy.setting['browser']['name'] != busLoadingLazy.browser['name']) {
				status = true;

				if (typeof busLoadingLazy.setting['browser']['version'] != 'undefined' && busLoadingLazy.setting['browser']['version'] <= busLoadingLazy.browser['version']) {
					status = false;
				}
			}

			if (status) {
				return false;
			}
		}

		var elements, i, i1, i2, l1, l2, ne, nel, min, max, element;

		if (busLoadingLazy.setting['element']) {
			elements = document.querySelectorAll(busLoadingLazy.setting['element']);
			busLoadingLazy.setting['element'] = '';
		} else {
			elements = document.querySelectorAll(busLoadingLazy.setting['elements']);
		}

		if (elements.length) {
			for (i = busLoadingLazy.setting['start']; i < busLoadingLazy.setting['quantity']; ++i) {
				if (elements[i] && elements[i].getAttribute('data-busloadinglazy-res')) {
					min = elements[i].getAttribute('data-busloadinglazy-res');
				} else {
					min = busLoadingLazy.setting['width'];
				}

				if (min && min.indexOf('-') != -1) {
					max = min.substring(str.indexOf('-'));
					min = min.substring(0, str.indexOf('-'));
				}

				if (elements[i] && window.getComputedStyle(elements[i]).display != 'none' && (busLoadingLazy.setting['lazy'] || (elements[i].getBoundingClientRect().top-busLoadingLazy.setting['offsetTop']) <= window.innerHeight || (elements[i].getBoundingClientRect().bottom-busLoadingLazy.setting['offsetTop']) <= window.innerHeight)) {
					if (elements[i].getAttribute('data-busloadinglazy-src') && !busLoadingLazy.setting['exception'][elements[i].getAttribute('data-busloadinglazy-src')]) {
						elements[i].setAttribute('src', elements[i].getAttribute('data-busloadinglazy-src'));
						elements[i].removeAttribute('data-busloadinglazy-src');
						elements[i].style['opacity'] = 1;
					} else if (busLoadingLazy.setting['lazy'] || busLoadingLazy.res(min, max) && elements[i].getAttribute('data-busloadinglazy-id') && !busLoadingLazy.setting['exception'][elements[i].getAttribute('data-busloadinglazy-id')]) {
						busLoadingLazy.setting['lazy'] = false;

						if (elements[i].childNodes.length > 0) {
							if (elements[i].childNodes[0].tagName.toLowerCase() == 'noscript') {
								elements[i].parentNode.insertBefore(document.createRange().createContextualFragment(elements[i].childNodes[0].outerText), elements[i]);
							} else {
								elements[i].parentNode.insertBefore(document.createRange().createContextualFragment(elements[i].childNodes[0].innerHTML), elements[i]);
							}

							document.dispatchEvent(new CustomEvent('busLoadingLazyId-' + elements[i].getAttribute('data-busloadinglazy-id'), {bubbles: true}));
						}

						elements[i].parentNode.removeChild(elements[i]);
					}
				}
			}
		} else {
			/* if (busLoadingLazy.status == false) {
				busLoadingLazy.status = true;
				window.removeEventListener('scroll', busLoadingLazy.start);
				window.removeEventListener('resize', busLoadingLazy.start);
				window.removeEventListener('click', busLoadingLazy.start);
				window.removeEventListener('orientationchange', busLoadingLazy.start);
				window.addEventListener('scroll', busLoadingLazy.start);
				window.addEventListener('resize', busLoadingLazy.start);
				window.addEventListener('click', busLoadingLazy.start);
				window.addEventListener('orientationchange', busLoadingLazy.start);
			} */
		}
	}
};

if (!('getComputedStyle' in window)) {
	busLoadingLazy.status = true;
}

if (busLoadingLazy.status == false) {
	if (typeof window.CustomEvent !== 'function') {
		window.CustomEvent = function(event, params) {
			params = params || {bubbles:false, cancelable:false, detail:null};

			var evt = document.createEvent('CustomEvent');
			evt.initCustomEvent(event, params.bubbles, params.cancelable, params.detail);

			return evt;
		};
	}

	busLoadingLazy.browser = busLoadingLazy.browser();

	document.dispatchEvent(new CustomEvent('busLoadingLazyBefore', {bubbles: true}));
}

if (busLoadingLazy.status == false) {
	if ('readyState' in document && document.readyState == 'complete' || !('readyState' in document)) {
		busLoadingLazy.start();
	} else {
		window.addEventListener('load', busLoadingLazy.start);
	}
	window.addEventListener('scroll', busLoadingLazy.start, false);
	window.addEventListener('resize', busLoadingLazy.start, false);
	window.addEventListener('click', busLoadingLazy.start, false);
	window.addEventListener('orientationchange', busLoadingLazy.start, false);
	document.dispatchEvent(new CustomEvent('busLoadingLazyAfter', {bubbles: true}));
}