<footer id="footer"><?php echo $text_footer; ?><br /><?php echo $text_version; ?></footer></div>
<script type="text/javascript"><!--
function addCodeViewBus() {
	if ($('.summernote').length) {
		$('.btn-codeview').after('<button type="button" onclick="getCodeViewBus();" class="note-btn btn btn-warning btn-sm btn-codeview-bus" title="" data-original-title="Code View Bus"><i class="note-icon-code"></i></button>');
	}
}

function deleteCodeViewBus() {
	$('.btn-codeview-bus').remove();
}

function getCodeViewBus() {
	summernote = $('.summernote');
	if ($(summernote).css('display') == 'none') {
		summernote.show().css('height', 300);
		$('.btn-codeview-bus').addClass('active');
	} else {
		summernote.hide();
		$('.btn-codeview-bus').removeClass('active');
	}
}

if (window.addEventListener) {
	window.addEventListener("load", function() {
		addCodeViewBus();
	}, false);
} else if (window.attachEvent) {
	window.attachEvent("onload", function() {
		addCodeViewBus();
	});
} else {
	window.onload = function() {
		addCodeViewBus();
	}
}
//--></script>
</body></html>
