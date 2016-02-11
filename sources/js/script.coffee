slickSettings =
	infinite      : true
	adaptiveHeight: true
	slidesToShow  : 1
	slidesToScroll: 1
	prevArrow     : '<button type="button" class="slick-prev"><img src="/layout/images/left.png"></button>'
	nextArrow     : '<button type="button" class="slick-next"><img src="/layout/images/right.png"></button>'

spinOptions =
	lines     : 13
	length    : 21
	width     : 2
	radius    : 24
	corners   : 0
	rotate    : 0
	direction : 1
	color     : '#870b24'
	speed     : 1
	trail     : 68
	shadow    : false
	hwaccel   : false
	className : 'spinner'
	zIndex    : 2e9
	top       : '50%'
	left      : '50%'

delay = (ms, func) -> setTimeout func, ms

end = 'transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd'

calculateLayout = ->


$(document).ready ->

	$('#Modal').on('show.bs.modal', (e)->
		url = $(e.relatedTarget).data 'url'
		if $('#Modal').data('url') != url
			$('#Modal').data('url', url)
				.find('.text').html('').spin spinOptions
			$.get url, (data)->
				$('#Modal .text')
					.html $(data).find('.main .articles .item').html()
					.find('span.date, div.meta').remove()
	).find('.text').spin spinOptions

	$('.nav-tabs a').on 'click', (e)->
		console.log 123
		$(this).tab('show')
		e.preventDefault()

	$('.slider--quotes').on 'fotorama:show', (e, fotorama)->
		$(".authors__item").mod 'active', false
		$(".authors__item:nth-child(#{fotorama.activeIndex + 1})").addClass 'authors__item--active'

	$(".authors__item").on 'click', (e)->
		$('.slider--quotes .fotorama').data('fotorama').show $(this).index()
		e.preventDefault()

	$('.form').on 'submit', (e)->
		$(this).mod 'success', true
		$.post '/form.php', $(this).serialize()
		e.preventDefault()

	slider = document.getElementsByClassName('steps')[0]
	if $(slider).length > 0
		noUiSlider.create slider, {
			start: [ 1, 2 ]
			limit: 1
			behaviour: 'drag'
			connect: true
			margin: 1
			step: 1
			range:
				min: 0
				max: 7
		}
		setSliderActive = (id)->
			$(".years__item").mod 'active', false
			$(".years__item").filter("[data-value=#{id}]").mod 'active', true

		$('.year').css 'minHeight', $('.year').height()

		getData = (id)->
			value = $(".years__item").filter("[data-value=#{id}]").data 'id'
			if value != $('.year').data 'id'
				$('.year').data 'id', value
				$('.year').mod 'disable', true
				$('.year').one end, ->
					$.get '/get.php?id=' + value, (data) ->
						$('.year').html $(data).html()
						h = 0
						$('.year').find('.row').each (key, el) ->
							h += $(el).height()
						$('.year').css 'minHeight', h
						$('.year').mod 'disable', false

		slider.noUiSlider
			.on 'slide', (e)->
				id = parseInt e[0]
				setSliderActive id
		slider.noUiSlider
			.on 'set', (e)->
				getData parseInt e[0]

	if location.hash == '#Present'
		if $('#Present').hasClass 'hidden'
			$('#Present').removeClass 'hidden'
		$('html, body').stop().animate { scrollTop: $('#Present').offset().top + 2 }, '500', 'swing'

	$('a[href="#years"]').on 'click', (e)->
		$('html, body').stop().animate { scrollTop: $('h2').offset().top - 110 }, '500', 'swing'
		e.preventDefault()
	$('a[href="#start"]').on 'click', (e)->
		$('html, body').stop().animate { scrollTop: $('h3').offset().top - 110 }, '500', 'swing'
		e.preventDefault()
	$('a[href="#page"]').on 'click', (e)->
		$('html, body').stop().animate { scrollTop: $('#i15 h2').offset().top - 110 }, '500', 'swing'
		e.preventDefault()
	$('a[href="#Present"]').on 'click', (e)->
		if $('#Present').hasClass 'hidden'
			$('#Present').removeClass 'hidden'
		$('html, body').stop().animate { scrollTop: $('#Present').offset().top + 2 }, '500', 'swing'
		e.preventDefault()

	$(".years__item").on 'click', (e)->
		id = $(this).data 'value'
		if id == 7
			id = 6
		setSliderActive id
		slider.noUiSlider.set [ id, id + 1 ]
		e.preventDefault()

	$('.slider').elem('arrow').on 'click', (e)->
		fotorama = $(this).block().elem('fotorama').data('fotorama')
		console.log fotorama
		if fotorama
			fotorama.show $(this).data 'direction'
		e.preventDefault()

	delay 300, ->
	  calculateLayout()
