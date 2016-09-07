<?php $opened = false; ?>

@foreach(['primary', 'success', 'info', 'warning', 'danger'] as $type)
	@if(Session::has($type))
		@if(!$opened)
			<div class="flashes container">
			<?php $opened = true ?>
		@endif

		@foreach(Session::get($type) as $flash)
			<div class="flash alert alert-{{ $type }} fade in">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				<div class="message">
					{!! $flash !!}
				</div>
			</div>
		@endforeach

		<?php Session::remove($type) ?>
	@endif
@endforeach

@if($opened)
	</div>
@endif