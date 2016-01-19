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

	$('.nav-tabs a').on 'click', (e)->
		console.log 123
		$(this).tab('show')
		e.preventDefault()

	slider = document.getElementsByClassName('steps')[0]

	noUiSlider.create slider, {
		start: [ 3, 4 ]
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

	slider.noUiSlider
		.on 'slide', (e)->
			id = parseInt e[0]
			setSliderActive id
	slider.noUiSlider
		.on 'change', (e)->
			id = parseInt e[0]
			$.get '/get.php?id=' + $(".years__item").filter("[data-value=#{id}]").data 'id', data ->
				$('.year').html $(data).html()

	$('a[href="#years"]').on 'click', (e)->
		$('html, body').stop().animate { scrollTop: $('h2').offset().top - 50 }, '500', 'swing'
		e.preventDefault()
	$('a[href="#start"]').on 'click', (e)->
		$('html, body').stop().animate { scrollTop: $('h3').offset().top - 50 }, '500', 'swing'
		e.preventDefault()

	$(".years__item").on 'click', (e)->
		id = $(this).data 'value'
		if id == 7
			id = 6
		setSliderActive id
		slider.noUiSlider.set [ id, id + 1 ]
		e.preventDefault()

	$('.slider').elem('arrow').on 'click', (e)->
		$(this).block().elem('fotorama').data('fotorama').show $(this).data 'direction'
		e.preventDefault()

	delay 300, ->
	  calculateLayout()
