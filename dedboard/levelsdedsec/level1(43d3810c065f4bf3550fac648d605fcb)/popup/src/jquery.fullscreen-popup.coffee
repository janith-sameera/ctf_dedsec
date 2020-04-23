# Note that when compiling with coffeescript, the plugin is wrapped in another
# anonymous function. We do not need to pass in undefined as well, since
# coffeescript uses (void 0) instead.
do ($ = jQuery) ->

	# window and document are passed through as local variable rather than global
	# as this (slightly) quickens the resolution process and can be more efficiently
	# minified (especially when both are regularly referenced in your plugin).

	# Create the defaults once
	pluginName = "fullScreenPopup"
	defaults =
		bgColor: "#fff"
		inlineStyles: true
		lockDocumentScroll: true
		mainWrapperClass: "fsp-wrapper"
		contentWrapperClass: "fsp-content"
		closePopupClass: "fsp-close"
		animationSpeed: 200 # ms

	# The actual plugin constructor
	class FSP
		constructor: (@element, options) ->
			# jQuery has an extend method which merges the contents of two or
			# more objects, storing the result in the first object. The first object
			# is generally empty as we don"t want to alter the default options for
			# future instances of the plugin
			@options = $.extend {}, defaults, options
			@_defaults = defaults
			@_name = pluginName
			@element = $ @element
			@body = $ "body"
			@element.on "click", @init

		init: (event) =>
			# Place initialization logic here
			# You already have access to the DOM element and the options via the instance,
			# e.g., @element and @options
			event.preventDefault()
			@getTarget()
			@getTargetSizes()
			@createWrappers()
			@wrapTarget()
			@lockDocumentScroll() if @options.lockDocumentScroll
			@render()
			@bindEvents()

		getTarget: ->
			@target = $ @element.attr("href") || @element.data("popup")
			@targetParent = @target.parent()

		getTargetSizes: ->
			@targetSizes = 
				width: @target.width()
				height: @target.height()

		wrapTarget: ->
			@target = @detachFromDom @target
			@target.appendTo @contentWrapper

		render: ->
			@target.show()
			@attachToDom @mainWrapper, "body"
			@popupCentered()
			@mainWrapper.fadeIn(@options.animationSpeed)

		detachFromDom: (element) ->
			element.detach()

		attachToDom: (element, target) ->
			element.appendTo target

		bindEvents: ->
			@close.on "click", @closePopup

		createWrappers: ->
			@mainWrapper = $ "<div/>", {
				"class": "#{@options.mainWrapperClass}"
				"style": "background: #{@options.bgColor}; position: fixed; top: 0; left: 0; right: 0; bottom: 0; z-index: 9999; overflow-y: auto; overflow-x: hidden; display: none" if @options.inlineStyles
			}
			
			@contentWrapper = $("<div/>", {
				"class": "#{@options.contentWrapperClass}"
				"style": "width: #{@targetSizes.width}px; height: #{@targetSizes.height}px;  position: absolute; top: 50%; left: 50%; margin-left: -#{@targetSizes.width/2}px; margin-top: -#{@targetSizes.height/2}px"
			}).appendTo @mainWrapper

			@close = $("<a/>", {
				href: "#"
				html: "&times;"			
				"class": "#{@options.closePopupClass}"
				"style": "position: absolute; right: 2em; top: 2em;" if @options.inlineStyles
			}).appendTo @mainWrapper

		popupCentered: ->
			

		closePopup: (event) =>
			event.preventDefault()
			self = this
			@mainWrapper.fadeOut @options.animationSpeed, () ->
				self.unlockDocumentScroll() if self.options.lockDocumentScroll
				self.target = self.detachFromDom self.target
				self.target.hide()
				self.attachToDom(self.target, self.targetParent)
				self.deleteWrappers()

		deleteWrappers: ->	
			@mainWrapper.remove()	

		lockDocumentScroll: ->
			@body.css "overflow": "hidden"

		unlockDocumentScroll: ->
			@body.css "overflow": "visible"


	# A really lightweight plugin wrapper around the constructor,
	# preventing against multiple instantiations
	$.fn[pluginName] = (options) ->
		@each ->
			if !$.data(@, "plugin_#{pluginName}")
				$.data(@, "plugin_#{pluginName}", new FSP(@, options))
