function makeBtnDefault(elem){		
	$(elem).addClass('btn btn-danger btn-dd');			
}

var index;
var buttonsToChange = [
  'a.comment-reply-link',
  '#cancel-comment-reply-link',
  '#commentform #submit',
  '#commentform p a',
  '.wpcf7-submit'
];

for (index = 0; index < buttonsToChange.length; ++index) {
    makeBtnDefault(buttonsToChange[index]);
}
