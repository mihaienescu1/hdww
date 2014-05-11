var App = (function() {
	
	var _defaults = {
		defaultConceptSearch : { param: 'companies', text : 'Companies' }
	};
	
	var _initMainSearchConceptSearch = function() {
		
		$('.search-panel .dropdown-menu').find('a').click(function(e) {
			e.preventDefault();
			
			var param = $(this).attr('href').replace('#', '');
			var concept = $(this).text();
			
			_setConceptSearchParameter(param, concept);
		});
		
		_setConceptSearchParameter(_defaults.defaultConceptSearch.param, _defaults.defaultConceptSearch.text);
	}
	
	
	var _setConceptSearchParameter = function(p, c) {
		if ("undefined" == typeof(p) || "undefined" == typeof(c)) {
			return false;	
		}
		
		$('.search-panel span#search_concept').text(c);
		$('.input-group #search_param').val(p);
		
		return true;
	}
	
	return {
	
			Init : function() {
				_initMainSearchConceptSearch();
			}

	}
})();