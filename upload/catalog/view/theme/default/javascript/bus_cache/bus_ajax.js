/* Аўтар: "БуслікДрэў" ( https://buslikdrev.by/ ) */
/* © 2016-2024; BuslikDrev - Усе правы захаваны. */

window.busAjax = function(url, setting) {
	'use strict';
	if (typeof url == 'object') {
		setting = url;
		if (typeof setting['url'] === 'undefined') {
			return false;
		} else {
			url = setting['url'];
		}
	}

	if (typeof setting['headers'] !== 'object') {
		setting['headers'] = {};
	}

	if (typeof setting['type'] === 'string') {
		setting['method'] = setting['type'];
	}

	if (typeof setting['method'] !== 'string') {
		setting['method'] = 'GET';
	}

	if (typeof setting['responseType'] !== 'string') {
		setting['responseType'] = 'json';
	}

	if (typeof setting['dataType'] !== 'string') {
		setting['dataType'] = 'text';
	}

	if (typeof setting['data'] === 'undefined') {
		setting['data'] = '';
	}

	if (typeof setting['async'] !== 'boolean') {
		setting['async'] = true;
	}

	if (typeof setting['user'] === 'undefined') {
		setting['user'] = null;
	}

	if (typeof setting['password'] === 'undefined') {
		setting['password'] = null;
	}

	if (typeof setting['beforeSend'] !== 'function') {
		setting['beforeSend'] = function() {};
	}

	if (typeof setting['success'] !== 'function') {
		setting['success'] = function() {};
	}

	if (typeof setting['error'] !== 'function') {
		setting['error'] = function() {};
	}

	if (typeof setting['complete'] !== 'function') {
		setting['complete'] = function() {};
	}

	if (typeof setting['debug'] === 'boolean') {
		setting['debug'] = false;
	}

	var i, datanew = null, xhr = new XMLHttpRequest();

	setting['beforeSend'](xhr, setting);

	if (setting['data']) {
		if (setting['dataType'] == 'json') {
			datanew = JSON.stringify(setting['data']);
		} else {
			if (typeof setting['data'] == 'object') {
				var arrayData, arrayDatas = function(data, gi) {
					var i, ii, iii, array, arrayg;

					array = {};

					for (i in data) {
						if (gi) {
							ii = gi + '[' + encodeURIComponent(i) + ']';
						} else {
							ii = encodeURIComponent(i);
						}
						if (typeof data[i] == 'object') {
							arrayg = arrayDatas(data[i], ii);
							for (iii in arrayg) {
								array[iii] = encodeURIComponent(arrayg[iii]);
							}
						} else {
							array[ii] = encodeURIComponent(data[i]);
						}
					}

					return array;
				}

				arrayData = arrayDatas(setting['data']);

				if ('FormData' in window) {
					datanew = new FormData();

					for (i in arrayData) {
						datanew.append(i, arrayData[i]);
					}
				} else {
					datanew = [];

					for (i in arrayData) {
						datanew.push(i + '=' + arrayData[i]);
					}

					datanew = datanew.join('&').replace(/%20/g, '+');
				}
			} else {
				datanew = setting['data'];
			}
		}
	}

	xhr.open(setting['method'], url, setting['async'], setting['user'], setting['password']);
	xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
	if (!('FormData' in window)) {
		if (setting['dataType'] == 'json') {
			xhr.setRequestHeader('Content-type', 'application/json; charset=UTF-8');
		} else if (setting['dataType'] == 'text') {
			xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded; charset=UTF-8');
		}
	}

	for (i in setting['headers']) {
		xhr.setRequestHeader(i, setting['headers'][i]);
	}

	if (setting['responseType']) {
		xhr.responseType = setting['responseType']; //\"text\" – строка,\"arraybuffer\", \"blob\", \"document\", \"json\" – JSON (парсится автоматически).
	}

	if (setting['debug']) {
		console.log('xhr data: ', datanew);
	}

	xhr.onload = function(e) {
		if (e.target.status == 200) {
			setting['success'](e.target.response, e.target);
			setting['complete'](e.target, setting, e.target.response);
		} else {
			setting['error'](e.target, setting, false);
			setting['complete'](e.target, setting, false);
		}
	};
	xhr.send(datanew);

	return xhr;
};

if (typeof window.CustomEvent !== 'function') {
	window.CustomEvent = function(event, params) {
		params = params || {bubbles:false, cancelable:false, detail:null};

		var evt = document.createEvent('CustomEvent');
		evt.initCustomEvent(event, params.bubbles, params.cancelable, params.detail);

		return evt;
	};
}

document.dispatchEvent(new CustomEvent('busAjax', {bubbles: true}));