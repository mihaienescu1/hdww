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
	
	var _initDataToggleOnMainTabs = function() {
		$('#main-tabs > li > a').on('click', function(e) {
			
				e.preventDefault();
				var tabId = $(this).attr('href');
				
				/** Load Id & Content **/
				
				App.LoadContentIntoTabById(tabId, tabId);
				$(this).tab('show');
		});	
	}
	
	var _initPasswordCheckEvent = function() {
		
		$('.register-form #password_confirm').keyup(function() {
			
			var pass = $('.register-form #password');
			
			if ($(this).val() == pass.val()) {
				$('.password-message').hide();
				$('.password-check-match').show();
				$(this).parents('.form-group').removeClass('has-error').addClass('.has-success');
				$('.register-form #register').removeAttr('disabled');
			} else {
				$('.password-message').hide();
				$('.password-check-error').show();	
				$(this).parents('.form-group').addClass('has-error');
				$('.register-form #register').attr('disabled', 'disabled');
			}
			
		});
		
	};
	
	var _initMiscJsFixtures = function() {
		$(".social-login-box").height( $(".login-box").height() - 160);	
		$(function () {
		$('.button-checkbox').each(function () {
	
			// Settings
			var $widget = $(this),
				$button = $widget.find('button'),
				$checkbox = $widget.find('input:checkbox'),
				color = $button.data('color'),
				settings = {
					on: {
						icon: 'glyphicon glyphicon-check'
					},
					off: {
						icon: 'glyphicon glyphicon-unchecked'
					}
				};
	
			// Event Handlers
			$button.on('click', function () {
				$checkbox.prop('checked', !$checkbox.is(':checked'));
				$checkbox.triggerHandler('change');
				updateDisplay();
			});
			$checkbox.on('change', function () {
				updateDisplay();
			});
	
			// Actions
			function updateDisplay() {
				var isChecked = $checkbox.is(':checked');
	
				// Set the button's state
				$button.data('state', (isChecked) ? "on" : "off");
	
				// Set the button's icon
				$button.find('.state-icon')
					.removeClass()
					.addClass('state-icon ' + settings[$button.data('state')].icon);
	
				// Update the button's color
				if (isChecked) {
					$button
						.removeClass('btn-default')
						.removeClass('btn-danger')
						.addClass('btn-' + color + ' active');
				}
				else {
					$button
						.removeClass('btn-' + color + ' active')
						//.addClass('btn-default');
				}
			}
	
			// Initialization
			function init() {
						updateDisplay();
			
						// Inject the icon if applicable
						if ($button.find('.state-icon').length == 0) {
							$button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
						}
					}
					init();
				});
		});
	}
	
	return {
	
			LoadContentIntoTabById : function(id, content) {
				
				if ("undefined" == typeof(id) || "undefined" == typeof(content)) {
					return false;	
				}
				
				$('.tab-pane' + id).html(content);	
			},
			
			Init : function() {
				_initMiscJsFixtures();
				_initMainSearchConceptSearch();
				_initDataToggleOnMainTabs();
				_initPasswordCheckEvent();
			}

	}
})();