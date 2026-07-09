var ru2en = {
	ru_str : 'АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЎІабвгдеёжзийклмнопрстуфхцчшщъыьэюяўі(),.; "+/*?@:!',
	en_str : [
	'a','b','v','g','d','e','jo','zh','z','i','j','k','l','m','n','o','p','r','s','t','u','f',
	'h','c','ch','sh','shch','','y','','e','yu','ya','u','i',
	'a','b','v','g','d','e','jo','zh','z','i','j','k','l','m','n','o','p','r','s','t','u','f',
	'h','c','ch','sh','shch','','y','','e','yu','ya','u','i',
	'','','-','-','-','-','','plus','-','-','','dog','',''
	],
	translit : function(org_str) {
		var tmp_str = '', i;

		for (i = 0, l = org_str.length; i < l; i++) {
			var s = org_str.charAt(i), n = ru2en.ru_str.indexOf(s);

			if(n >= 0) {
				tmp_str += ru2en.en_str[n];
			} else {
				tmp_str += s;
			}
		}

		return tmp_str.toLowerCase();
	}
};

function setTranslit(source, dest, rewrite) {
	var name = $("input[name='"+source+"']").val();

	if (name != undefined) {
		$("input[name='"+source+"']").change(function(){
			var name = $("input[name='"+source+"']").val();
			var key = $("input[name='"+dest+"']").val();
			if ((key == '')||(rewrite))
				$("input[name='"+dest+"']").val(ru2en.translit(name));
		});
	}
}

$(document).ready(function(){
	// Products
	setTranslit("product_description\\[1\\]\\[name\\]", "keyword", false);
	// Info Articles
	setTranslit("article_description\\[1\\]\\[name\\]", "keyword", false);
	// Info Information
	setTranslit("information_description\\[1\\]\\[title\\]", "keyword", false);
	// Categories
	setTranslit("category_description\\[1\\]\\[name\\]", "keyword", false);
	// Manufacturer
	setTranslit("name", "keyword", false);
});
