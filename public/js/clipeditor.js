jQuery(document).ready(function($) {
	var editor = (function() {
		var aceEditor = ace.edit("nice-code");
		var textarea = $('textarea[name="code"]').hide();
		var language = $('#language').val();
		aceEditor.getSession().setValue(textarea.val());
		aceEditor.getSession().setMode("ace/mode/"+language);
		aceEditor.getSession().on('change', function(){
			textarea.val(aceEditor.getSession().getValue());
		});

		return aceEditor;
	})();

	if( $('#code').hasClass('disabled') )
	{
		editor.setReadOnly(true);
	}

	$('#language').on('change', function() {
		var newLanguage = this.value;

		editor.getSession().setMode('ace/mode/'+newLanguage);
	});
});


