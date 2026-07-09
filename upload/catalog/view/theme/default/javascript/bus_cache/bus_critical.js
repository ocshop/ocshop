/* Аўтар: "БуслікДрэў" ( https://buslikdrev.by/ ) */
/* © 2016-2024; BuslikDrev - Усе правы захаваны. */

window.busCritical = {
	'setting':{
		'offset':50,
		'all':false,
		'elements':['font-face', 'keyframes', '*', '::after, ::before', ']']
	},
	'toUnicodeIcon':function(s) {
		'use strict';
		if (typeof s != 'string') {
			s = this;
		}

		var r = '', i, ii = s.length

		for (i = 0; i < ii; ++i) {
			r += s[i].charCodeAt(0).toString(16);
		};

		return '\\' + r;
	},
	'html':function(element, setting, length) {
		'use strict';
		if (typeof setting === 'undefined') {
			setting = {};
		}

		if (typeof setting['all'] == 'undefined') {
			setting['all'] = window.busCritical.setting['all'];
		}

		if (typeof setting['offset'] == 'undefined') {
			setting['offset'] = window.busCritical.setting['offset'];
		}

		var html = {}, i, ii, child, i2, offset;

		if (element.tagName) {
			if (setting['all']) {
				offset = Math.max(document.body.scrollHeight, document.body.offsetHeight, document.documentElement.clientHeight, document.documentElement.scrollHeight, document.documentElement.offsetHeight);
			} else {
				offset = window.outerHeight + (window.outerHeight/100*setting['offset']);
			}

			html[element.tagName.toLowerCase()] = element.tagName.toLowerCase();

			if (element.id) {
				html['#' + element.id] = '#' + element.id;
			}

			ii = element.classList.length;

			for (i = 0; i < ii; ++i) {
				html['.' + element.classList[i]] = '.' + element.classList[i];
			}

			ii = element.children.length;

			for (i = 0; i < ii; ++i) {
				if (element.children[i].offsetTop <= offset) {
					child = busCritical.html(element.children[i], setting);

					for (i2 in child) {
						html[i2] = child[i2];
					}
				}
			}
		}

		return html;
	},
	'css':function(file) {
		'use strict';
		var s, sh, c, i, l, i2, l2;

		s = {length:0};
		sh = document.styleSheets;
		l = sh.length;

		for (i = 0; i < l; ++i) {
			if (!('cssRules' in sh[i]) && 'rules' in sh[i]) {
				sh[i].cssRules = sh[i].rules;
			}

			if ('cssRules' in sh[i] && (sh[i].href && sh[i].href.indexOf(window.location.hostname) != -1 || !sh[i].href)) {
				l2 = sh[i].cssRules.length;

				for (i2 = 0; i2 < l2; ++i2) {
					c = sh[i].cssRules[i2].cssText;

					if (1 == 0 && sh[i].cssRules[i2].type == 1 && sh[i].cssRules[i2].style) {
						c = sh[i].cssRules[i2].style.getPropertyValue('content');

						if (c && c.indexOf('url') == -1 && c != '"/"') {
							c = busCritical.toUnicodeIcon(c.replace(/^[\"]+|[\"]+$/g, ''));
						}

						if (c != '\\' && c.substring(0, 1) == '\\') {
							/* fix */
							s[s.length++] = sh[i].cssRules[i2].cssText.replace(/\bcontent: \"(.[^\"]*?)\"/, 'content: "' + c + '"') + '\r\n';
							/* fix */
						} else {
							s[s.length++] = sh[i].cssRules[i2].cssText + '\r\n';
						}
					} else {
						//console.log(sh[i].cssRules[i2].type);
						//console.log(sh[i].cssRules[i2]);
						//console.log(sh[i].cssRules[i2].cssText);
						if (c.indexOf('url(') != -1 && c.indexOf('://') == -1) {
							c = c.replace(/\burl\(\"(.[^\(\)\"]*?)\"\)/i, 'url("' + sh[i].href.substring(0, sh[i].href.lastIndexOf('/', sh[i].href.length)+1) + '$1")');
						}

						s[s.length++] = c + '\r\n';
					}
				}
			}
		}

		return s;
	},
	'critical':function(search) {
		'use strict';
		var critical = '', element = document.querySelector(search);

		if (element) {
			var time, auto, manual, styles, i, ii, i2;

			time = new Date().getTime();
			auto = window.busCritical.html(element);
			manual = window.busCritical.setting['elements'];

			for (i in manual) {
				auto[manual[i]] = manual[i];
			}

			time = new Date().getTime() - time;
			console.log('Время сбора HTML: ' + time/1000 + ' сек. или ' + time + ' мс.', auto);

			time = new Date().getTime();
			styles = window.busCritical.css();
			time = new Date().getTime() - time;
			console.log('Время сбора CSS: ' + time/1000 + ' сек. или ' + time + ' мс.', styles);

			time = new Date().getTime();
			ii = styles.length;

			for (i = 0; i < ii; ++i) {
				search = false;

				for (i2 in auto) {
					if ((styles[i].indexOf(auto[i2] + '.') != -1 || styles[i].indexOf(auto[i2] + ',') != -1 || styles[i].indexOf(auto[i2] + ':') != -1 || styles[i].indexOf(auto[i2] + ' ') != -1 || styles[i].indexOf(auto[i2] + '[') != -1)) {
						search = true;
					}
				}

				if (search) {
					critical += styles[i];
				}
			}

			time = new Date().getTime() - time;
			console.log('Время фильтрации CSS: ' + time/1000 + ' сек. или ' + time + ' мс.');
		}

		return critical;
	}
};

if (typeof window.CustomEvent !== 'function') {
	window.CustomEvent = function(event, params) {
		params = params || {bubbles:false, cancelable:false, detail:null};

		var evt = document.createEvent('CustomEvent');
		evt.initCustomEvent(event, params.bubbles, params.cancelable, params.detail);

		return evt;
	};
}

if ('readyState' in document && document.readyState == 'complete' || !('readyState' in document)) {
	document.dispatchEvent(new CustomEvent('busCritical', {bubbles: true}));
} else {
	window.addEventListener('load', function() {
		document.dispatchEvent(new CustomEvent('busCritical', {bubbles: true}));
	});
}