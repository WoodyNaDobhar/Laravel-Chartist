<script>
$(function() {
    new Chartist.{{ $type }}('#{{ $prefix }}{{ $element }}', {
        @if(!empty($labels))
        labels: {!! json_encode($labels) !!},
        @endif
        series: {!! json_encode($series) !!}
    }, 
    @if(!empty($plugins))
        {!! substr(json_encode($options), 0, -1) !!} ,
			"plugins": [
				@foreach($plugins as $plugin)
				{{ $plugin }},
				@endforeach
			]
		}
	@else
		json_encode($options)
	@endif
    , {!! json_encode($responsiveOptions) !!});
});
</script>
