@extends('layouts.mobile_front')

@section('content')
<div class="pdt54 bg-section">
<?php $totalContent = count($content); ?>

	<ul class="ugn list-view">
		<?php if(!empty($content)) {
			for($k=0; $k<$totalContent; $k++) { 
				?>
		<li><a href="/display/<?php echo $content[$k]['page_link_text'];?>" class="list-group-item list-group-item-action d-flex justify-content-between">
			<span class="list-bullet"><i class="fa fa-check-circle" aria-hidden="true"></i></span> 
			<span><?php echo $content[$k]['title'];?></span>
			<span class="icon ml-auto"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
			</a>
		</li>

	<?php } } ?>
		
	</ul>


</div>

@endsection

