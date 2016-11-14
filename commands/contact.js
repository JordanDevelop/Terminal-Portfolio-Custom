var contactTitle = 'Contact me';
var contactBody = '<p class="blogP">Hello</p>';
var contactModal =
'<div class="cmd-modal contact fade in" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModal" aria-hidden="true">' +
	'<div class="cmd-modal-dialog contact" role="document">' +
		'<div class="cmd-modal-content contact">' +
			'<div class="cmd-modal-header contact">' +
				'<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>' +
				'<h4 class="cmd-modal-title">' + contactTitle + '</h4></div>' +
			'<div class="cmd-modal-body contact">' +
				'<div class="form">' +
          '<div id="signup">' +
          '<form action="/" method="post">' +
          '<div class="top-row">' +
            '<div class="field-wrap">' +
              '<label>' +
                'First Name<span class="req">*</span>' +
              '</label>' +
              '<input type="text" required autocomplete="off" />' +
            '</div>' +
            '<div class="field-wrap">' +
              '<label>' +
                'Last Name<span class="req">*</span>' +
              '</label>' +
              '<input type="text"required autocomplete="off"/>' +
            '</div>' +
          '</div>' +
          '<div class="field-wrap">' +
            '<label>' +
              'Email Address<span class="req">*</span>' +
            '</label>' +
            '<input type="email"required autocomplete="off"/>' +
          '</div>' +
          '<div class="field-wrap">' +
            '<label>' +
              'Message<span class="req">*</span>' +
            '</label>' +
            '<textarea type="textbox"required autocomplete="off"></textarea>' +
          '</div>' +
          '<button type="submit" class="button button-block"/>Send</button>' +
          '</form>' +
        '</div>' +
'</div>' +
			'</div>' +
		'</div>' +
	'</div>' +
'</div>';