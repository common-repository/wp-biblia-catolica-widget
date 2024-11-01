jQuery(document).ready(function($) {

    $("select[name='bibliacatolicaBooks']").change(function(){
	$("select[name='bibliacatolicaChapters']").empty();
	for (i=0; i < $(this).val(); i++) {
	    var valor = i+1;
	    $("select[name='bibliacatolicaChapters']").append('<option value="'+ valor +'">'+ valor +'</option>');
	}
    });

    $("a.btnReadChapter").click(function(){
	var Book    = document.formBibliaCatolica.bibliacatolicaBooks.selectedIndex;
	var Chapter = document.formBibliaCatolica.bibliacatolicaChapters.selectedIndex+1;
	if(Book == ''){ Book = 1; }
	if(Chapter == ''){ Chapter = 1; }
	window.top.location = 'http://www.bibliacatolica.com.br/01/'+ Book + '/' + Chapter + '.php';
	return false;
    });

});
